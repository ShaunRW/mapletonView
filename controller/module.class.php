<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/Smarty/libs/Smarty.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/moduleAction.class.php');
class module{

    public $module_name;
    public $page;
    private $action;
    private $module_actions;
    public $display;
    public $data;
    private $child_modules;
    private $isChild;
    private $smarty;
    private $display_enabler;
    
    function __construct($module_name,$page,$action,$data,$isChild){
        
        $this->module_name = $module_name;
        $this->page = $page;
        $this->action = $action;
        $this->data = $data;
        $this->isChild = $isChild;
        
        if($this->isChild==false){
            $this->display_enabler = true;
        }else{
            $this->display_enabler = false;
        }
        
        $this->start_smarty();
        $this->load_actions();
        $this->do_action($this->action);
        $this->load_display();
        if($this->display_enabler==true){
            $this->Display();
        }
    }
    
    function load_actions(){
        $moduleActions = $_SERVER['DOCUMENT_ROOT']."/module/$this->module_name/actions/$this->page.actions.php";
        if(file_exists($moduleActions)){
            require_once($moduleActions);
            $class_name = $this->module_name."_".$this->page."_actions";
            $this->module_actions = new $class_name( $this );
        }else{
            echo "ERROR: module actions does not exist at ".$moduleActions;
        }
    }
    
    function do_action($action){
        if($this->module_actions){
            if(method_exists($this->module_actions,$action)){
                $this->module_actions->$action();
            }else{
                echo "ERROR: action [".$action."] could not be executed in module ".$this->module_name."_".$this->page;
            }
        }else{
            echo "ERROR: looks like module_actions was not loaded properly in ".$this->module_name."_".$this->page;
        }
    }
    
    function load_display(){
        $display_file = $_SERVER['DOCUMENT_ROOT']."/module/$this->module_name/$this->page.tpl";
        if(file_exists($display_file)){
            $display = $this->fetch($display_file);
            if($count = preg_match_all("/\[::\s*(((\w+=[^:\s]+)\s*)+)\s*::\]/",$display,$matches)){
                for($i=0;$i<$count;$i++){
                    $vars = null;
                    $bits=$matches[1][$i];
                    $parts = preg_split("/[\s]+/",rtrim($bits));
                    foreach($parts as $p){
                        list($k,$v) = explode("=",$p);
                        $vars[$k] = $v;
                        if(!isset($vars['ACTION'])){$vars['ACTION']='defaultaction';}
                    }
                    $child = $this->add_child_module($vars['MODULE'],$vars['PAGE'],$vars['ACTION'],$vars,true);
                    $bits = "[:: $bits::]";
                    $display = str_replace($bits,$child->display,$display);
                }
            }
            $this->display = $display;
        }else{
            echo "ERROR: ".$display_file." does not exist!";
        }
    }
    
    function Display(){
        echo $this->display;
    }
    
    function display_switch($state){
        $this->display_enabler = $state;
    }
    
    function add_child_module($module_name = 'main',$page = 'main',$action = 'defaultaction',$data,$isChild = true){
        $child = new module($module_name,$page,$action,$data,$isChild);
        $this->child_modules[] = $child;
        return $child;
    }
    
    // SMARTY FUNCTIONS
    function start_smarty(){
        $this->smarty = new Smarty();
        
        // we need to set the four directories required by smarty
        $this->smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/controller/Smarty/templates/';
        $this->smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/controller/Smarty/templates_c/';
        $this->smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/controller/Smarty/configs/';
        $this->smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/controller/Smarty/cache/';
    }
    
    function assign($key,$value){
        $this->smarty->assign($key,$value);
    }
    
    function fetch($page){
        return $this->smarty->fetch($page);
    }
    // END SMARTY FUNCTIONS
}
?>
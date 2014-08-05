<?php
class moduleAction{
    
    public $module;
    
    function __construct($module){
        $this->module = $module;
    }
    
    function defaultaction(){}
    
    function assign($v,$k){
        $this->module->assign($k,$v);
    }
    
    function getdata(){
        return $this->module->data;
    }
    
    function display_off(){
        $this->module->display_switch(false);
    }
    
    function display_on(){
        $this->module->display_switch(true);
    }
    
    function display_switch($state){
        $this->module->display_switch($state);
    }
    
}
?>
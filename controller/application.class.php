<?php

require_once('controller/module.class.php');
require_once('controller/XML/XMLObject.php');

class application{
    
    public static $sitedata = array();
    
    public static function initialize(){
        self::load_site_data();
        spl_autoload_register('application::classLoader');
    }
    
    private static function load_site_data(){
        $xml_defaults = new XMLObject("module/application.xml");
        if($error = $xml_defaults->GetError()){
            echo "XML Error Loading Defaults: $error";
        }else{
            $arr = $xml_defaults->ExportArray();
            if(isset($arr["application"])){
                self::$sitedata = $arr["application"];
            }else{
                echo "XML Error Loading Defaults: Invalid XML Format";
            }
        }
    }
    
    public static function run(){
        $main_module = new module(self::$sitedata['loader']['module'],self::$sitedata['loader']['page'],'defaultaction',NULL,false);
    }
    
    public static function classLoader($class_name){
        if(strpos($class_name,'Factory')!==false){
            $class_name = str_replace('Factory','',$class_name);
            require_once(self::$sitedata['path']['root']."model/factories/$class_name.factory.php");
        }else{
            echo $class_name;
        }
    }
    
}

?>
<?php
    class main_info_actions extends moduleAction{
        
        public function defaultaction(){
        	$page = isset($_GET['page']) ? $_GET['page'] : "home";
        	$this->module->assign('page',$page);
        }
        
    }
?>
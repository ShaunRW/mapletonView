<?php
    class template_admin_actions extends moduleAction{
        
        public function defaultaction(){
            $this->module->assign('page','dashboard');
        }
        
    }
?>
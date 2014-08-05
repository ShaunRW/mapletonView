<?php
    class loader_loader_actions extends moduleAction{
        
        public function defaultaction(){
			if(isset($_GET["main_module"])){
				$this->module->assign('template',$_GET['main_module']);
				$this->module->assign('page',$_GET['main_page']);
			}else{
				$this->module->assign('template',false);
			}
        }
        
    }
?>
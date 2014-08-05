<?php
    ini_set('display_errors',1); // 0 to disable errors; 1 to enable errors
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/application.class.php');
    application::initialize();
    application::run();
?>
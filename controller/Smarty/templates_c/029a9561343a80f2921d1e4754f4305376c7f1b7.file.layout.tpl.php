<?php /* Smarty version Smarty-3.1.11, created on 2014-06-20 14:44:47
         compiled from "/home/mapleton/public_html/module/main/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186940031353a3813d7d45d8-01744048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '029a9561343a80f2921d1e4754f4305376c7f1b7' => 
    array (
      0 => '/home/mapleton/public_html/module/main/layout.tpl',
      1 => 1403239472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186940031353a3813d7d45d8-01744048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53a3813d7ddc26_48559985',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a3813d7ddc26_48559985')) {function content_53a3813d7ddc26_48559985($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Mapleton View</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <div class="container">
        <div class="wide-column main-background">
            [:: MODULE=main PAGE=header ::]
            [:: MODULE=main PAGE=info ::]
        </div>
        [:: MODULE=main PAGE=footer ::]
    </div>
</body>
</html>
<?php }} ?>
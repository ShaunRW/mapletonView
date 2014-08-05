<?php /* Smarty version Smarty-3.1.11, created on 2014-03-04 11:23:12
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/cmm/module/template/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13589214285315a3237cc6b8-28089040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f686586c0aaf4c4e8524114b21def831de5d0d6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cmm/module/template/admin.tpl',
      1 => 1393928572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13589214285315a3237cc6b8-28089040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5315a3237e9c70_23993721',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315a3237e9c70_23993721')) {function content_5315a3237e9c70_23993721($_smarty_tpl) {?><html>
	<head>
	
        <title>Mapleton View - Site Manager</title>
        
        <!-- include CSS -->
        <link rel="stylesheet" href="css/admin.css" />
        
		<!-- include jquery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	</head>
	<body>
		<div class='container'>
            <div class='sidebar'>
                <div class='top'>
                    <a class='header'><strong>Site Manager</strong></a>
                    <a href='#' class='item'>Website</a>
                    <a href='#' class='item selected'>Dashboard</a>
                    <a href='#' class='item'>Pages</a>
                    <a href='#' class='item'>Settings</a>
                    <a href='#' class='item'>Change Password</a>
                    <a href='#' class='item'>Logout</a>
                </div>
                <!--<div class='bottom'>
                    <a href='#' class='item'>Website</a>
                    <a href='#' class='item'>Logout</a>
                </div>-->
            </div>
            <div class='page'>
                [:: MODULE=admin PAGE=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 ::]
            </div>
        </div>
	</body>
</html><?php }} ?>
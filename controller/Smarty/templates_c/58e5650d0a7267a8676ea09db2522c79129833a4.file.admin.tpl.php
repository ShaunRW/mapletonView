<?php /* Smarty version Smarty-3.1.11, created on 2014-06-20 11:14:47
         compiled from "/home/mapleton/public_html/module/template/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71523094353165528521fb3-17503758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e5650d0a7267a8676ea09db2522c79129833a4' => 
    array (
      0 => '/home/mapleton/public_html/module/template/admin.tpl',
      1 => 1403226854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71523094353165528521fb3-17503758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53165528591591_95905993',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53165528591591_95905993')) {function content_53165528591591_95905993($_smarty_tpl) {?><html>
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
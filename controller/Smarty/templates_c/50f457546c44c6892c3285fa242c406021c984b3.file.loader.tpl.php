<?php /* Smarty version Smarty-3.1.11, created on 2014-06-20 14:44:47
         compiled from "/home/mapleton/public_html/module/loader/loader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1793840629531655e07aace1-42414579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f457546c44c6892c3285fa242c406021c984b3' => 
    array (
      0 => '/home/mapleton/public_html/module/loader/loader.tpl',
      1 => 1403239471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1793840629531655e07aace1-42414579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_531655e0815682_26592173',
  'variables' => 
  array (
    'template' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531655e0815682_26592173')) {function content_531655e0815682_26592173($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['template']->value!=false){?>
[:: MODULE=<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
 PAGE=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 ::]
<?php }else{ ?>
[:: MODULE=main PAGE=layout ::]
<?php }?><?php }} ?>
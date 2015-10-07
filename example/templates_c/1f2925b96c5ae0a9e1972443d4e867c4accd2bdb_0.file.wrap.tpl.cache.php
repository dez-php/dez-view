<?php /* Smarty version 3.1.27, created on 2015-10-07 17:00:53
         compiled from "/var/www/my/_/dez-view/example/views/wrap.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1329194332561525951e7693_79941667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f2925b96c5ae0a9e1972443d4e867c4accd2bdb' => 
    array (
      0 => '/var/www/my/_/dez-view/example/views/wrap.tpl',
      1 => 1444226451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329194332561525951e7693_79941667',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561525952006c3_60845662',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561525952006c3_60845662')) {
function content_561525952006c3_60845662 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1329194332561525951e7693_79941667';
?>
<div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    Smarty handler
    <?php echo $_smarty_tpl->tpl_vars['view']->value->section('content');?>


    <?php echo var_dump($_smarty_tpl->tpl_vars['view']->value);?>




</div><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-10-07 18:34:21
         compiled from "/var/www/my/_/dez-view/example/views/wrap.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:221012156153b7d072f14_86999926%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f2925b96c5ae0a9e1972443d4e867c4accd2bdb' => 
    array (
      0 => '/var/www/my/_/dez-view/example/views/wrap.tpl',
      1 => 1444232057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221012156153b7d072f14_86999926',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56153b7d07cc89_93419721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56153b7d07cc89_93419721')) {
function content_56153b7d07cc89_93419721 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '221012156153b7d072f14_86999926';
?>
<div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    Smarty handler
    <?php echo $_smarty_tpl->tpl_vars['view']->value->section('content');?>

</div><?php }
}
?>
<?php
/* Smarty version 3.1.39, created on 2021-04-11 14:43:45
  from 'D:\Programy\xamp\htdocs\osadnicy\smarty\templates\log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6072ef0151e576_28653693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f970b1038caa8127c734bc48cd3f2d0723a9410' => 
    array (
      0 => 'D:\\Programy\\xamp\\htdocs\\osadnicy\\smarty\\templates\\log.tpl',
      1 => 1618144487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6072ef0151e576_28653693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\Programy\\xamp\\htdocs\\osadnicy\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<table class="table table-bordered">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logArray']->value, 'logLine');
$_smarty_tpl->tpl_vars['logLine']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['logLine']->value) {
$_smarty_tpl->tpl_vars['logLine']->do_else = false;
?>
<tr>
<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['logLine']->value['timestamp'],$_smarty_tpl->tpl_vars['config']->value['datetime']);?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['logLine']->value['sender'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['logLine']->value['message'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['logLine']->value['type'];?>
</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}

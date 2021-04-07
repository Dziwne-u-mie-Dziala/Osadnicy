<?php
/* Smarty version 3.1.39, created on 2021-04-07 13:16:50
  from 'D:\Programy\xamp\htdocs\osadnicy\smarty\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606d94a24245d3_79086318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b67033a2ff986c9ab18bc316876455bf1aed78' => 
    array (
      0 => 'D:\\Programy\\xamp\\htdocs\\osadnicy\\smarty\\templates\\test.tpl',
      1 => 1617793885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_606d94a24245d3_79086318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    Cześć <?php echo $_smarty_tpl->tpl_vars['imie']->value;?>
!
</body>
</html><?php }
}

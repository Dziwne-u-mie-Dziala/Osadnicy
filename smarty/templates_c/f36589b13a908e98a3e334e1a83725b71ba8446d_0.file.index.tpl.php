<?php
/* Smarty version 3.1.39, created on 2021-04-11 14:43:45
  from 'D:\Programy\xamp\htdocs\osadnicy\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6072ef013f5420_57860388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36589b13a908e98a3e334e1a83725b71ba8446d' => 
    array (
      0 => 'D:\\Programy\\xamp\\htdocs\\osadnicy\\smarty\\templates\\index.tpl',
      1 => 1618144487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:log.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6072ef013f5420_57860388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <header class="row border-bottom">
            <div class="col-12 col-md-3">
                Informacje o graczu
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-3">
                        Drewno: <?php echo $_smarty_tpl->tpl_vars['wood']->value;?>

                    </div>
                    <div class="col-12 col-md-3">
                        Żelazo: <?php echo $_smarty_tpl->tpl_vars['iron']->value;?>

                    </div>
                    <div class="col-12 col-md-3">
                        Jedzenie: <?php echo $_smarty_tpl->tpl_vars['food']->value;?>

                    </div>
                    <div class="col-12 col-md-3">
                        Zasób 4
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <a href="sandbox/resetSesji.php">Reset</a>
            </div>
        </header>
        <main class="row border-bottom">
            <div class="col-12 col-md-2 border-right">
                Lista budynków<br>
                <ul style="list-style-type: none; padding:0;">
                    <li>
                        <a href="index.php?action=townHall">Ratusz</a>
                    </li>
                    <li>
                        <a href="index.php?action=townSquare">Plac</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-8">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['mainContent']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="col-12 col-md-2 border-left">
                Lista wojska
            </div>
        </main>
        <footer class="row">
            <div class="col-12">
            
            <?php $_smarty_tpl->_subTemplateRender("file:log.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
            </div>
        </footer>
    </div> <!-- /container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

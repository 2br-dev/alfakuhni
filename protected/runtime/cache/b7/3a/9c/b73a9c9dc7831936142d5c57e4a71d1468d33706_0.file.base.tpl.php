<?php
/* Smarty version 3.1.32, created on 2018-11-23 14:40:24
  from 'C:\OpenServer\domains\alfakuhni.local\protected\themes\base\smarty\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7e7287546f2_18579495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73a9c9dc7831936142d5c57e4a71d1468d33706' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\themes\\base\\smarty\\base.tpl',
      1 => 1542020546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./components/meta.tpl' => 1,
    'file:./components/header.tpl' => 1,
    'file:./components/mainpagebottom.tpl' => 1,
    'file:./components/footer.tpl' => 1,
    'file:./components/scripts.tpl' => 1,
  ),
),false)) {
function content_5bf7e7287546f2_18579495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./components/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['_page']->value['content'];
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {
$_smarty_tpl->_subTemplateRender("file:./components/mainpagebottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:./components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                          <?php }
}

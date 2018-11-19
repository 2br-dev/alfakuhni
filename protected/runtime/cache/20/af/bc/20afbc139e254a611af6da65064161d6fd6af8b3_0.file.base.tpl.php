<?php
/* Smarty version 3.1.32, created on 2018-11-19 16:31:14
  from '/home/b/burdilo/kuhnialfa/public_html/protected/themes/base/smarty/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf2bb22d5ee95_58781182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20afbc139e254a611af6da65064161d6fd6af8b3' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/themes/base/smarty/base.tpl',
      1 => 1542193811,
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
function content_5bf2bb22d5ee95_58781182 (Smarty_Internal_Template $_smarty_tpl) {
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

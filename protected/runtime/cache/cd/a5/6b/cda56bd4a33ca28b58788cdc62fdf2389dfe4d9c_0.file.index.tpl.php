<?php
/* Smarty version 3.1.32, created on 2018-12-05 14:30:28
  from 'C:\OpenServer\domains\alfakuhni.local\protected\app\core\admin-template\view\structure\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c07b6d44d5332_87638329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda56bd4a33ca28b58788cdc62fdf2389dfe4d9c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\core\\admin-template\\view\\structure\\index\\index.tpl',
      1 => 1521234832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07b6d44d5332_87638329 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dd-tree"><?php $_smarty_tpl->_assignInScope('structure_item', $_smarty_tpl->tpl_vars['tv_struct']->value);
if (!empty($_smarty_tpl->tpl_vars['structure_item']->value)) {?><div class="dd nestable-tree" data-path="structure" data-group="0"><ol class="dd-list"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/structure_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('a_tree'=>$_smarty_tpl->tpl_vars['structure_item']->value), 0, true);
?></ol></div><?php }?></div>

<?php }
}

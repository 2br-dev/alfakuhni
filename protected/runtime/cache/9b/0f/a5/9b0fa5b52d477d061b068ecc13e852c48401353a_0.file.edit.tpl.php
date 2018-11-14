<?php
/* Smarty version 3.1.32, created on 2018-11-14 16:40:20
  from 'C:\OpenServer\domains\alfakuhni.local\protected\app\core\admin-template\view\structure\index\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec25c44a63b6_67264597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b0fa5b52d477d061b068ecc13e852c48401353a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\core\\admin-template\\view\\structure\\index\\edit.tpl',
      1 => 1512138870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5bec25c44a63b6_67264597 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" id="form_stc"><input type="hidden" name="action" value="edit">	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_og.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_structure.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="button-container-structure"><a href="#" class="button button-purple button-container-structure-add" onclick="return cp.addBlock(<?php echo $_smarty_tpl->tpl_vars['stc_page']->value['id'];?>
, event);"><i class="zmdi zmdi-plus-circle"></i> Добавить часть страницы</a><?php $_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></form><?php }
}

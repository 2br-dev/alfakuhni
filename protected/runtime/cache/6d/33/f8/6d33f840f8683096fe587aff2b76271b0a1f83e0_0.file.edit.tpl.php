<?php
/* Smarty version 3.1.32, created on 2018-11-14 16:42:14
  from 'C:\OpenServer\domains\alfakuhni.local\protected\app\core\admin-template\view\modules\index\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec2636ee3f94_17322048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d33f840f8683096fe587aff2b76271b0a1f83e0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\core\\admin-template\\view\\modules\\index\\edit.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5bec2636ee3f94_17322048 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['msg']) && $_GET['msg'] == "apply") {?><div class="apply">Данные были успешно сохранены!</div><?php }?><form method="post" id="form_mdd"><input type="hidden" name="module_action" value="edit">	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_module.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_module_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></form><?php }
}

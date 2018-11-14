<?php
/* Smarty version 3.1.32, created on 2018-11-09 12:39:15
  from 'C:\OpenServer\domains\alfakuhni.local\protected\app\core\admin-template\fields\textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be555c3182c03_02317506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06801c6569a53869baeb14982d819a680182c0a2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\core\\admin-template\\fields\\textarea.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be555c3182c03_02317506 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><?php }
}

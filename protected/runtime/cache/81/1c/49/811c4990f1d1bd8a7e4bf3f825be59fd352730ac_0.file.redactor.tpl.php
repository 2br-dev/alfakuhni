<?php
/* Smarty version 3.1.32, created on 2018-11-13 18:05:07
  from 'C:\OpenServer\domains\alfakuhni.local\protected\app\core\admin-template\system\redactor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5beae8236ad442_64134531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811c4990f1d1bd8a7e4bf3f825be59fd352730ac' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\core\\admin-template\\system\\redactor.tpl',
      1 => 1515768446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beae8236ad442_64134531 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['redactor_type']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('redactor_type', "imperavi");
}?>

<?php if ($_smarty_tpl->tpl_vars['redactor_type']->value == 'quill') {?>
<div id="<?php echo $_smarty_tpl->tpl_vars['redactor_id']->value;?>
-container" class="quill-container"><?php echo stripslashes($_smarty_tpl->tpl_vars['redactor_value']->value);?>
</div>
<?php }?>

<textarea name="<?php echo $_smarty_tpl->tpl_vars['redactor_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['redactor_id']->value;?>
" class="redactor_<?php echo $_smarty_tpl->tpl_vars['redactor_type']->value;?>
 js-redactor" data-redactor="<?php echo $_smarty_tpl->tpl_vars['redactor_type']->value;?>
" style="min-height: 150px" rows="5" cols="50"><?php echo stripslashes($_smarty_tpl->tpl_vars['redactor_value']->value);?>
</textarea>

<?php }
}

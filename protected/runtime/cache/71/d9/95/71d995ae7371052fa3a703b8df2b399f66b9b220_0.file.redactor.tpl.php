<?php
/* Smarty version 3.1.32, created on 2018-12-03 00:08:37
  from '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/system/redactor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0449d5de5a67_47473971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d995ae7371052fa3a703b8df2b399f66b9b220' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/system/redactor.tpl',
      1 => 1542193810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0449d5de5a67_47473971 (Smarty_Internal_Template $_smarty_tpl) {
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

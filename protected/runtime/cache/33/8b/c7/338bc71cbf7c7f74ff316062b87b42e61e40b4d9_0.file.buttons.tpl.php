<?php
/* Smarty version 3.1.32, created on 2018-11-14 21:13:53
  from '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/system/buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec65e13c8064_88396858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '338bc71cbf7c7f74ff316062b87b42e61e40b4d9' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/system/buttons.tpl',
      1 => 1542193810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec65e13c8064_88396858 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="button-container"><button class="button is-save" name="save" type="submit" onclick="return CheckAndSubmit('form_mdd')"><i class="zmdi zmdi-save"></i><?php echo t('buttons.save.and.close');?>
</button><button class="button is-apply" name="apply" type="submit" onclick="return CheckAndSubmit('form_mdd')"><i class="zmdi zmdi-check-square"></i><?php echo t('buttons.save');?>
</button><span class="button-container__title">или</span><a class="button-link" href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/"><i class="zmdi zmdi-arrow-left"></i><?php echo t('buttons.cancel');?>
</a></div><?php }
}

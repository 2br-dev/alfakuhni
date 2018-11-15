<?php
/* Smarty version 3.1.32, created on 2018-11-14 22:52:57
  from '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/fields/datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7d19b0e088_21405382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45fba5b052c116c845e7fc2dea54220a9f9caef' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/fields/datetime.tpl',
      1 => 1542193810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7d19b0e088_21405382 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="calendar calendar_datetime"><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="calendar__field js-datetimepicker" data-date-format="dd.mm.yyyy hh:ii" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" readonly><span class="calendar__icon add-on"><i class="zmdi zmdi-calendar"></i></span></div>
<?php }
}

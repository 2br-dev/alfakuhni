<?php
/* Smarty version 3.1.32, created on 2018-11-15 13:18:06
  from '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/view/settings/menu/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bed47de7e1344_72198272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b982645649489397c01d6ed95fa4c1ceffb6af9' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/view/settings/menu/index.tpl',
      1 => 1542193810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed47de7e1344_72198272 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table"><col><col width="160"><col width="160"><col width="65"><thead><tr><th colspan="4">Список меню</th></tr></thead><tbody><tr><td class="h">Наименование меню</td><td class="h">Системное имя</td><td class="h">Отображать подменю</td><td class="h tac"></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_list']->value, 'item', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/menu/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Редактировать" class="module-item-link"><i class="zmdi zmdi-edit"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['system'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['tree'] == 1) {?><span class="color-green">Да</span><?php } else { ?><span class="color-red">Нет</span><?php }?></td><td class="tac"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/menu/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="zmdi zmdi-edit" title="Редактировать"></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/menu/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="zmdi zmdi-delete remove-trigger" title="Удалить" onclick="return cp.dialog('Вы действительно хотите удалить меню?');" data-no-instant></a></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="button-container clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/menu/add" class="button"><i class="zmdi zmdi-plus-circle"></i>Добавить меню</a></div><?php }
}

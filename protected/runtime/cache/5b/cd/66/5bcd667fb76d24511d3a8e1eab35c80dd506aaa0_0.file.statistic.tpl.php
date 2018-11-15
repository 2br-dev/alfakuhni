<?php
/* Smarty version 3.1.32, created on 2018-11-15 13:18:19
  from '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/view/shopping/orders/statistic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bed47eb790628_82500798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bcd667fb76d24511d3a8e1eab35c80dd506aaa0' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/app/core/admin-template/view/shopping/orders/statistic.tpl',
      1 => 1542193810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./statistic.item.tpl' => 1,
  ),
),false)) {
function content_5bed47eb790628_82500798 (Smarty_Internal_Template $_smarty_tpl) {
if ($_SESSION['userinf']['gid'] == 10 || $_SESSION['userinf']['id'] == 4) {?><div class="widget-table"><div class="widget-table__title"><span class="icon icon-chart"></span>&nbsp;&nbsp;Статистика заказов</div><div class="widget-table__button"><button type="button" onclick="orders.toggle(this, 'statistic', 'is-visible', { 1: 'Показать', 0: 'Скрыть' })">Показать</button></div></div><?php if ($_smarty_tpl->tpl_vars['statistic']->value) {?><div class="statistic" id="statistic"><table class="statistic__table"><colgroup><col width="160"><col width="160"><col width="160"><col width="160"><col width="160"><col></colgroup><thead><tr class="statistic__trow"><th class="statistic__head"></th><th class="statistic__head">Кол-во продаж</th><th class="statistic__head">Общая сумма</th><th class="statistic__head">Средний чек</th><th class="statistic__head">Всего / уникальных</th><th class="statistic__head">Хиты продаж</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statistic']->value, 'item', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->_subTemplateRender('file:./statistic.item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'name'=>$_smarty_tpl->tpl_vars['item']->value['name'],'list'=>$_smarty_tpl->tpl_vars['item']->value['list']), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php }
}
}
}

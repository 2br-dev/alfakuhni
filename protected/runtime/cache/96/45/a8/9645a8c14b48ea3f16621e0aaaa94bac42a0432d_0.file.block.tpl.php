<?php
/* Smarty version 3.1.32, created on 2018-11-14 14:00:28
  from 'C:\OpenServer\domains\alfakuhni.local\protected\modules\gallery\tpl\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec004c0d3253_80262815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9645a8c14b48ea3f16621e0aaaa94bac42a0432d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\modules\\gallery\\tpl\\block.tpl',
      1 => 1541774183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec004c0d3253_80262815 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['gallery']->value) {?><h2 class="topic">Галерея</h2><div class="gallery-slider"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?><div><div class="gallery"><div class="gallery-image"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sort']->value['model'];?>
"></a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['sort']->value['price']) {?><div class="gallery-price"><?php echo $_smarty_tpl->tpl_vars['sort']->value['price'];?>
</div><?php }?></div><div class="bordered"><div><p class="gallery-header">Модель:</p><p><?php echo $_smarty_tpl->tpl_vars['sort']->value['model'];?>
</p></div><div><?php if ($_smarty_tpl->tpl_vars['sort']->value['category']) {?><p class="gallery-header">Категория:</p><p><?php echo $_smarty_tpl->tpl_vars['sort']->value['category'];?>
</p><?php }?></div><div><?php if ($_smarty_tpl->tpl_vars['sort']->value['material']) {?><p class="gallery-header">Материал фасада:</p><p><?php echo $_smarty_tpl->tpl_vars['sort']->value['material'];?>
</p><?php }?></div><div><?php if ($_smarty_tpl->tpl_vars['sort']->value['color']) {?><p class="gallery-header">Цвет:</p><p><?php echo $_smarty_tpl->tpl_vars['sort']->value['color'];?>
</p><?php }?></div><div><?php if ($_smarty_tpl->tpl_vars['sort']->value['elements']) {?><p class="gallery-header">Декоративные элементы:</p><p><?php echo $_smarty_tpl->tpl_vars['sort']->value['elements'];?>
</p><?php }?></div><div><?php if ($_smarty_tpl->tpl_vars['sort']->value['vitrage']) {?><p class="gallery-header">Витраж:</p><p><?php echo $_smarty_tpl->tpl_vars['sort']->value['vitrage'];?>
</p><?php }?></div></div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="container"><div class="link-btn gallery-btn"><a href="/realizovannye-proekty"> Посмотреть реализованные проекты </a></div></div><?php }
}
}

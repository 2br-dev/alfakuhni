<?php
/* Smarty version 3.1.32, created on 2018-11-15 12:19:38
  from '/home/b/burdilo/kuhnialfa/public_html/protected/modules/projects/tpl/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bed3a2a329f28_32481739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4deca3dd530b8782035aa83f8f526c8e6d1d6c' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/modules/projects/tpl/item.tpl',
      1 => 1542193811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed3a2a329f28_32481739 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="realised-projects"><div class="container"><a href="/realizovannye-proekty" class="link-btn">← к проектам </a><h1 class="topic"><?php echo $_smarty_tpl->tpl_vars['projects']->value['title'];?>
</h1><div class="realised-projects-price"><div><p>Цена кухни со всеми механизмами составила:</p><p><?php echo $_smarty_tpl->tpl_vars['projects']->value['price'];?>
</p></div><?php if ($_smarty_tpl->tpl_vars['projects']->value['tech']) {?><div><p>Стоимость техники:</p><p><?php echo $_smarty_tpl->tpl_vars['projects']->value['tech'];?>
</p></div><?php }?></div></div><!-- <div class="realised-projects-img"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value['image_back'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['projects']->value['title'];?>
"><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="bordered"><p><?php echo $_smarty_tpl->tpl_vars['projects']->value['title'];?>
</p><div class="bordered-desc"><?php echo $_smarty_tpl->tpl_vars['projects']->value['innerdesc'];?>
</div><div class="bordered-tech"><?php echo $_smarty_tpl->tpl_vars['projects']->value['innertech'];?>
</div></div></div> --><div class="bordered"><p><?php echo $_smarty_tpl->tpl_vars['projects']->value['title'];?>
</p><div class="bordered-desc"><?php echo $_smarty_tpl->tpl_vars['projects']->value['innerdesc'];?>
</div><div class="bordered-tech"><?php echo $_smarty_tpl->tpl_vars['projects']->value['innertech'];?>
</div></div><div class="realised-projects-photos"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?><div class="realised-projects-photos-item"><a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['projects']->value['title'];?>
"></a></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="container"><h2 class="topic">Видео о проекте:</h2><iframe src="<?php echo $_smarty_tpl->tpl_vars['projects']->value['video'];?>
" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></section> 

<?php }
}

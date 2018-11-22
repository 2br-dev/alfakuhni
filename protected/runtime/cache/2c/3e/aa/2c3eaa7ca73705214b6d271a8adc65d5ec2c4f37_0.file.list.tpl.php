<?php
/* Smarty version 3.1.32, created on 2018-11-22 15:49:51
  from '/home/b/burdilo/kuhnialfa/public_html/protected/modules/projects/tpl/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf6a5ef175bb7_17427721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3eaa7ca73705214b6d271a8adc65d5ec2c4f37' => 
    array (
      0 => '/home/b/burdilo/kuhnialfa/public_html/protected/modules/projects/tpl/list.tpl',
      1 => 1542193811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6a5ef175bb7_17427721 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['projects']->value) {?>
<section class="realised">
    <h1 class="topic">
        Реализованные проекты
    </h1>

    <div class="projects-container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
        <div class="projects">
            <div class="projects-text">
                <p class="projects-text-price"><?php echo $_smarty_tpl->tpl_vars['sort']->value['title'];?>
</p>
                <div><a href="/realizovannye-proekty/<?php echo $_smarty_tpl->tpl_vars['sort']->value['system'];?>
" class="link-btn">Узнать больше</a></div>
                <p><?php echo $_smarty_tpl->tpl_vars['sort']->value['desc'];?>
</p>
                <p class="projects-text-price"><?php echo $_smarty_tpl->tpl_vars['sort']->value['price'];?>
</p>
                <?php if ($_smarty_tpl->tpl_vars['sort']->value['tech']) {?>
                    <p>Стоимость техники</p>
                    <p class="projects-text-price"><?php echo $_smarty_tpl->tpl_vars['sort']->value['tech'];?>
</p>
                <?php }?>    
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
""><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sort']->value['title'];?>
"></a>
            <?php break 1;?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section>
<?php }
}
}

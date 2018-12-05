<?php
/* Smarty version 3.1.32, created on 2018-12-05 15:58:39
  from 'C:\OpenServer\domains\alfakuhni.local\protected\modules\projects\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c07cb7f9eb5d7_54703843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdfee1ebcbda7225365b56262b9d1bf96b7575c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\modules\\projects\\tpl\\list.tpl',
      1 => 1544014079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07cb7f9eb5d7_54703843 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['projects']->value && $_smarty_tpl->tpl_vars['uri']->value[0] != '') {?>
<section class="realised">
    <a href="/" class="link-btn-nav">← на главную </a>
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
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?>
<section class="realised realised-main">
    <h1 class="topic" style="margin-top: 120px;">
    Реализованные проекты
    </h1>
    <div class="projects-slider">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
        <div class="projects-container" style="text-align: center;">
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
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section>    
    <div class="hint">
        <img src="img/1.jpg" alt="Лучшая мебель">
        <div class="bordered">
            <p>В нашей мебели используется лучшая немецкая, австрийская и итальянская фурнитура со сроком эксплуатации 25 лет и более.</p>
            <p>Широкий ассортимент встраиваемой техники различных брендов от эконом до премиум.</p>
            <p>Используем всё внутреннее пространство кухонной мебели, задействуя мертвые зоны системами выдвижения и трансформации.</p>
        </div>
    </div>
    <h2 class="topic">Кухня от и до</h2>
    <div class="result">
        <div class="result-description wow slideInLeft">Столешницы</div>
        <div class="result-img wow slideInLeft" data-wow-delay="1.5s">
        	<img src="img/icons/triangle.png">
        		</div>
        <div class="result-description wow slideInLeft" data-wow-delay="1.2s">Фурнитура</div>
        <div class="result-img wow slideInLeft" data-wow-delay=".9s">
                <img src="img/icons/triangle.png">
        		</div>
        <div class="result-description wow slideInLeft" data-wow-delay=".6s">Освещение</div>
         <div class="result-img wow slideInLeft" data-wow-delay=".3s">
                    <img src="img/icons/triangle.png">
        		</div>
        <div class="result-img wow slideInRight">
                        <img src="img/icons/triangle.png">
         		</div>
         <div class="result-description wow slideInRight" data-wow-delay=".3s">Бытовая техника</div>
         <div class="result-img wow slideInRight" data-wow-delay=".6s">
                            <img src="img/icons/triangle.png">
          		</div>
          <div class="result-description wow slideInRight" data-wow-delay=".9s">Внутренне наполнение</div>
          <div class="result-img wow slideInRight" data-wow-delay="1.2s">
                                <img src="img/icons/triangle.png">
            	</div>
            <div class="result-description wow slideInRight" data-wow-delay="1.5s">Сантехника</div>
     </div>
<?php }
}
}

<?php
/* Smarty version 3.1.32, created on 2018-12-05 14:27:44
  from 'C:\OpenServer\domains\alfakuhni.local\protected\app\core\admin-template\view\dashboard\technology.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c07b630ddc5f1_51414505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5716cd876f0958161f880afb4a01f899fccd4a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\core\\admin-template\\view\\dashboard\\technology.tpl',
      1 => 1511963652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07b630ddc5f1_51414505 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="technology_block"><a href="#" class="button mb5 " onclick="return toggle_item(event, this, 'server-info', ['zmdi-chevron-up', 'zmdi-chevron-down'])"><i class="zmdi zmdi-chevron-down"></i> <i class="zmdi zmdi-info-outline"></i> <?php echo t('server.informationen');?>
</a><div class="technology_list clearfix hidden" id="server-info"><?php if (isset($_smarty_tpl->tpl_vars['technology']->value['php'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['php'];?>
</div><div class="technology_logo"><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/phpinfo.php" target="_blank"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/php.png" height="60" alt=""></a></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['mysql'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['mysql'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/mysql.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['memcached'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['memcached'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/memcached.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['apache'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['apache'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/apache.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['nginx'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['nginx'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/nginx.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['mongodb'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['mongodb'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/mongodb.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['redis'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['redis'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/redis.png" height="60" alt=""></div></div><?php }?></div></div><?php }
}

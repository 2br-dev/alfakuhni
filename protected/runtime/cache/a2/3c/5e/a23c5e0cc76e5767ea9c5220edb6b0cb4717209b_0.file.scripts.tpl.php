<?php
/* Smarty version 3.1.32, created on 2018-11-14 14:57:05
  from 'C:\OpenServer\domains\alfakuhni.local\protected\themes\base\smarty\components\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec0d91c4d436_51348590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23c5e0cc76e5767ea9c5220edb6b0cb4717209b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\themes\\base\\smarty\\components\\scripts.tpl',
      1 => 1542196595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec0d91c4d436_51348590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\libs\\smarty.plugins\\function.compress.php','function'=>'smarty_function_compress',),));
echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'))),$_smarty_tpl);?>
<!-- Dependencies --><?php echo '<script'; ?>
 type="text/javascript" src="/static/js/jquery.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/static/js/jquery-migrate.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/apps/libs/slick/slick/slick.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/apps/libs/wowjs/dist/wow.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/apps/libs/simplelightbox-master/dist/simple-lightbox.min.js"><?php echo '</script'; ?>
><!-- Main JavaScript File --><?php echo '<script'; ?>
 type="text/javascript" src="/static/js/main.js"><?php echo '</script'; ?>
></body></html><?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-11-14 14:00:28
  from 'C:\OpenServer\domains\alfakuhni.local\protected\themes\base\smarty\components\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec004c519711_39286843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23c5e0cc76e5767ea9c5220edb6b0cb4717209b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\themes\\base\\smarty\\components\\scripts.tpl',
      1 => 1542176846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec004c519711_39286843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\alfakuhni.local\\protected\\app\\libs\\smarty.plugins\\function.compress.php','function'=>'smarty_function_compress',),));
echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'))),$_smarty_tpl);?>
<!-- Dependencies --><?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-migrate-3.0.1.min.js" integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4=" crossorigin="anonymous"><?php echo '</script'; ?>
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

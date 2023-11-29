<?php
/* Smarty version 4.3.4, created on 2023-11-29 20:29:02
  from 'C:\xampp\htdocs\KalkulatorKredytowyAmelia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656790fec43779_30897922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a35094ec300f6757b320c9b4233eb9c11d165055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KalkulatorKredytowyAmelia\\app\\views\\templates\\main.tpl',
      1 => 1701286139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656790fec43779_30897922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['dane']->value->opis;?>
">
	<title><?php echo $_smarty_tpl->tpl_vars['dane']->value->tytul;?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">	
</head>

<body>

<div class="header">
	<h1><?php echo $_smarty_tpl->tpl_vars['dane']->value->tytul;?>
</h1>
	<h2><?php echo $_smarty_tpl->tpl_vars['dane']->value->opis;?>
</h1>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1546217261656790fec42a90_72139446', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1224959008656790fec43258_93870134', 'footer');
?>

	</p>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_1546217261656790fec42a90_72139446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1546217261656790fec42a90_72139446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1224959008656790fec43258_93870134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1224959008656790fec43258_93870134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Dziękujemy za skorzystanie <?php
}
}
/* {/block 'footer'} */
}

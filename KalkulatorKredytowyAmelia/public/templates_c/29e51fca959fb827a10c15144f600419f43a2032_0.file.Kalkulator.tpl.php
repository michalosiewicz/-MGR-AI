<?php
/* Smarty version 4.3.4, created on 2023-11-29 20:28:34
  from 'C:\xampp\htdocs\KalkulatorKredytowyAmelia\app\views\Kalkulator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656790e2aa14b6_64386776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29e51fca959fb827a10c15144f600419f43a2032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KalkulatorKredytowyAmelia\\app\\views\\Kalkulator.tpl',
      1 => 1701286110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656790e2aa14b6_64386776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1510986877656790e2a97d61_74034622', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1510986877656790e2a97d61_74034622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1510986877656790e2a97d61_74034622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
oblicz" method="post">

			<label for="loanAmount">Kwota kredytu: </label>
			<input id="loanAmount" type="text" name="kredyt" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->kredyt;?>
"><br /><br />
			<label for="interest">Oprocentowanie roczne: </label>
			<input id="interest" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->oprocentowanie;?>
"><br /><br />
			<label for="repaymentPeriod">Okres kredytowania w latach: </label>
			<input id="repaymentPeriod" type="text" name="okres_kredytowania" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->okres_kredytowania;?>
"><br /><br />
			<button type="submit">Oblicz</button>
		
	</form>

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
	<ul>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
  		<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br />
  		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<?php }?>

<?php
}
}
/* {/block 'content'} */
}

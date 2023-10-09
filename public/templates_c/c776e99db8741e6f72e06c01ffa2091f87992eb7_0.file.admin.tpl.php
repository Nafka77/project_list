<?php
/* Smarty version 4.3.0, created on 2023-09-27 09:34:35
  from 'C:\xampp\htdocs\project_list\app\views\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6513db0be95ed3_01750847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c776e99db8741e6f72e06c01ffa2091f87992eb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_list\\app\\views\\admin.tpl',
      1 => 1695738002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6513db0be95ed3_01750847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3989296436513db0be63269_53147318', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_3989296436513db0be63269_53147318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3989296436513db0be63269_53147318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Ustawienia użytkowników</h2>
					<p></p>
					<div class="split style1">
						<section>
						<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Imie</th>
        	<th>Nazwisko</th>
            <th>Email</th>
            <th>Rola</th>
            <th class="actions">Opcje</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["firstname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["lastname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["rola"];?>
</td><td class="opcje"><ul class="actions"><li><a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"adminEdit",'id'=>$_smarty_tpl->tpl_vars['r']->value['id']),$_smarty_tpl ) );?>
">Edytuj</a></li><li><a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"adminDelete",'id'=>$_smarty_tpl->tpl_vars['r']->value['id']),$_smarty_tpl ) );?>
">Usuń</a></li></ul></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>	
						</section>
					</div>
				</div>
			</section>
<?php
}
}
/* {/block "content"} */
}

<?php
/* Smarty version 4.3.0, created on 2023-09-26 16:19:47
  from 'C:\xampp\htdocs\project_list\app\views\addTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6512e883d07a01_72964495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07d55c8059baf363404619f64fdc77cbcad68707' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_list\\app\\views\\addTask.tpl',
      1 => 1695737968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6512e883d07a01_72964495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16765685256512e883cfac70_92589732', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_16765685256512e883cfac70_92589732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16765685256512e883cfac70_92589732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Add new task to your (never ending) list</h2>
					<p></p>
					<div class="split style1">
						<section>
							<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"addTask"),$_smarty_tpl ) );?>
">
								<div class="fields">
									<div class="field">
										<label for="email">Opis</label>
										<input type="text" maxlength=512 name="title" id="name" />
									</div>
									<div class="field">
										<label for="pass">Category</label>
										<select name="category" id="name" required>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
												<option value=<?php echo $_smarty_tpl->tpl_vars['d']->value["id"];?>
><?php echo $_smarty_tpl->tpl_vars['d']->value["name"];?>
</option>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									</div>
									<div class="field">
										<ul class="actions">
											<li><input type="submit" class="button submit" value="Add"></input></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</div>
			</section>
<?php
}
}
/* {/block "content"} */
}

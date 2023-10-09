<?php
/* Smarty version 4.3.0, created on 2023-10-09 23:31:50
  from 'C:\xampp\htdocs\project_list\app\views\adminEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65247146496630_36865933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab88fdf8df56463de76679684469a9d276a8c4cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_list\\app\\views\\adminEdit.tpl',
      1 => 1696887104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65247146496630_36865933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1025806237652471464871f5_24420647', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1025806237652471464871f5_24420647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1025806237652471464871f5_24420647',
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
								<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"edit",'id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl ) );?>
">
								<div class="fields">
									<div class="field half">
										<label for="firstname">Firstname</label>
										<input type="text" name="firstname" id="firstname" />
									</div>
									<div class="field half">
										<label for="lastname">Lastname</label>
										<input type="text" name="lastname" id="lastname" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email"  id="email" />
									</div>
									<div class="field">
										<label for="role">Role</label>
										<select name="role">
											<option value="1" selected>Admin</option>
											<option value="2">User</option>
										</select>
									</div>
									<div class="field">
									<ul class="actions">
										<li><input type="submit" class="button submit" value="Edit"></input></li>
									</ul>
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

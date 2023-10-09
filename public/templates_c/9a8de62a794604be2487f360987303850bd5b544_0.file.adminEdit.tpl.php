<?php
/* Smarty version 4.3.0, created on 2023-09-26 11:06:11
  from 'F:\wamp64\www\Projekty\project_list\app\views\adminEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6512bb23aac328_24376745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8de62a794604be2487f360987303850bd5b544' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\project_list\\app\\views\\adminEdit.tpl',
      1 => 1695726313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6512bb23aac328_24376745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4131816946512bb23aa7383_18668318', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_4131816946512bb23aa7383_18668318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4131816946512bb23aa7383_18668318',
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
					<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
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
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="role">Role</label>
										<select name="role">
											<option value="1" selected>Admin</option>
											<option value="2">Nafka</option>
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

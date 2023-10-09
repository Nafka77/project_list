<?php
/* Smarty version 4.3.0, created on 2023-10-09 21:36:37
  from 'C:\xampp\htdocs\project_list\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_652456452f7545_62695077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a36889214989771418bd299197cc49242ff6d3ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_list\\app\\views\\index.tpl',
      1 => 1696880193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_652456452f7545_62695077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1505124519652456452ae352_46360436', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1505124519652456452ae352_46360436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1505124519652456452ae352_46360436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Intro -->
			<section id="intro" class="wrapper style1 fullscreen fade-up">
				<div class="inner">
					<h1>ToDo List</h1>
					<p>Just another fine responsive site template designed by <a href="http://html5up.net">HTML5 UP</a><br />
					and released for free under the <a href="http://html5up.net/license">Creative Commons</a>.</p>
					<?php if (!empty($_smarty_tpl->tpl_vars['user']->value->login)) {?><ul class="actions">
						<li><a href="#one" class="button scrolly">Scroll Down</a></li>
					</ul><?php }?>
				</div>
				<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</section>
			<?php if (!empty($_smarty_tpl->tpl_vars['user']->value->login) && ($_smarty_tpl->tpl_vars['todo']->value) > 0) {?><input style="padding: 50px; font-size: larger;" type="text" id="search" placeholder="Search..."><?php }?>
		<!-- One -->
			<section id="one" class="wrapper style2 spotlights block">
				<?php if (!empty($_smarty_tpl->tpl_vars['user']->value->login)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
					<section>
						<a class="image"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"images/".((string)$_smarty_tpl->tpl_vars['t']->value["picture"]).".jpg"),$_smarty_tpl ) );?>
" alt="" data-position="center center" /></a>
						<div class="content">
							<div class="inner">
								<h1><?php echo $_smarty_tpl->tpl_vars['t']->value["name"];?>
 
								<?php if ($_smarty_tpl->tpl_vars['t']->value["ready"] == 1) {?>
									<img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"images/done.svg"),$_smarty_tpl ) );?>
" style= "width: 43px;" alt="" data-position="center center" />
								<?php }?>
								</h1>
								<h2><?php echo $_smarty_tpl->tpl_vars['t']->value["title"];?>
</h2>
								<h3 class="obok">
									<form id="check" style="font-size: 16px;" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"ready",'id'=>$_smarty_tpl->tpl_vars['t']->value['id']),$_smarty_tpl ) );?>
" method="post">
										<input type="submit" name="cBox" onchange="document.getElementById('check').submit()" value="Wykonane"></input>
									</form>
								</h3>
							</div>
						</div>
						<div class="opcje">
							<a class="button" id="usun" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"delete",'id'=>$_smarty_tpl->tpl_vars['t']->value['id']),$_smarty_tpl ) );?>
">Usuń</a>
						</div>
					</section>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
			</section>
			<div>
				<div class="pagination">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zadania']->value->todotototoON, 'z');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
						<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"indexShow",'id'=>$_smarty_tpl->tpl_vars['z']->value),$_smarty_tpl ) );?>
#search" method="post">
							<input type="submit" name="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" />
						</form>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
<?php
}
}
/* {/block "content"} */
}

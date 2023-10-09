<?php
/* Smarty version 4.3.0, created on 2023-09-26 10:20:55
  from 'F:\wamp64\www\Projekty\project_list\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6512b087697b38_22632172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ac80b89f53ebc0f84944c4807f885549c1ee0f' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\project_list\\app\\views\\index.tpl',
      1 => 1695720092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6512b087697b38_22632172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14632835946512b087660d61_64362465', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_14632835946512b087660d61_64362465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14632835946512b087660d61_64362465',
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
			<?php if (!empty($_smarty_tpl->tpl_vars['user']->value->login) && ($_smarty_tpl->tpl_vars['todo']->value) > 0) {?><input style="padding: 50px; font-size: larger;" type="text" id="search" placeholder="Szukaj..."><?php }?>
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
</h1>
								<h2><?php echo $_smarty_tpl->tpl_vars['t']->value["title"];?>
</h2>
								<h3 class="obok">
									<form id="check" style="font-size: 16px;" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"wykonane"),$_smarty_tpl ) );?>
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

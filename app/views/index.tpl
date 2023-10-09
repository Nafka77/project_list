{extends file="main.tpl"}
{block name="content"}

<!-- Wrapper -->
	<div id="wrapper">
		<!-- Intro -->
			<section id="intro" class="wrapper style1 fullscreen fade-up">
				<div class="inner">
					<h1>ToDo List</h1>
					<p>Just another fine responsive site template designed by <a href="http://html5up.net">HTML5 UP</a><br />
					and released for free under the <a href="http://html5up.net/license">Creative Commons</a>.</p>
					{if !empty($user->login)}<ul class="actions">
						<li><a href="#one" class="button scrolly">Scroll Down</a></li>
					</ul>{/if}
				</div>
				{include file="messages.tpl"}
			</section>
			{if !empty($user->login) && ($todo)>0}<input style="padding: 50px; font-size: larger;" type="text" id="search" placeholder="Search...">{/if}
		<!-- One -->
			<section id="one" class="wrapper style2 spotlights block">
				{if !empty($user->login)}{foreach $todo as $t}
					<section>
						<a class="image"><img src="{rel_url action="images/{$t["picture"]}.jpg"}" alt="" data-position="center center" /></a>
						<div class="content">
							<div class="inner">
								<h1>{$t["name"]} 
								{if $t["ready"]== 1}
									<img src="{rel_url action="images/done.svg"}" style= "width: 43px;" alt="" data-position="center center" />
								{/if}
								</h1>
								<h2>{$t["title"]}</h2>
								<h3 class="obok">
									<form id="check" style="font-size: 16px;" action="{rel_url action="ready" id=$t['id']}" method="post">
										<input type="submit" name="cBox" onchange="document.getElementById('check').submit()" value="Wykonane"></input>
									</form>
								</h3>
							</div>
						</div>
						<div class="opcje">
							<a class="button" id="usun" href="{rel_url action="delete" id=$t['id']}">Usuń</a>
						</div>
					</section>
				{/foreach}{/if}
			</section>
			<div>
				<div class="pagination">
					{foreach $zadania->todotototoON as $z}
						<form action="{rel_url action="indexShow" id=$z}#search" method="post">
							<input type="submit" name="submit" class="button" value="{$z}" />
						</form>
					{/foreach}
				</div>
			</div>
{/block}
{extends file="main.tpl"}
{block name="content"}

<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Login</h2>
					<p>Hello!</p>
					<div class="split style1">
						<section>
							<form method="post" action="{rel_url action="login"}">
								<div class="fields">
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="pass">Password</label>
										<input type="password" name="pass" id="pass" />
									</div>
									<div class="field">
										<ul class="actions">
											<li><input type="submit" class="button submit" value="Login"></input></li>
										</ul>
									</div>
								</div>
							</form>
							{include file="messages.tpl"}
						</section>
					</div>
				</div>
			</section>
{/block}
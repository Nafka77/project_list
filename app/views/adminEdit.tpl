{extends file="main.tpl"}
{block name="content"}

<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Ustawienia użytkowników</h2>
					<p></p>
					<div class="split style1">
						<section>
								<form method="post" action="{rel_url action="edit" id=$id}">
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
										<input type="email" name="email" id="email" />
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
{/block}
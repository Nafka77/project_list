{extends file="main.tpl"}
{block name="content"}

<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Add new task to your (never ending) list</h2>
					<p></p>
					<div class="split style1">
						<section>
							<form method="post" action="{rel_url action="addTask"}">
								<div class="fields">
									<div class="field">
										<label for="email">Opis</label>
										<input type="text" maxlength=512 name="title" id="name" />
									</div>
									<div class="field">
										<label for="pass">Category</label>
										<select name="category" id="name" required>
											{foreach $data as $d}
												<option value={$d["id"]}>{$d["name"]}</option>
											{/foreach}
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
{/block}
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
    {foreach $records as $r}
    {strip}
        <tr>
            <td>{$r["firstname"]}</td>
            <td>{$r["lastname"]}</td>
            <td>{$r["email"]}</td>
            <td>{$r["rola"]}</td>
            <td class="opcje">
                <ul class="actions">
                    <li>
                        <a class="button" href="{rel_url action="adminEdit" id=$r['id']}">Edytuj</a>
                    </li>
                    <li>
                        <a class="button" href="{rel_url action="adminDelete" id=$r['id']}">Usuń</a>
                    </li>
                </ul>
                
            </td>
        </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>	
						</section>
					</div>
				</div>
			</section>
{/block}
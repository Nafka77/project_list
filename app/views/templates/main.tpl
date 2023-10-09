<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>ToDo List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{rel_url action="assets/css/main.css"}" />
		<noscript><link rel="stylesheet" href="{rel_url action="assets/css/noscript.css"}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="{rel_url action="indexShow"}">Home</a></li>
							{if empty($user->login)}<li><a href="{rel_url action="registerShow"}">Register</a></li>
							<li><a href="{rel_url action="loginShow"}">Login</a></li>{/if}
							{if !empty($user->login)}<li><a href="{rel_url action="logout"}">Logout</a></li>
							{if $user->role != "Anon"}<li><a href="{rel_url action="addTaskShow"}">Add Your Task</a></li>{/if}
							{if $user->role == "Admin"}<li><a href="{rel_url action="admin"}">Admin</a></li>{/if} {/if} 
						</ul>
					</nav>
				</div>
			</section>

{block name=top} {/block}
{block name=content} {/block}

{block name=bottom} {/block}

	</div>

	<!-- Footer -->
		<footer id="footer" class="wrapper style1-alt">
			<div class="inner">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="{rel_url action="assets/js/search.js"}"></script>
		<script src="{rel_url action="assets/js/jquery.min.js"}"></script>
		<script src="{rel_url action="assets/js/jquery.scrollex.min.js"}"></script>
		<script src="{rel_url action="assets/js/jquery.scrolly.min.js"}"></script>
		<script src="{rel_url action="assets/js/browser.min.js"}"></script>
		<script src="{rel_url action="assets/js/breakpoints.min.js"}"></script>
		<script src="{rel_url action="assets/js/util.js"}"></script>
		<script src="{rel_url action="assets/js/main.js"}"></script>

</body>
</html>
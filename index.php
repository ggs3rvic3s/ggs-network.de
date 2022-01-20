<?php
require_once "assets/php/downloads.php";
require_once "assets/php/index.php";

// Set Title of this Page
$title = "Home";

// Set CSS
$css_source = "assets/css/main.css";

// Bind other scripts
$js_source1 = "";
$js_source2 = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head -->
	<?php require("./assets/scripts/head.php") ?>
	<!-- ./Head -->
</head>
<body class="is-preload">

    <!-- Header -->
    <header id="header">
		<h1>GGS-Network</h1>
		<p>Welcome to GGS-Network</p>
	</header>
    <div>
		<div>
			The Client is a VPN Client made by GGS-Network Developers. The client works with the OpenVPN Protocol. (THE CLIENT IS IN BETA. THE FULL VERSION RELEASE ON 01.04.2022)
		</div>
		<div>
			<a href="https://github.com/Good-Game-Services/vpn-client/releases">Download</a>
		</div>
		<div>
			See <a href="https://ggs-network.de/admin">GGS-Network DNS TRAFFIC</a>
		</div>
	</div>

	<!-- footer -->
	<?php require("./assets/scripts/footer.php") ?>
	<!-- ./footer -->

	<!-- script -->
	<?php require("./assets/scripts/script.php") ?>
	<!-- ./script -->
</body>
</html>

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
		The beta <a href="https://assets.ggs-network.de/download.php?path=setup.exe">client</a> is avaible!
	</div>

	<!-- footer -->
	<?php require("./assets/scripts/footer.php") ?>
	<!-- ./footer -->

	<!-- script -->
	<?php require("./assets/scripts/script.php") ?>
	<!-- ./script -->
</body>
</html>

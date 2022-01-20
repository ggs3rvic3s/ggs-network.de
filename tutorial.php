<?php
require_once "assets/php/downloads.php";
require_once "assets/php/index.php";

// Set Title of this Page
$title = "Tutorial";

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
		<p>Tutorial</p>
	</header>
    <div>
        <video src="https://assets.ggs-network.de/tutorial.mp4" controls>
            Your browser does not support the video tag.
        </video>
	</div>

	<!-- footer -->
	<?php require("./assets/scripts/footer.php") ?>
	<!-- ./footer -->

	<!-- script -->
	<?php require("./assets/scripts/script.php") ?>
	<!-- ./script -->
</body>
</html>

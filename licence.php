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

    <h1>GGS-Network</h1>
	<p>Copyright &copy;2021 GGS-Network by GoodGameServices&reg; Inc.</p>
    <div>
        Licensed under the Apache License, Version 2.0 (the "License");
        you may not use this file except in compliance with the License.
        You may obtain a copy of the License at

            http://www.apache.org/licenses/LICENSE-2.0

        Unless required by applicable law or agreed to in writing, software
        distributed under the License is distributed on an "AS IS" BASIS,
        WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
        See the License for the specific language governing permissions and
        limitations under the License.
    </div>
    <p><strong>Developed</strong> by <a href="https://github.com/Good-Game-Services">GGS-Network</a> | <strong>Owned</strong> by <a href="https://instagram.com/76.otho">76.otho</a> | <a href="https://ggs-network.de">GGS-Network</a> is owned and managed by <a href="https://github.com/Good-Game-Services">GoodGameServices Inc.</a></p>

	<!-- footer -->
	<?php require("./assets/scripts/footer.php") ?>
	<!-- ./footer -->

	<!-- script -->
	<?php require("./assets/scripts/script.php") ?>
	<!-- ./script -->
</body>
</html>
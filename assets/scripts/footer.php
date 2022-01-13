<?php error_reporting(0);

$parts = explode('/', __FILE__);
$filename = $parts[count($parts) - 1];

if (strpos($_SERVER["SCRIPT_URI"], $filename) !== false) {
	exit("illegal method");
}
?>
<!-- Footer - From Script -->
<footer id="footer">
	    <ul class="icons">
		    <li><a href="https://instagram.com/76.otho" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		    <li><a href="https://github.com/Good-Game-Services" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="https://mail.ggs-network.de" class="icon fa-envelope"><span class="label">@ggs-network.de</span></a></li>
		    <li><a href="mailto: conatact@ggs-network.de" class="icon fa-envelope"><span class="label">Email</span></a></li>
	    </ul>
	<ul class="copyright">
	    <strong><a href="http://github.com/Good-Game-Services"> Build by ©2021 GGS-Network by ©2021 GoodGameServices</a></strong> | <strong><a href="https://ggs-network.de/licence.php">Licence</a></strong>
	</ul>
</footer>
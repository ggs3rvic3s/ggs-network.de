<?php error_reporting(0);

$parts = explode('/', __FILE__);
$filename = $parts[count($parts) - 1];

if (strpos($_SERVER["SCRIPT_URI"], $filename) !== false) {
	exit("illegal method");
}
?>
<!-- Head - From Script -->
<head>
	<!-- Default -->
	<title>GGS-Network - <?= $title ?></title>
    <meta name="description" content="GGS-Network" />
    <meta name="author" content="GGS-Network" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $css_source ?>" />
    <link rel="icon" type="image/icon" href="./assets/favicon.ico" />
    <link rel="manifest" href="assets/manifest.webmanifest">

    <!-- Google -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="622189447712-2paeaqclm77u4k02v3u9rp98drtm19vv.apps.googleusercontent.com">
	<meta name="google-signin-scope" content="profile email">

	<!-- Meta Apple PWA -->	
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="GGS Network">
    <link rel="apple-touch-icon" href="https://ggs-network.de/assets/image/background/projects/1024x1024.png" >
    <link rel="apple-touch-icon" sizes="76x76" href="https://ggs-network.de/assets/image/background/projects/512x512.png">        
    <link rel="apple-touch-icon" sizes="120x120" href="https://ggs-network.de/assets/image/background/projects/1024x1024.png">
</head>
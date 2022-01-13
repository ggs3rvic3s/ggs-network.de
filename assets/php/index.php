<?php 

// index.php
if(isset($_POST['videocall'])){
    header('location: https://ggs-network.de/videocall.php');
}
if(isset($_POST['bo2'])){
    header('location: https://ggs-network.de/black_ops_II.php');
}
if(isset($_POST['chatapp'])){
    header('location: https://ggs-network.de/chatapp.php');
}
if(isset($_POST['thumbnail'])){
    header('location: https://ggs-network.de/thumbnail.php');
}
if(isset($_POST['filehost'])){
    header('location: https://host.ggs-network.de');
}
if(isset($_POST['mail-web'])){
    header('location: https://ggs-network.de/mail.php');
}

// videocall.php
if(isset($_POST['join-videocall'])){
    header('location: https://video.ggs-network.de/index.html');
}
if(isset($_POST['download-videocall'])){
    header('location: https://video.ggs-network.de');
}

if(isset($_POST['chatapp-browser'])){
    header('location: https://chat.ggs-network.de');
}

//mail.php
if(isset($_POST['mail-sogo'])){
    header('location: https://mail.ggs-network.de/sogo');
}
?>
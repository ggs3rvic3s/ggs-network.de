<?php require_once "controllerUserData.php"; ?>
<?php 
if(isset($_POST['offset-video-call-win'])){
    header('location: https://ggs-network.de/assets/download/offset-video-chat-x64.exe');
}
if(isset($_POST['download1'])){
    $file = '//home//Download//Call_of_Duty_Black_Ops_II.zip';
    $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        if($email != false && $password != false){
            $sql = "SELECT * FROM usertable WHERE email = '$email'";
            $run_Sql = mysqli_query($con, $sql);
            if($run_Sql){
                $fetch_info = mysqli_fetch_assoc($run_Sql);
                $status = $fetch_info['status'];
                $code = $fetch_info['code'];
            if($status == "verified"){
                if($code != 0){
                }
            }else{
            }
        }
    }else{
    header('Location: login-user.php');
    }
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
    exit;
    }
}
if(isset($_POST['download2'])){
    header('location: https://ggs-network.de/assets/download/snake.pde');
}
?>
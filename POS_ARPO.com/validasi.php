<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$sql = mysqli_query($connection, "SELECT email, level FROM users WHERE email = '$email'");
$count = mysqli_num_rows($sql);
$fetchdata= mysqli_fetch_array($sql);
if($count >0){
    $level = $fetchdata['level'];
    if($level == 'lolos') {
        $SESSION['email'] = $email;
        $SESSION['level'] = $level;
        header('location: lolos.php');
    } else if($level == 'tidak_lolos') {
        $SESSION['email'] = $email;
        $SESSION['level'] = $level;
        header('location: tidak_lolos.php');     
    }
}else {
    echo "email tidak ditemukan. <br>";
    echo "<a href ='index.html></a>";
}
?>
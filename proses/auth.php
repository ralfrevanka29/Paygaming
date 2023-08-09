<?php
session_start();
include'connection_db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$auth=mysqli_query($koneksi,"SELECT * from user  WHERE email='$email'");
$a=mysqli_fetch_array($auth);


if($email==$a['email'] and md5($password) ==$a['password']){
    $_SESSION['user']=$a['username'];
    header("location:../admin/dashboard.php");
}
else{
    $_SESSION['false']="<div class='alert alert-danger' role='alert'>
    Harap masukan email dan password yang benar !
</div>";
    header("location:../admin/index.php");
}
?>  
<?php
$koneksi = mysqli_connect('localhost','root','','paygaming');

if(mysqli_connect_errno()){
    echo'Gagal Koneksi DB : '.mysqli_connect();
}

?>
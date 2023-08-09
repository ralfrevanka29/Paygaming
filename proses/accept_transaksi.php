<?php

include'connection_db.php';
$it = $_GET['id_transaksi'];

mysqli_query($koneksi,"UPDATE transaksi SET status_transaksi='Success'  WHERE id_transaksi='$it'");
header("location:../admin/transaksi.php")

?>  
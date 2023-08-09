<?php

include'connection_db.php';
$id_bank = $_GET['id_bank'];

mysqli_query($koneksi,"DELETE from bank  WHERE id_bank='$id_bank'");
header("location:../admin/bank.php")

?>  
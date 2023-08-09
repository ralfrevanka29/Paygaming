<?php

include'connection_db.php';
$id_bank=$_POST['idbank'];
$nm_bank=$_POST['namabank'];
$rekening=$_POST['rekening'];
$icon_bank=$_POST['iconbank'];

mysqli_query($koneksi,"UPDATE bank SET id_bank='$id_bank',nm_bank='$nm_bank',rekening='$rekening',icon_bank='$icon_bank'WHERE id_bank='$id_bank'");

header("location:../admin/bank.php")

?>  
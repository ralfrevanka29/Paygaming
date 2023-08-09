<?php

include'connection_db.php';
$nm_bank=$_POST['namabank'];
$rekening=$_POST['rekening'];
$icon_bank=$_POST['iconbank'];

mysqli_query($koneksi,"INSERT INTO bank VALUES('','$nm_bank','$rekening','$icon_bank')");

header("location:../admin/bank.php")

?>  
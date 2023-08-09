<?php

include'connection_db.php';
$userid =$_POST['userid'];
$zonaid =$_POST['zonaid'];
$email =$_POST['email'];
$iditem =$_POST['diamonds'];
$idbank=$_POST['bank'];
$idgame=$_POST['game'];
$status='Pending';


mysqli_query($koneksi,"INSERT INTO transaksi VALUES('','$userid','$zonaid','$email','$idbank','$idgame','$iditem','$status')");

header("location:../kodePembayaran.php")

?>
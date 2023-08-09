<?php

include'connection_db.php';
$id_game = $_GET['id_game'];

mysqli_query($koneksi,"DELETE from game  WHERE id_game='$id_game'");
header("location:../admin/game.php")

?>  
<?php

include'connection_db.php';
$id_game=$_POST['idgame'];
$nm_game=$_POST['namagame'];
$icon_game=$_POST['icongame'];

mysqli_query($koneksi,"UPDATE game SET id_game='$id_game',nm_game='$nm_game',icon_game='$icon_game'WHERE id_game='$id_game'");

header("location:../admin/game.php")

?>  
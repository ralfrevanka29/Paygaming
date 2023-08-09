<?php
include "proses/connection_db.php";
$query = mysqli_query($koneksi, 'SELECT * FROM game') or die(mysqli_error());
?>
<div class="container">
    <!-- games -->
    <div class="container-md mt-5">
        <h2 class=" text-center text-secondary"> <strong>Game Populer</strong></h2>
        <div class="d-flex justify-content-evenly mt-5">
            <?php
            foreach ($query as $game) {
                ?>
                    <a class="btn text-light" href="<?=$game['id_game'];?>.php"> <img src="<?= $game['icon_game']; ?>" class="card-img-top"
                            alt="icon"></a>
                
            <?php } ?>

        </div> <!-- games end -->
    </div>
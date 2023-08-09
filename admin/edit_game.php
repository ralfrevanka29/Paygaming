<?php
include 'template_admin/header_admin.php';
include "../proses/connection_db.php";
 ?>

<div class='container mt-3'>
    <div class="card">
        <div class="card-header">
            <h4> Edit Game</h4>
        </div>
        <?php 
        $id_game= $_GET['id_game'];
        $game = mysqli_query($koneksi, "SELECT * FROM game WHERE id_game='$id_game'") or die(mysqli_error());
        while ($row = mysqli_fetch_array($game)){
        ?>
        <div class="card-body">
        <form action="../proses/update_game.php" method="post">
                    <div class="mb-3">
                        <label for="idgame" class="form-label">ID Game</label>
                        <input type="text" required='' class="form-control" name="idgame" value="<?= $row['id_game']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="namagame"required='' class="form-label">Nama Game</label>
                        <input type="text" class="form-control" name="namagame" value="<?= $row['nm_game']?>">
                    </div>
                    <div class="mb-3">
                        <label for="icongame"required='' class="form-label">Icon Game</label>
                        <input type="text" class="form-control" name="icongame" value="<?= $row['icon_game']?>">
                    </div> 
                    <button type="submit" value='update'class="btn btn-primary">Input</button>
                </form>
        </div>
        <?php } ?>
    </div>
</div>
<?php
include 'template_admin/footer_admin.php';
?>
<?php
include 'template_admin/header_admin.php';
include "../proses/connection_db.php";
$game = mysqli_query($koneksi, 'SELECT id_game FROM game') or die(mysqli_error()); ?>

<div class='container mt-3'>
    <div class="card">
        <div class="card-header">
            <h4> Tambah Item</h4>
        </div>
        <div class="card-body">
            <form action="../proses/add_item.php" method="post">
                <div class="mb-3">
                    <label for="iditem" class="form-label">ID Item</label>
                    <input type="text" required='' class="form-control" name="iditem" id="iditem">
                </div>
                <div class="mb-3">
                    <label for="namaitem" class="form-label">Nama Item</label>
                    <input type="text" required='' class="form-control" name="namaitem" id="namaitem">
                </div>
                <div class="mb-3">
                    <label for="jumlah" required='' class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah">
                </div>
                <div class="mb-3">
                    <label for="nominal" required='' class="form-label">Nominal</label>
                    <input type="text" class="form-control" name="nominal" id="nominal">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="game" aria-label="Default select example">
                        <option selected>Pilih ID Game</option>
                        <?php foreach($game as $game){?>
                        <option name="game" value="<?= $game['id_game'] ?>"><?= $game['id_game'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Input</button>
                <button type="reset" class="btn btn-primary">Batal</button>
            </form>
        </div>
    </div>
</div>
<?php
include 'template_admin/footer_admin.php';
?>
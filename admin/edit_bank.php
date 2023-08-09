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
        $id_bank= $_GET['id_bank'];
        $bank = mysqli_query($koneksi, "SELECT * FROM bank WHERE id_bank='$id_bank'") or die(mysqli_error());
        while ($row = mysqli_fetch_array($bank)){
        ?>
        <div class="card-body">
        <form action="../proses/update_item.php" method="post">
                    <div class="mb-3">
                        <label for="idbank" class="form-label">ID bank</label>
                        <input type="text" required='' class="form-control" name="idbank" value="<?= $row['id_bank']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="namabank"required='' class="form-label">Nama Bank</label>
                        <input type="text" class="form-control" name="namabank" value="<?= $row['nm_bank']?>">
                    </div>
                    <div class="mb-3">
                        <label for="rekening"required='' class="form-label">No Rekening</label>
                        <input type="text" class="form-control" name="rekening" value="<?= $row['rekening']?>">
                    </div>
                    <div class="mb-3">
                        <label for="iconbank"required='' class="form-label">Icon Bank</label>
                        <input type="text" class="form-control" name="iconbank" value="<?= $row['icon_bank']?>">
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
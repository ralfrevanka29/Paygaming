<?php
include 'template_admin/header_admin.php';
 ?>

<div class='container mt-3'>
    <div class="card">
        <div class="card-header">
            <h4> Tambah Game</h4>
        </div>
        <div class="card-body">
        <form action="../proses/add_game.php" method="post">
                    <div class="mb-3">
                        <label for="idgame" class="form-label">ID GAME</label>
                        <input type="text" required='' class="form-control" name="idgame" id="idgame">
                    </div>
                    <div class="mb-3">
                        <label for="namagame"required='' class="form-label">Nama Game</label>
                        <input type="text" class="form-control" name="namagame" id="namagame">
                    </div>
                    <div class="mb-3">
                        <label for="icongame"required='' class="form-label">Icon Game</label>
                        <input type="text" class="form-control" name="icongame" id="icongame">
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
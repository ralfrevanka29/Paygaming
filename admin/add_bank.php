<?php
include 'template_admin/header_admin.php';
 ?>

<div class='container mt-3'>
    <div class="card">
        <div class="card-header">
            <h4> Tambah Bank</h4>
        </div>
        <div class="card-body">
        <form action="../proses/add_bank.php" method="post">
                    <div class="mb-3">
                        <label for="namabank" class="form-label">Nama Bank</label>
                        <input type="text" required='' class="form-control" name="namabank" id="namabank">
                    </div>
                    <div class="mb-3">
                        <label for="rekening"required='' class="form-label">No Rekening</label>
                        <input type="text" class="form-control" name="rekening" id="rekening">
                    </div>
                    <div class="mb-3">
                        <label for="iconbank"required='' class="form-label">Icon Bank</label>
                        <input type="text" class="form-control" name="iconbank" id="iconbank">
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
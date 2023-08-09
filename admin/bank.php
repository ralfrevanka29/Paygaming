<?php
include 'template_admin/header_admin.php';
include "../proses/connection_db.php";
$bank = mysqli_query($koneksi, 'SELECT * FROM bank') or die(mysqli_error()); ?>

<div class='d-md-flex justify-content-center mt-3'>
    <div class="card">
        <div class="card-header">
        <div class="d-flex justify-content-between " >
                <h4> Daftar Bank</h4>
                
                <a href="add_bank.php" class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i> Tambah Bank</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive-md table-responsive-lg table-responsive-xl">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Bank</th>
                        <th>Nama Bank</th>
                        <th>Rekening</th>
                        <th>Icon_Bank</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($bank as $bank) { ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $bank['id_bank']; ?>
                            </td>
                            <td>
                                <?= $bank['nm_bank']; ?>
                            </td>
                            <td>
                                <?= $bank['rekening']; ?>
                            </td>
                            <td>
                                <?= $bank['icon_bank']; ?>
                            </td>
                            <td>
                            <a href="edit_bank.php?id_bank=<?= $bank['id_bank'];?>" class='btn btn-sm btn-warning'><i
                                        class='bi bi-pen'></i></a>
                                <a href="../proses/delete_bank.php?id_bank=<?= $bank['id_bank'];?>" class='btn btn-sm btn-danger'
                                    onclick="return confirm('Apakah Yakin Akan Menghapus ini?')"><i class="bi bi-file-earmark-x"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
                <tfoot>
                    
                    <tr>
                        <th>No</th>
                        <th>ID Bank</th>
                        <th>Nama Bank</th>
                        <th>Rekening</th>
                        <th>Aksi</th>
                    </tr>

                </tfoot>
            </table>
            </div>
        </div>
    </div>
</div>

<?php
include 'template_admin/footer_admin.php';
?>
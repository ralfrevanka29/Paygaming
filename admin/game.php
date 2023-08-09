<?php
include 'template_admin/header_admin.php';
include "../proses/connection_db.php";
$game = mysqli_query($koneksi, 'SELECT * FROM game') or die(mysqli_error()); ?>

<div class='d-md-flex justify-content-center mt-3'>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between " >
                <h4> Daftar Game</h4>
                
                <a href="add_game.php" class="btn btn-outline-primary">
                                <i class="bi bi-plus-circle-fill"></i> Tambah Game</a>
            </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive-md table-responsive-lg table-responsive-xl">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Game</th>
                        <th>Nama Game</th>
                        <th>Icon Game</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($game as $game) { ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $game['id_game']; ?>
                            </td>
                            <td>
                                <?= $game['nm_game']; ?>
                            </td>
                            <td>
                                <?= $game['icon_game']; ?>
                            </td>
                            <td>
                            <a href="edit_game.php?id_game=<?= $game['id_game'];?>" class='btn btn-sm btn-warning'><i
                                        class='bi bi-pen'></i></a>
                                <a href="../proses/delete_game.php?id_game=<?= $game['id_game'];?>" class='btn btn-sm btn-danger'
                                    onclick="return confirm('Apakah Yakin Akan Menghapus ini?')"><i class="bi bi-file-earmark-x"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
                <tfoot>
                    <tr>
                    <th>No</th>
                        <th>ID Game</th>
                        <th>Nama Game</th>
                        <th>Icon Game</th>
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
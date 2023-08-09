<?php
include 'template_admin/header_admin.php';
include "../proses/connection_db.php";
$transaksi = mysqli_query($koneksi, 'SELECT transaksi.id_transaksi, transaksi.status_transaksi, transaksi.user_id, transaksi.zona_id,
transaksi.email, game.nm_game, item.nm_item, item.jml_item, item.nominal, bank.nm_bank FROM transaksi 
INNER JOIN game ON transaksi.id_game = game.id_game
INNER JOIN bank ON transaksi.id_bank = bank.id_bank
INNER JOIN item ON transaksi.id_item = item.id_item') or die(mysqli_error()); ?>

<div class='d-md-flex justify-content-center mt-3'>
    <div class="card">
        <div class="card-header">
            <h4> Transaksi Report</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive-md table-responsive-lg table-responsive-xl ">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Game</th>
                        <th>User ID</th>
                        <th>Zona ID</th>
                        <th>Email</th>
                        <th>Jumlah Item</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($transaksi as $transaksi) { ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $transaksi['id_transaksi']; ?>
                            </td>
                            <td>
                                <?= $transaksi['nm_game']; ?>
                            </td>
                            <td>
                                <?= $transaksi['user_id']; ?>
                            </td>
                            <td>
                                <?= $transaksi['zona_id']; ?>
                            </td>
                            <td>
                                <?= $transaksi['email']; ?>
                            </td>
                            <td>
                                <?= $transaksi['jml_item']; ?>
                                <?= $transaksi['nm_item']; ?>
                            </td>
                            <td><b>
                                    <?= $transaksi['status_transaksi']; ?>
                                </b></td>
                            <td>
                                <?php
                                if ($transaksi['status_transaksi'] == 'Pending') {
                                    echo " <a href='../proses/accept_transaksi.php?id_transaksi=" . $transaksi['id_transaksi'] . "' class='btn btn-sm btn-success'>
                            <i class='bi bi-check-circle'></i></a>";
                                    echo "<a href='../proses/reject_transaksi.php?id_transaksi=" . $transaksi['id_transaksi'] . "' class='btn btn-sm btn-danger'
                            onclick='return confirm('Apakah Yakin Akan Menghapus ini?')'><i class='bi bi-x-circle'></i></a>";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Game</th>
                        <th>User ID</th>
                        <th>Zona ID</th>
                        <th>Email</th>
                        <th>Jumlah Item</th>
                        <th>Status</th>
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
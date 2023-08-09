<?php 
include 'template/header.php';
include "proses/connection_db.php";
$transaksi = mysqli_query($koneksi, 'SELECT * FROM transaksi 
INNER JOIN game ON transaksi.id_game = game.id_game
INNER JOIN bank ON transaksi.id_bank = bank.id_bank
INNER JOIN item ON transaksi.id_item = item.id_item
ORDER BY id_transaksi DESC LIMIT 1') or die(mysqli_error());
foreach ($transaksi as $transaksi) {?>

 <div class="container mt-3">
      <div class="d-md-flex justify-content-center">
        <div class="card p-2">
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <h3 class="mb-4"><strong>Ringkasan Pesanan</strong></h3>
              <p class='fs-5'><?= $transaksi['nm_game'];?><br><?= $transaksi['jml_item'];?><?= $transaksi['nm_item'];?> </p>
              <p class='fs-5'>User ID: <br>
              <strong><?= $transaksi['user_id'];?></strong>
              </p>
              <p class='fs-5'>Zona ID: <br>
              <strong><?= $transaksi['zona_id'];?></strong>
              </p>
              <p class='fs-5'>Email: <br>
              <strong><?= $transaksi['email'];?></strong>
              </p>

              <p class="fs-5">
                ID Transaksi: <br />
                <strong><?= $transaksi['id_transaksi'];?></strong>
              </p>
              <p class="fs-5">
                Metode Pembayaran: <br />
                <strong><?= $transaksi['nm_bank'];?></strong>
              </p>
              <p class="fs-5">
                Nomor E-Wallet: <br />
                <strong><?= $transaksi['rekening'];?></strong>
              </p>
              <p class="fs-5">
                Total Pembayaran: <br />
                <strong><?= $transaksi['nominal'];?></strong>
              </p>
              <div class="d-flex justify-content-center">
              <a class='btn btn-secondary' href="wait.php" type="submit" class="btn btn-light text-light">
                Bayar
              </a>
            </div>
            </blockquote>
          </div>
        </div>
      </div>
</div>
<?php };
include 'template/footer.php';
?>
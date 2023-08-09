<?php
include 'template/header.php';
include "proses/connection_db.php";
$item = mysqli_query($koneksi, "SELECT * FROM item where id_game='ML'") or die(mysqli_error());
$bank = mysqli_query($koneksi, "SELECT * FROM bank") or die(mysqli_error());
?>
<div class="container-md text-secondary     mt-5 mb-5">
        <div class=" d-md-flex justify-content-center">
            <form action="proses/addtransaksi.php" method="post">
                <div class="card">
                    <div class="card-body text-secondary">
                        <h5 class="card-title mb-4"> <strong>Masukan User ID</strong></h5>
                        <div class="row">

                            <div class="mb-3 col-6">
                                <input type="text" required class="form-control" name="userid" placeholder="User ID">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" required class="form-control" placeholder="Zona ID" name="zonaid">
                            </div>
                        </div>
                        <div id="emailHelp" class="form-text">Untuk mengetahui User ID Anda, silakan klik menu
                            profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah
                            Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi.
                            Contoh : 12345678(1234).</div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body text-secondary">
                    <div class="row">
                        <h5 class="card-title mb-4"> <strong>Email</strong></h5>
                        <div class="mb-3 col-12">
                            <input type="email" class="form-control" name="email"
                                placeholder="email" required>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body text-secondary">
                        <h5 class="card-title mb-4"> <strong>Pilih Nominal Top Up</strong></h5>
                        <div class="d-md-flex justify-content-evenly">
                            <?php
                            $no = 1;
                            foreach ($item as $item) {
                                ?>
                                <div class="card border-0 m-2 text-secondary">
                                    <input class="form-check-input" type="radio" name="diamonds" value="<?= $item['id_item']?>"
                                        id="<?= $no?>" required  >
                                    <label class="form-check-label text-center" for="<?= $no++ ?>">
                                        <img class="ms-2"
                                            src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png"
                                            width="50px" alt="" srcset="">
                                        <br>
                                        <?= $item['jml_item']; ?> <?= $item['nm_item'];?><br>
                                        <?= $item['nominal']; ?>
                                    </label>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <input type="text" name="game" value="ML" hidden >
                <div class="card mt-3"> 
                    <div class="card-body" >
                        <h5 class="card-title mb-4"> <strong>Pilih Pembayaran</strong></h5>
                        <div class="mt-3 d-md-flex flex-column">
                        <div class="d-md-flex  justify-content-evenly mb-4">
                        <?php
                            $o = 100;
                            foreach ($bank as $bank) {
                                ?>

                            <div class="card border-0 m-3">
                                <input class="form-check-input" type="radio" required name="bank" value="<?= $bank['id_bank'];?>" id="<?= $o?>">
                                <label class="form-check-label text-center" for="<?= $o++?>">
                                    <img src="<?=$bank['icon_bank'];?>"
                                        width="100px" alt="" srcset="">
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="d-flex justify-content-center" >
                        <button class="btn btn-secondary text-center "
                                 type="submit"
                                value="kirim"><strong>Beli sekarang</strong></button>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
</div>

<?php
include 'template/footer.php';
?>
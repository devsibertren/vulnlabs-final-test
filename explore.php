<?php
error_reporting(0);
header('X-XSS-Protection: 0');

include('header.php');
include('config.php');

if (isset($_GET['keyword'])) {
    $sql = "SELECT id,nama_barang,kuantitas,created_by FROM daftar_barang WHERE nama_barang like '%". $_GET['keyword'] ."%' LIMIT 12";
} else {
    $sql = "SELECT id,nama_barang,kuantitas,created_by FROM daftar_barang WHERE created_by";
}

$result = mysqli_query($conn, $sql);
?>        
        <section class="explore-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7">
                        <div class="intro text-center mb-4">
                            <!-- <span>Explore</span> -->
                            <h3 class="mt-3 mb-0"><?= isset($_GET['keyword']) ? "Pencarian: " . $_GET['keyword'] : "Produk VulnLabs" ?></h3>
                            <p>Temukan barang barang antik favorit anda di VulnLabs.</p>
                        </div>
                    </div>
                </div>
                <div class="row items explore-items">
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3 item explore-item">
                        <div class="card">
                            <div class="image-over">
                                <a href="item-details.php?id=<?=$row['id']?>">
                                    <img class="card-img-top" src="assets/img/content/auction_<?= rand(1,9) ?>.jpg" alt="">
                                </a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="item-details.php?id=<?=$row['id']?>">
                                        <h5 class="mb-0"><?= htmlspecialchars($row['nama_barang'], ENT_QUOTES) ?></h5>
                                    </a>
                                    <div class="seller d-flex align-items-center my-3">
                                        <span>Owned By</span>
                                        <h6 class="ml-2 mb-0"><?= htmlspecialchars($row['created_by'], ENT_QUOTES) ?></h6>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="wallet-connect.html"><i class="icon-handbag mr-2"></i>Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
<?php
include('footer.php');?>
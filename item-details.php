<?php 
include('header.php');
include('config.php');

$sql = "SELECT id,nama_barang,deskripsi,harga,kuantitas,created_by FROM daftar_barang where id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
?>
        <section class="breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="m-0">Item Details</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="explore.php">Explore</a></li>
                                <li class="breadcrumb-item active">Item Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="item-details-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <div class="item-info">
                            <div class="item-thumb text-center">
                                <img src="assets/img/content/auction_<?= rand(1,9) ?>.jpg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <?php
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="content mt-5 mt-lg-0">
                            <h3 class="m-0"><?= htmlspecialchars($row['nama_barang'], ENT_QUOTES) ?></h3>
                            <p><?= htmlspecialchars($row['deskripsi'], ENT_QUOTES) ?></p>
                            <!-- Owner -->
                            <div class="owner d-flex align-items-center">
                                <span>Owned By</span>
                                <a class="owner-meta d-flex align-items-center ml-3" href="author.html">
                                    <img class="avatar-sm rounded-circle" src="assets/img/content/avatar_1.jpg" alt="">
                                    <h6 class="ml-2"><?= htmlspecialchars($row['created_by'], ENT_QUOTES) ?></h6>
                                </a>
                            </div>
                            <div class="item-info-list mt-4">
                                <ul class="list-unstyled">
                                    <li class="price d-flex justify-content-between">
                                        <span> IDR <?=  number_format($row['harga'], ENT_QUOTES) ?></span>
                                        
                                    </li>
                                   
                                </ul>
                            </div>
                            
                            <a class="d-block btn btn-bordered-white mt-4" href="login.php">Buy</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
<?php
include('footer.php');
?>
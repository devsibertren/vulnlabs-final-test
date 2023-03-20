<?php
include('header.php');
include('config.php');
$sql = "SELECT id,nama_barang,kuantitas,created_by FROM daftar_barang LIMIT 12";
$result = mysqli_query($conn, $sql);

?>
<section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-7">
                        <span>VulnLabs</span>
                        <h1 class="mt-4">VulnLabs menjual barang barang antik yang—yaudah lah ya</h1>
                        <p>Explore barang-barang antik yang ada di VulnLabs</p>
                        <!-- Buttons -->
                        <div class="button-group">
                            <a class="btn btn-bordered-white" href="explore.php"><i class="icon-rocket mr-2"></i>Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 465" version="1.1">
                    <defs>
                        <linearGradient x1="49.7965246%" y1="28.2355058%" x2="49.7778147%" y2="98.4657689%" id="linearGradient-1">
                            <stop stop-color="rgba(69,40,220, 0.15)" offset="0%" />
                            <stop stop-color="rgba(87,4,138, 0.15)" offset="100%" />
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="" fill="url(#linearGradient-1)">
                            <animate id="graph-animation" xmlns="http://www.w3.org/2000/svg" dur="2s" repeatCount="" attributeName="points" values="0,464 0,464 111.6,464 282.5,464 457.4,464 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,323.3 282.5,373 457.4,423.8 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,336.6 457.4,363.5 613.4,414.4 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,323.3 613.4,340 762.3,425.6 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,290.4 762.3,368 912.3,446.4 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,329.6 912.3,420 1068.2,427.6 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,402.4 1068.2,373 1191.2,412 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,336.6 1191.2,334 1328.1,404 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,282 1328.1,314 1440.1,372.8 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,254 1440.1,236 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,144.79999999999998 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,8 1440.1,464 0,464;" fill="freeze" />
                        </polygon>
                    </g>
                </svg>
            </div>
        </section>
        
        <section class="explore-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro d-flex justify-content-between align-items-end m-0">
                            <div class="intro-content">
                                <span>Exclusive Assets</span>
                                <h3 class="mt-3 mb-0">Explore</h3>
                            </div>
                            <div class="intro-btn">
                                <a class="btn content-btn" href="explore.php">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row items">
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3 item">
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
                                    <div class="card-bottom d-flex justify-content-between">
                                        <span>Stock: <?= htmlspecialchars($row['kuantitas'], ENT_QUOTES) ?></span>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller mt-3" href="login.php"><i class="icon-handbag mr-2"></i>Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>

<?php
include('footer.php');
?>
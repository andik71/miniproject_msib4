<?php require_once 'koneksi.php'; ?>

<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="main_page/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInRight">Welcome to
                                    <strong>CafeQ</strong>
                                </p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">Tempat Nongki Asik Buat Lo</h1>
                                <a href="index.php?page=about" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="main_page/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>CafeQ</strong>
                                </p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">Lagi WFH? Disini Aja Tempatnya</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">More
                                    Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="main_page/img/icon/icon-1.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Award Winning</h5>
                    <p class="mb-0">Memenangkan Penghargaan Sebagai Cafe Tergensi Kota Palu 2023</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="main_page/img/icon/icon-2.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Professional Staff</h5>
                    <p class="mb-0">Para pekerja yang profesional dan cepat dalam melayani Anda</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="main_page/img/icon/icon-3.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Fair Prices</h5>
                    <p class="mb-0">Harga terjangkau buat mahasiswa</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="main_page/img/icon/icon-4.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">24/7 Support</h5>
                    <p class="mb-0">Selalu ada buat jadi tempat mu</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Foods Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Foods</p>
            <h1 class="display-5 mb-5">Tersedia Berbagai Macam Makanan</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            require_once 'koneksi.php';
            $sql = "SELECT * FROM foods ORDER BY id DESC";
            $query = mysqli_query($koneksi, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="admin_page/<?= $data['img'] ?>" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="admin_page/<?= $data['img'] ?>" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="d-block h5" href=""><?= $data['name'] ?></h3>
                        <span>Price: <?= $data['price'] ?> | Quantity: <?= $data['qty'] ?></span>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Foods End -->

<!-- Beverages Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Beverages</p>
            <h1 class="display-5 mb-5">Daftar Minuman Yang Siap Menemani Kamu</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            require_once 'koneksi.php';
            $sql = "SELECT * FROM beverages ORDER BY id DESC";
            $query = mysqli_query($koneksi, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="admin_page/<?= $data['img'] ?>" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="admin_page/<?= $data['img'] ?>" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="d-block h5" href=""><?= $data['name'] ?></h3>
                        <span>Price: <?= $data['price'] ?> | Quantity: <?= $data['qty'] ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Beverages End -->

<!-- Testimonial Start -->
<!-- <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="main_page/img/testimonial-1.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="main_page/img/testimonial-2.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="main_page/img/testimonial-3.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="main_page/img/testimonial-4.jpg" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div> -->
<!-- Testimonial End -->
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Projects</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


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
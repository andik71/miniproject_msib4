<?php

require_once "koneksi.php";

// General Var
$name = '';
$price = '';
$qty = '';

// Inisiasi Variabel Untuk Kebutuhan Gambar
$img = '';
$size = 0;
$rand = rand(); // digunakan untuk memberikan angka acak
$extension = array('png', 'jgp', 'jpeg'); // digunakan untuk menentukan ekstensi gambar yang akan diupload

// Notifikasi
$error = '';
$success = '';

// == ADD DATA == //
if (isset($_POST['save'])) { // Saat tombol ditekan maka jalankan perintah berikut
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    // Inisiasi khusus untuk gambar
    $img = $_FILES['img']['name'];
    $size = $_FILES['img']['size'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $ext = pathinfo($img, PATHINFO_EXTENSION);

    if ($name && $price && $qty && $img || $size < 1044070) {
        $xx = 'assets/img/' . $rand . '_' . $img;
        move_uploaded_file($file_tmp, $xx);
        $sql = "INSERT INTO beverages(name, type, price, qty, img) VALUES ('$name','$type','$price','$qty','$xx')";
        $query = mysqli_query($koneksi, $sql);
        // Kondisi untuk membuat notifikasi jika add data berhasil
        if ($query) {
            $success = "Berhasil Memasukkan Data";
        } else {
            $error = "Gagal Memasukkan Data";
        }
    } elseif (!in_array($ext, $extension)) {
        $error = "File Gambar Tidak Sesuai";
    } else {
        $error = "Silahkan Lengkapi Data";
    }
}

?>


<div class="pagetitle">
    <h1>Add Data Food</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item active">Beverages</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Beverages</h5>

                    <!-- NOTIFICATION -->
                    <?php
                    if ($error) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    <?php } elseif ($success) { ?>
                        <div class="alert alert-success" role="alert">
                            <?= $success ?>
                        </div>
                    <?php } ?>
                    <!-- END NOTIFICATION -->

                    <!-- == == == ADD DATA FORM == == == -->

                    <!-- ADD DATA -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input id="name" name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select id="type" name="type" class="form-select" aria-label="Default select example">
                                    <option selected>Select Item</option>
                                    <option value="coffee">Coffee</option>
                                    <option value="tea">Tea</option>
                                    <option value="milk">Milk</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input id="price" name="price" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input id="qty" name="qty" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10 d-inline">
                                <input id="img" name="img" class="form-control mb-3" type="file" id="formFile">
                                <!-- Highlight Gambar -->
                                <!-- <img src="<?= $xx ?>" class="img" style="width:200px" alt=""> -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Action</label>
                            <div class="col-auto d-inline">
                                <button type="submit" name="save" class="btn btn-md btn-primary">Save</button>
                                <button type="reset" class="btn btn-md btn-secondary">Reset</button>
                                <a href="index.php?page=beverages" class="btn btn-md btn-warning">Go Back</a>
                            </div>
                        </div>
                    </form><!-- End ADD DATA -->

                </div>

            </div>
        </div>

    </div>
    </div>
</section>
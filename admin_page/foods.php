<?php
require_once 'koneksi.php';

// Mengambil data operator
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = '';
}

// Notifikasi
$error = '';
$success = '';

if ($op == 'delete') {  // Jika operator yang dipilih adalah edit maka jalankan perintah berikut
    // Mengambil ID berdasarkan ID record
    $id = $_GET['id'];
    // Jalankan perintah query
    $sql = "DELETE FROM foods WHERE id = '$id'";

// Note! membuat perintah yang dapat menghapus file gambar, tidak hanya data record yang ada dalam databasenya saja.

    $query = mysqli_query($koneksi, $sql);
    // Kondisi untuk memeriksa apakah berhasil atau tidak
    if ($query) {
        $success = "Berhasil Menghapus Data";
    } else {
        $error = "Gagal Hapus Data";
    }
}

?>

<div class="pagetitle">
    <h1>Foods Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item active">Foods</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="c ard">
                <div class="card-body">
                    <h5 class="card-title">Foods</h5>
                    <!-- Btn Add Data -->
                    <div class="mb-3">
                        <a href="index.php?page=food_create&op=create" class="btn btn-primary" type="submit">
                            <span>
                                <i class="bi bi-plus-square-fill"></i>
                            </span>
                            Add Data
                        </a>
                    </div>
                    <!-- End. Btn Add Data -->

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

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Filename</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'koneksi.php';
                            $sql = "SELECT * FROM foods ORDER BY id DESC";
                            $query = mysqli_query($koneksi, $sql);
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $data['name']; ?></td>
                                    <td><?= $data['price']; ?></td>
                                    <td><?= $data['qty']; ?></td>
                                    <td><?= $data['img']; ?></td>
                                    <td><img src="<?= $data['img']; ?>" alt="<?= $data['img']; ?>" style="width:200px"></td>
                                    <td class="d-inline">
                                        <a href="index.php?page=food_edit&op=edit&id=<?= $data['id'] ?>" class="btn btn-warning">
                                            <span>
                                                <i class="bi bi-pencil"></i>
                                            </span>
                                        </a>
                                        <a href="index.php?page=foods&op=delete&id=<?= $data['id']; ?>" class="btn btn-danger">
                                            <span>
                                                <i class="bi bi-trash"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
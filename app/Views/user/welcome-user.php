<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- import css -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded-bottom">
            <div class="container">

                <!-- LOGO BRAND -->
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/brand-2.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Kontez
                </a>

                <!-- NAV MENU -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navList">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navList">
                    <div class="col navbar-nav">
                        <!-- <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="#">Layanan</a>
                <a class="nav-link" href="#">Kontak</a> -->
                    </div>

                    <!-- LOGIN DROPDOWN -->
                    <div class="dropdown">
                        <button class="btn btn-secondary bg-transparent border-0 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Halo, <b><?= $user['nama']; ?></b> !
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item text-danger" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="content">
        <main>
            <div class="card border-0 text-white">
                <img src="/assets/img/banner.png" class="card-img" alt="Banner Kontez">
                <div class="card-img-overlay text-center mt-5">
                    <h3 class="card-title">Bangun Masa Depanmu Bersama Kontez</h3>
                    <p class="card-text">The Key of Success adalah Kunci Keberhasilan</p>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-9">
                        <input type="text" class="form-control" placeholder="Cari judul lomba disini..." aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="col-2">
                        <a href="" class="btn btn-primary">Search</a>
                    </div>
                    <div class="col-md-1">
                        <a href="" class="btn btn-light">Filter</a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="/galeri" class="btn btn-success">All<span class="sr-only">(current)</span></a>
                        <a href="/jalanTol" class="btn btn-light">Jalan Tol</a>
                        <a href="/jembatan" class="btn btn-light">Jembatan</a>
                        <a href="/underpass" class="btn btn-light">Underpass</a>
                    </div>
                </div>

                <hr>

                <div class="row d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="row row-cols-1 row-cols-md-4">
                    <?php foreach ($event as $e) : ?>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="/assets/img/poster/<?= $e['poster_lomba']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $e['nama_lomba']; ?></h5>
                                    <p class="card-text"><?= $e['deskripsi_lomba']; ?></p>
                                    <p class="card-text"><small class="text-muted">Last updated at <?= $e['updated_at']; ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
        <aside></aside>
    </div>

    <?= $this->include('layout/footer'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- import javascript -->
    <script src="/assets/js/script.js"></script>
</body>

</html>
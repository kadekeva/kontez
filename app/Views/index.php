<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

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
<?= $this->endSection(); ?>
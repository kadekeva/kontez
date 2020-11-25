<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<img src="/assets/img/banner.png" alt="" class="img-fluid position-absolute">

<div class="container pt-5 pb-5 mb-5 mt-5">
    <div class="row text-center text-white p-5 mb-5 mt-5">
        <div class="col pb-5 pt-5 mb-5">
            <h1>Bangun Masa Depanmu Bersama Kontez</h1>
            <h3>The Key of Success adalah Kunci Kesuksesan</h3>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Cari judul lomba disini..." aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="col-sm-1">
            <button type="button" class="btn btn-primary">Search</button>
        </div>
        <div class="col-sm-2 d-flex justify-content-end">
            <button type="button" class="btn btn-light">Filter By</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <a href="/galeri" class="btn btn-success">All<span class="sr-only">(current)</span></a>
            <a href="/jalanTol" class="btn btn-light">Jalan Tol</a>
            <a href="/jembatan" class="btn btn-light">Jembatan</a>
            <a href="/underpass" class="btn btn-light">Underpass</a>
        </div>
    </div>
</div>

<div class="container mt-5">
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
    <div class="row">
        <div class="col">
            <div class="card-deck">
                <div class="card">
                    <img src="/assets/img/poster.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/poster.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/poster.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/poster.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
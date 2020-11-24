<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">

</div>

<div class="container mt-5">
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
        <div class="col">
            <a href="" class="btn btn-success">All</a>
            <a href="" class="btn btn-light">Poster</a>
            <a href="" class="btn btn-light">Cerpen</a>
            <a href="" class="btn btn-light">Puisi</a>
            <a href="" class="btn btn-light">Logo</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
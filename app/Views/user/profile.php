<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col text-left">
            <button type="button" class="btn btn-light">Kembali</button>
        </div>
        <div class="col-6 text-center">
            <h5>Profile</h5>
        </div>
        <div class="col text-right">
            <button type="button" class="btn btn-secondary">Edit Profile</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card border">
                <img src="" height="300px" class="card-img" alt="...">
                <div class="card-img-overlay text-center mt-5">
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-3 card border-0">
                                <img src="/assets/img/default.jpg" class="card-img-top border" alt="...">
                                <div class="card-body">
                                    <b class="card-text"><?= $user['nama']; ?></b>
                                    <p class="text-muted">Jember, Jawa Timur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col mt-5">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <h3>History Lomba</h3>
                                <hr>
                                <div class="card" style="width: 18rem;">
                                    <img src="/assets/img/poster/poster.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
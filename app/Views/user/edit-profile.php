<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row p-5">
                        <div class="col-lg-6 d-none d-lg-block img-fluid">
                            <img src="/assets/img/edit.png" alt="" width="100%">
                        </div>
                        <div class="col-lg-6">
                            <h3>Edit Profile</h3>
                            <form>
                                <div class="form-group">
                                    <label for="inputAddress">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Umur</label>
                                    <input type="text" class="form-control" id="umur" name="umur" placeholder="Usia">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pelajar/Mahasiswa/Freelancer">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="+628xxxxxxx">
                                </div>
                                <div class="row mt-5 justify-content-center">
                                    <button type="submit" class="btn btn-primary col-6 btn-block">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
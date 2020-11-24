<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-end">
        <!-- FORMULIR PENDAFTARAN -->
        <div class="bg-light p-4 m-3 rounded">
            <form action="" method="">
                <div class="form-row">
                    <!-- EMAIL & PASSWORD, BISA NAMA DEPAN DAN BELAKANG JUGA -->
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" placeholder="email@example.com" id="inputEmail4">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address ">
                </div>
                <div class="form-row">

                    <!-- ISI APALAH DISINI SEMBARANG -->
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>

                <!-- CAPTCHA & RULES RULES -->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Saya menyetujui persyaratan dan peraturan yang berlaku
                        </label>
                    </div>
                </div>

                <!-- TOMBOL SUBMIT -->
                <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </div>
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
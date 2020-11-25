<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col"><a href="" class="btn btn-primary">Kembali</a></div>
        <div class="col">
            <h1>Checkout</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 border text-center rounded"><b>Total Pembayaran: Rp. 0</b></div>
    </div>
    <div class="row mt-3">
        <div class="col text-center">
            <b>Metode Pembayaran: OVO</b>
            <p>Silahkan lakukan transfer melalui ovo dengan nomer</p>
            <b>0895370742990 a.n Kontez Teknologi</b>
            <p>Atau</p>
            <b>Scan Kode QR berikut</b>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <img src="/assets/img/qr-code.png" alt="">
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-2"><a href="/checkout" class="btn btn-primary btn-block">CHECKOUT</a></div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col"><a href="" class="btn btn-primary">Kembali</a></div>
        <div class="col">
            <h1>Pembayaran</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 border text-center rounded"><b>Total Pembayaran: Rp. 0</b></div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>Silahkan pilih beberapa metode pembayaran dibawah:</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 border rounded pb-3">
            <h1>Transfer Bank</h1>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 border p-3"><img src="/assets/img/bni.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/bni.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/bni.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-6 border rounded pb-3">
            <h1>E-Money</h1>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 border p-3"><img src="/assets/img/gopay.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/gopay.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/gopay.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-6 border rounded pb-3">
            <h1>Minimarket</h1>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 border p-3"><img src="/assets/img/indomart.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/indomart.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/indomart.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-6 border rounded pb-3">
            <h1>Pulsa</h1>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-3 border p-3"><img src="/assets/img/telkomsel.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/telkomsel.png" alt=""></div>
                    <div class="col-3 border p-3"><img src="/assets/img/telkomsel.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-2"><a href="/" class="btn btn-light btn-block">Batal</a></div>
        <div class="col-2"><a href="/checkout" class="btn btn-primary btn-block">CHECKOUT</a></div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid bg-abu mt-4">
    <div class="container mt-lg-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-5 font-weight-bold jumbotron-text" data-aos="fade-right">Mewujudkan Impian Website dan Aplikasi Anda</h1>
                <p class="mt-4 text-secondary" data-aos="fade-left">FANA memberikan solusi untuk anda dalam mewujudkan Website dan Aplikasi Berbasis Web sesuai keinginan anda dengan harga yang terjangkau dan hasil yang memuaskan. Serta menjual Aplikasi Web siap pakai dengan modul lengkap.</p>
                <a class="btn btn-outline-primary mt-1 btn-lg px-4" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <h3 class="jumbotron-text font-weight-bold mb-5" data-aos="fade-right">Beberapa Teknologi Yang Kami Gunakan</h3>
    <div class="row mt-5 pt-lg-5 justify-content-md-center">
        <div class="col-md-6 col-lg-4">
            <a href="https://www.codeigniter.com/" target="_blank">
                <img src="/assets/img/codeigniter.png" class="h-50" alt="CodeIgniter Logo" data-aos="fade-up">
            </a>   
            <p class="lead pt-3" data-aos="fade-right">CodeIgniter</p>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="https://www.getbootstrap.com/" target="_blank">
                <img src="/assets/img/bootstrap.jpg" class="h-50" alt="Bootstrap Logo" data-aos="fade-up">
            </a>
            <p class="lead pt-3" data-aos="fade-right">Bootstrap</p>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="https://www.javascript.com/" target="_blank">
                <img src="/assets/img/javascript.png" class="h-50" alt="JavaScript Logo" data-aos="fade-up">
            </a>
            <p class="lead pt-3" data-aos="fade-right">JavaScript</p>
        </div>
    </div>

    <h3 class="jumbotron-text font-weight-bold mb-5" data-aos="fade-left">Produk Unggulan Kami</h3>
    <div class="row mt-5 pt-lg-5 justify-content-md-center">
        <div class="col-md-6 col-lg-4">
            <p class="lead font-weight-bold pt-3 text-secondary" data-aos="fade-right">Company Profile</p>
            <img src="/assets/img/codeigniter.png" class="h-50" alt="CodeIgniter Logo" data-aos="fade-up">
            <a class="btn btn-outline-primary d-block mt-4 w-50 mx-auto">Detail</a>
        </div>
        <div class="col-md-6 col-lg-4">
            <p class="lead font-weight-bold pt-3 text-secondary" data-aos="fade-right">Point of Sales</p>
            <img src="/assets/img/bootstrap.jpg" class="h-50" alt="Bootstrap Logo" data-aos="fade-up">
            <a class="btn btn-outline-primary d-block mt-4 w-50 mx-auto">Detail</a>
        </div>
        <div class="col-md-6 col-lg-4">
            <p class="lead font-weight-bold pt-3 text-secondary" data-aos="fade-right">Website Pendidikan + LMS</p>
            <img src="/assets/img/javascript.png" class="h-50" alt="JavaScript Logo" data-aos="fade-up">
            <a class="btn btn-outline-primary d-block mt-4 w-50 mx-auto">Detail</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>


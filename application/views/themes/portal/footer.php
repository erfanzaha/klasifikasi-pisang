<style>
.newsletter.variant3 {
    margin-top: 0;
}

.newsletter.variant3 .input-group {
    width: 100%;
}

.input-group-btn:last-child>.btn,
.input-group-btn:last-child>.btn-group {
    margin-left: 0px;
}
</style>
<!-- Footer -->
<footer class="page-footer variant4 fullboxed">
    <div class="footer-top bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- newsletter -->
                    <div class="newsletter variant3">
                        <div class="footer-logo">
                            <img src="<?= base_url() ?>assets/portal/images/<?= basicConfig('logo putih')->description ?>">
                        </div>
                        <div>
                            <!-- input-group -->
                            <form action="#" id="form-add-new-data" method="post">

                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email" id="email"
                                        required>
                                </div>
                                <div class="input-group">
                                    <textarea type="text" class="form-control" placeholder="Kritik dan saran" required
                                        name="comment" id="comment"></textarea>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Kirim</button>
                                    </span>
                                </div>
                            </form>
                            <!-- /input-group -->
                        </div>
                    </div>
                    <!-- /newsletter -->
                </div>
                <div class="col-md-6">
                    <h3><span class="custom-color">TENTANG</span> Media Kreatif </h3>
                    <div class="news-item">
                        <div class="news-text">
                            <?= basicConfig('tentang')->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>MENU</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="marker-list">
                                <li><a href="<?= base_url('/') ?>">Beranda</a></li>
                                <li><a href="<?= base_url('kaos') ?>">Kaos</a></li>
                                <li><a href="<?= base_url('plastik') ?>">Plastik</a></li>
                                <li><a href="<?= base_url('cup') ?>">Cup</a></li>
                                <li><a href="<?= base_url('lainnya') ?>">Lainnya</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>AKUN SAYA</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="marker-list">
                                <li><a href="<?= base_url('customer/dashboard') ?>">Akun Saya</a></li>
                                <li><a href="<?= base_url('customer') ?>">Masuk</a></li>
                                <li><a href="<?= base_url('cart') ?>">Keranjang</a></li>
                                <li><a href="<?= base_url('register') ?>">Daftar</a></li>
                                <li><a href="<?= base_url('forgot-password') ?>">Lupa Katasandi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>KONTAK KAMI</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="simple-list">
                                <li><i class="icon icon-phone"></i><?= basicConfig('telp')->description ?></li>
                                <li><i class="icon icon-mail"></i><a
                                        href="mailto:<?= basicConfig('email')->description ?>"><?= basicConfig('email')->description ?></a></li>
                                <li><i class="icon icon-home"></i><?= basicConfig('alamat')->description ?></li>
                            </ul>
                            <div class="footer-social">
                                <a href="#"><i class="icon icon-facebook icon-circled"></i></a> 
                                <a href="#"><i class="icon icon-instagram icon-circled"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>CARA PEMBAYARAN</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <div class="footer-payment-link text-center">
                            <?php foreach ($payment as $key => $value) : ?>
                                <a href="#">
                                <img src="<?= base_url() ?>assets/portal/images/payment-shipping/<?= $value->gambar ?>" alt=""></a>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-lg-12">
                    <div class="footer-copyright text-center"> <?= basicConfig('copyright')->description ?> </div>
                    <div class="footer-payment-link text-center">
                    <?php foreach ($shipping as $key => $value) : ?>
                        <a href="#"><img src="<?= base_url() ?>assets/portal/images/payment-shipping/<?= $value->gambar ?>"
                                alt=""></a>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->
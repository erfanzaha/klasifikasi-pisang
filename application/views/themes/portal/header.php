<!-- Header -->
<header class="page-header variant-2 fullboxed sticky smart">
    <div class="navbar">
        <div class="container">
            <!-- Menu Toggle -->
            <div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a>
            </div>
            <!-- /Menu Toggle -->
            <!-- Header Cart -->
            <div class="header-link dropdown-link header-cart variant-1">
                <a href="<?= base_url('keranjang') ?>"> <i class="icon icon-cart"></i> </a>
                <!-- minicart wrapper -->
                <div class="dropdown-container right">
                    <!-- minicart content -->
                    <div class="block block-minicart">
                        <div class="minicart-content-wrapper">
                            <div class="block-title">
                                <span>Recently added item(s)</span>
                            </div>
                            <a class="btn-minicart-close" title="Close">&#10060;</a>
                            <div class="block-content">
                                <?php 
                                if($this->session->userdata('id_user') != null):
                                $checkKeranjang = $this->m_keranjang->viewKeranjang()->num_rows(); 
                                if($checkKeranjang > 0) :?>
                                <div class="minicart-items-wrapper overflowed">
                                    <ol class="minicart-items">
                                        <?php 
                                    $total = 0;
                                    foreach ($this->m_keranjang->viewKeranjang()->result() as $key => $value) : 
                                    $image = $this->m_keranjang->viewGambar($value->id_produk,$value->warna)->row();
                                        ?>
                                        <li class="item product product-item">
                                            <div class="product">
                                                <a class="product-item-photo" href="#" title="Long sleeve overall">
                                                    <span class="product-image-container">
                                                        <span class="product-image-wrapper">
                                                            <img src="<?= base_url() ?>assets/portal/images/products/<?= $image->image ?>"
                                                                alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                                <div class="product-item-details">
                                                    <div class="product-item-name">
                                                        <a href="#"><?= $value->nama_produk ?></a>
                                                    </div>
                                                    <div class="product-item-qty">
                                                        <label class="label">Qty</label>
                                                        <?= number_format($value->jumlah,0,',','.') ?>
                                                    </div>
                                                    <div class="product-item-pricing">
                                                        <div class="price-container">
                                                            <span class="price">
                                                                <?= number_format($value->harga,0,',','.') ?>
                                                            </span>
                                                        </div>
                                                        <div class="product actions">
                                                            <div class="secondary">
                                                                <?= $value->ukuran ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php 
                                        $subTotal = $value->jumlah * $value->harga;
                                        $total += $subTotal;
                                        endforeach; ?>
                                    </ol>
                                </div>
                                <div class="subtotal">
                                    <span class="label">
                                        <span>Subtotal</span>
                                    </span>
                                    <div class="amount price-container">
                                        <span class="price-wrapper"><span class="price">Rp <?= number_format($total,0,',','.') ?></span></span>
                                    </div>
                                </div>
                                <div class="actions">
                                    <div class="secondary">
                                        <a href="<?= base_url('keranjang') ?>" class="btn btn-alt">
                                            <i class="icon icon-cart"></i><span>Lihat Keranjang</span>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /minicart content -->
                </div>
                <!-- /minicart wrapper -->
            </div>
            <!-- /Header Cart -->
            <!-- Header Links -->
            <div class="header-links">
                <!-- Header Account -->
                <div class="header-link dropdown-link header-account">
                    <a
                        href="<?= $active = ($this->session->userdata('id_user') != null ? base_url('akun-saya') : base_url('customer'))  ?>"><i
                            class="icon icon-user"></i></a>
                    <div class="dropdown-container right">
                        <?php if( $this->session->userdata('id_user') != null) : ?>
                        <a href="<?= base_url('akun-saya') ?>" class="btn btn-block">Akun Saya</a>
                        <a href="<?= base_url('pesanan') ?>" class="btn btn-block">Pesanan Saya</a>
                        <a onclick="keluar();" class="btn btn-block">Keluar</a>
                        <?php else: ?>
                        <div class="title">Login Akun</div>
                        <div class="top-text">Jika anda sudah mempunyai akun. Silahkan login</div>
                        <!-- form -->
                        <form method="post" id="form-data-login" class="account-create">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username"
                                required>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                id="password" required>
                            <button type="submit" class="btn">Login</button>
                        </form>
                        <!-- /form -->
                        <a href="<?= base_url('forgot-password') ?>">Lupa Katasandi ?</a>
                        <hr>
                        <div class="title">ATAU</div>
                        <div class="bottom-text">Buat <a href="<?= base_url('register') ?>">Akun</a> Baru</div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /Header Account -->
            </div>
            <!-- /Header Links -->
            <!-- Header Search -->
            <div class="header-link header-search header-search">
                <div class="exp-search">
                    <form method="post" action="<?= base_url('pencarian') ?>">
                        <input class="exp-search-input " placeholder="Kaos Polos, Topi, Plastik, Cup ..." type="text" name="pencarian">
                        <input class="exp-search-submit" type="submit" >
                        <span class="exp-icon-search"><i class="icon icon-search"></i></span>
                        <span class="exp-search-close"><i class="icon icon-cross"></i></span>
                    </form>
                </div>
            </div>
            <!-- /Header Search -->
            <!-- Logo -->
            <div class="header-logo">
                <a href="<?= base_url('/') ?>" title="Logo">
                    <img src="<?= base_url() ?>assets/portal/images/<?= basicConfig('logo warna')->description ?>">
                </a>
            </div>
            <!-- /Logo -->
            <!-- Mobile Menu -->
            <div class="mobilemenu dblclick">
                <div class="mobilemenu-header">
                    <div class="title">MENU</div>
                    <a href="#" class="mobilemenu-toggle"></a>
                </div>
                <div class="mobilemenu-content">
                    <ul class="nav">
                        <li><a href="<?= base_url('/') ?>">Beranda</a></span>
                        </li>
                        <li><a href="<?= base_url('kaos') ?>" title="">Kaos</a></span>
                        </li>
                        <li><a href="<?= base_url('topi') ?>">Topi</a></li>
                        <li><a href="<?= base_url('plastik') ?>">Plastik</a></li>
                        <li><a href="<?= base_url('cup')?>">Cup</a></li>
                        <li><a href="<?= base_url('lainnya')?>">Lainnnya</a></li>
                    </ul>
                </div>
            </div>
            <!-- Mobile Menu -->
            <!-- Mega Menu -->
            <div class="megamenu fadein blackout">
                <ul class="nav">
                    <li><a href="<?= base_url('/') ?>" title=""><i class="icon icon-home"></i></a></li>
                    <li class="mega-dropdown">
                        <a href="<?= base_url('kaos') ?>">Kaos</a>
                    </li>
                    <li class="simple-dropdown">
                        <a href="<?= base_url('topi') ?>" title="">Topi</a>
                    </li>
                    <li class="mega-dropdown">
                        <a href="<?= base_url('plastik') ?>">Plastik</a>
                    </li>
                    <li class="mega-dropdown">
                        <a href="<?= base_url('cup') ?>">Cup</a>
                    </li>
                    <li class="mega-dropdown">
                        <a href="<?= base_url('lainnya') ?>">Lainnya</a>
                    </li>
                </ul>
            </div>
            <!-- /Mega Menu -->
        </div>
    </div>
</header>
<!-- /Header -->
<div id="app">
<main>
    <div id="primary" class="blue4 p-t-b-100 height-full responsive-phone">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/icon/icon-plane.png" alt="">
                </div>
                <div class="col-lg-6 p-t-100">
                    <div class="text-white">
                        <h1>Welcome Back</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter"><?= APP_NAME ?></p>
                    </div>
                    <form action="" id="form-tambah">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-user-o"></i>
                                    <input name="username" type="text" class="form-control form-control-lg no-b"
                                           placeholder="Username">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="icon-lock"></i>
                                    <input name="password" type="password" class="form-control form-control-lg no-b"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
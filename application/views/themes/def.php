<!DOCTYPE html>
<html class="loading" lang="en">
<!-- BEGIN : Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="<?= base_url() ?>assets/img/logo.png" type="image/x-icon">
    <title><?= APP_NAME ?></title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
</head>

<body class="light sidebar-mini sidebar-collapse">
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <div class="has-sidebar-left has-sidebar-tabs">
            <?= $navbar ?>
            <?= $header ?>
            <div class="container-fluid relative animatedParent animateOnce my-3">
                
                <?= $_config_content ?>
            </div>
        </div>
        <!-- main menu-->

        
        <div class="control-sidebar-bg shadow white fixed"></div>

        <?= $modal ?>

    </div>

    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
    <?= $js ?>
</body>
<!-- END : Body-->

</html>
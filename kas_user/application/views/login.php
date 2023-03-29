<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dexignzone.com/zone/EduZone/xhtml/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2017 04:58:13 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.html" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="img/bankbtnbaru.ico" />
<!-- Page Title Here -->
<title><?= $title ;?></title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/style.css">
<link rel="stylesheet" type="text/css" href="plugins/scroll/scrollbar.css">
<link class="skin"  rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/skin/skin-9.css">
<link  rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/templete.css">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/') ;?>css/switcher.css"/>
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
    <div class="page-wrapers">
        <!-- Content -->
        <div id="particles-js" class="page-content dez-login bg-primary-dark">
            <div class="relative z-index3">
                <div class="top-head text-center p-a40">
                    
                    </div>
                    <div class="login-form style-2">
                    <!-- <script>
                    setTimeout(function() {
                        $('#fs-ilang').fadeOut('fast');
                    }, 2000); // <-- time in milliseconds
                    </script> -->
                    <?php
                    $message = $this->session->flashdata('pesan');
                    if (isset($message)) {
                        echo '<div id="fs-ilang">' . $message . '</div>';
                        $this->session->unset_userdata('pesan');
                    }
                    ?>
            <div class="tab-content">
                <div id="login" class="tab-pane active text-center">
                    <br>
                    <center> <a><h3>Login User</h3></a></center><br>
                    <div class="dez-separator-outer m-b5">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>
                    <form class="p-a30 dez-form" method="post" action="<?= site_url('kas_user/home/index') ;?>">
                        <div class="form-group">
                            <input name="username" required="" class="form-control form-control-user" placeholder="Username" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="password" required="" class="form-control " placeholder="Password" type="password"/>
                        </div>

                        <div class="">
                            <center><input name="login" type="submit" value="Login" class="site-button"></center>
                        </div>
                        </br>
                        <div class="form-group text-left">
                            <center><a href=..>Login Admin</a></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom-footer text-center text-white">
            <p> &copy; Copyright <?php echo date('Y');  ?> | Invictus Community</p>
        </div>
        </div>
    </div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/jquery.countdown.js"></script>
<!-- jquery countdown -->
<script type="text/javascript" src="<?=site_url('assets/') ;?>js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="<?=site_url('assets/') ;?>js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="<?=site_url('assets/') ;?>js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/custom.min.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->
<script type="text/javascript"  src="<?=site_url('assets/') ;?>js/switcher.min.js"></script>
<!-- particles  -->
<script src="<?=site_url('assets/') ;?>js/particles.js"></script>
<script src="<?=site_url('assets/') ;?>js/particles.app.js"></script>

<!-- Style Switcher -->

<!-- Style Switcher End -->
</body>

<!-- Mirrored from dexignzone.com/zone/EduZone/xhtml/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2017 04:58:16 GMT -->
</html>

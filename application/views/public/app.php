<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('layouts/head'); ?>
</head>

<body>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Rekruitasi Pegawai</a>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="" data-image="<?php echo base_url(); ?>assets/img/background/background-2.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container-fluid">
                    <?php $this->load->view($content); ?> 
                </div>
            </div>

        	<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">SISFO EnjoyBgt</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<?php $this->load->view('layouts/script'); ?>

</html>

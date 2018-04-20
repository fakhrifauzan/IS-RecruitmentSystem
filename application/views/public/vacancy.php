<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Sistem Rekruitasi Pegawai</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="<?php echo base_url(); ?>assets/kit/bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/kit/assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/kit/assets/css/demo.css" rel="stylesheet" /> 
    <link href="<?php echo base_url(); ?>assets/kit/assets/css/examples.css" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      
</head>
<body>
    
    <nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Rekruitasi Pegawai</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="<?php echo base_url('auth'); ?>" class="btn btn-simple">Login</a>
            </li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav>
    
    <div class="wrapper">
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2><?php echo $vacancy->title; ?></h2>
                            <h5><b><?php echo $vacancy->location; ?></b>, <?php echo $vacancy->type; ?></h5>
                            <br>
                            <br>
                            <h5><b>Deskripsi Pekerjaan</b></h5>
                            <p><?php echo $vacancy->job_desc; ?></p>
                            <br>
                            <br>
                            <h5><b>Kualifikasi</b></h5>
                            <p><?php echo $vacancy->qualifications; ?></p>
                            <br>
                            <br>
                            <h5><b>Informasi Tambahan</b></h5>
                            <p><?php echo $vacancy->additional; ?></p>
                            <br>
                            <br>
                            <a href="<?php echo base_url('vacancy/'.$vacancy->id_vacancy.'/submit'); ?>" class="btn btn-lg btn-danger btn-fill">Ajukan Lamaran Sekarang</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
    <footer class="footer-demo section-dark">
        <div class="container">
            <div class="copyright pull-center">
                &copy; 2018, made with <i class="fa fa-heart heart"></i> by SISFO EnjoyBgt
            </div>
        </div>
    </footer>

</body>

<script src="<?php echo base_url(); ?>assets/kit/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/kit/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/kit/bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="<?php echo base_url(); ?>assets/kit/assets/js/ct-paper-checkbox.js"></script>
<script src="<?php echo base_url(); ?>assets/kit/assets/js/ct-paper-radio.js"></script>
<script src="<?php echo base_url(); ?>assets/kit/assets/js/bootstrap-select.js"></script>
<script src="<?php echo base_url(); ?>assets/kit/assets/js/bootstrap-datepicker.js"></script>

<script src="<?php echo base_url(); ?>assets/kit/assets/js/ct-paper.js"></script>
    
</html>
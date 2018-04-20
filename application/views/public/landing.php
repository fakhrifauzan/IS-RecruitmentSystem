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
        <div class="landing-header" style="background-image: url('<?php echo base_url(); ?>assets/kit/assets/paper_img/landing_new.png');">
            <div class="container">
                <div class="motto" style="color: white;">
                    <h1 class="title-uppercase">Ayo</h1>
                    <h3>Jadilah bagian dari kami.</h3>
                    <br />
                    <a href="#vacancy" class="btn btn-danger btn-fill">Lihat Lowongan</a>
                </div>
            </div>    
        </div>
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>PT. AT10TION</h2>
                            <h5>Keluarga Besar.</h5>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="section section-dark landing-section">
                <div class="container">
                    <h2 class="text-center" id="vacancy">Lowongan Pekerjaan</h2>
                    <?php
                    foreach ($vacancy as $vacancy): ?>
                        <div class="col-md-4 column">
                            <h4><?php echo $vacancy->title; ?></h4>
                            <p><?php echo $vacancy->job_desc; ?></p>
                            <a class="btn btn-danger btn-simple" href="<?php echo base_url('vacancy/'.$vacancy->id_vacancy); ?>">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                    <?php endforeach ;?>
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
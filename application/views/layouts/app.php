<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view('layouts/head'); ?>
</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-background-color="brown" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="#" class="simple-text logo-mini">
					SRP
				</a>

				<a href="#" class="simple-text logo-normal">
					SisRek Pegawai
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="photo">
	                    <img src="<?php echo base_url(); ?>assets/img/avatar.png" />
	                </div>
	                <div class="info">
						<a data-toggle="collapse" href="#" class="collapsed">
	                        <span>
								<?php echo $this->session->first_name.' '.$this->session->last_name ?>
							</span>
	                    </a>
						<div class="clearfix"></div>
	                </div>
	            </div>
				<?php $this->load->view($sidebar); ?> 
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-default">
	            <div class="container-fluid">
					<?php $this->load->view('layouts/navbar'); ?>
	            </div>
	        </nav>

	        <div class="content">
	            <div class="container-fluid">
	                <?php $this->load->view($content); ?> 
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
					<?php $this->load->view('layouts/footer'); ?>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

<?php $this->load->view('layouts/script'); ?>

</html>

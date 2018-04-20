<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view('layouts/head'); ?>
</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-background-color="white" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text logo-mini">
					CT
				</a>

				<a href="http://www.creative-tim.com" class="simple-text logo-normal">
					Creative Tim
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<div class="user">
	                <div class="photo">
	                    <img src="<?php echo base_url(); ?>assets/img/faces/face-2.jpg" />
	                </div>
	                <div class="info">
						<a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								Chet Faker
		                        <b class="caret"></b>
							</span>
	                    </a>
						<div class="clearfix"></div>

	                    <div class="collapse" id="collapseExample">
	                        <ul class="nav">
	                            <li>
									<a href="#profile">
										<span class="sidebar-mini">Mp</span>
										<span class="sidebar-normal">My Profile</span>
									</a>
								</li>
	                            <li>
									<a href="#edit">
										<span class="sidebar-mini">Ep</span>
										<span class="sidebar-normal">Edit Profile</span>
									</a>
								</li>
	                            <li>
									<a href="#settings">
										<span class="sidebar-mini">S</span>
										<span class="sidebar-normal">Settings</span>
									</a>
								</li>
	                        </ul>
	                    </div>
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

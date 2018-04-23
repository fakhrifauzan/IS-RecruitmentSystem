<ul class="nav">
	<li class="<?php if($this->uri->segment(2) == "dashboard"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('employee/dashboard'); ?>">
	        <i class="fa fa-home"></i>
	        <p>Beranda</p>
	    </a>
	</li>
</ul>
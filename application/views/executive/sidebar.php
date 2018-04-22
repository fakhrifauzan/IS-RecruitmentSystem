<ul class="nav">
	<li class="<?php if($this->uri->segment(2) == "dashboard"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('executive/dashboard'); ?>">
	        <i class="ti-bar-chart-alt"></i>
	        <p>Beranda</p>
	    </a>
	</li>
	<li class="<?php if($this->uri->segment(2) == "charts"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('executive/charts'); ?>">
	        <i class="ti-bar-chart-alt"></i>
	        <p>Grafik</p>
	    </a>
	</li>
</ul>
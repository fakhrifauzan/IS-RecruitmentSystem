<ul class="nav">
	<li class="<?php if($this->uri->segment(2) == "dashboard"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('manager/dashboard'); ?>">
	        <i class="ti-bar-chart-alt"></i>
	        <p>Beranda</p>
	    </a>
	</li>
	<li class="<?php if($this->uri->segment(2) == "submission"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('manager/submission'); ?>">
	        <i class="ti-calendar"></i>
	        <p>Daftar Pelamar</p>
	    </a>
	</li>
	<li class="<?php if($this->uri->segment(2) == "vacancy"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('manager/vacancy'); ?>">
	        <i class="ti-calendar"></i>
	        <p>Daftar Lowongan</p>
	    </a>
	</li>
</ul>
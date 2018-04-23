<ul class="nav">
	<li class="<?php if($this->uri->segment(2) == "dashboard"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('manager/dashboard'); ?>">
	        <i class="fa fa-home"></i>
	        <p>Beranda</p>
	    </a>
	</li>
	<li class="<?php if($this->uri->segment(2) == "submission"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('manager/submission'); ?>">
	        <i class="fa fa-table"></i>
	        <p>Daftar Pelamar</p>
	    </a>
	</li>
	<li class="<?php if($this->uri->segment(2) == "vacancy"){ echo "active"; } ?>">
	    <a href="<?php echo base_url('manager/vacancy'); ?>">
	        <i class="fa fa-table"></i>
	        <p>Daftar Lowongan</p>
	    </a>
	</li>
</ul>
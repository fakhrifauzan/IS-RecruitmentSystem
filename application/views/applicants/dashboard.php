<div class="row">
    <div class="col-md-12">
		<div class="card card-timeline card-plain">
			<div class="card-header text-center">
                <h2 class="card-title">Timeline</h2>
            </div>
            <div class="card-content">
                <ul class="timeline">
				    <li class="timeline-inverted">
				        <div class="timeline-badge <?php if($data->verified == 1){ echo "success"; } else { echo "danger"; } ?>">
						  	<i class="fa fa-<?php if($data->verified == 1){ echo "check"; } else { echo "close"; } ?>"></i>
					    </div>
				    	<div class="timeline-panel">
					        <div class="timeline-heading">
					          <h4>Verifikasi Berkas</h4>
					        </div>
					        <div class="timeline-body">
					        	<!--  -->
				        	</div>
				      </div>
				    </li>
				    <li>
				        <div class="timeline-badge <?php if($data->in_review == 1){ echo "success"; } else { echo "danger"; } ?>">
						  	<i class="fa fa-<?php if($data->in_review == 1){ echo "check"; } else { echo "close"; } ?>"></i>
					    </div>
				    	<div class="timeline-panel">
					        <div class="timeline-heading">
					          <h4>Tahap In Review</h4>
					        </div>
					        <div class="timeline-body">
					        	<!--  -->
				        	</div>
				      	</div>
				    </li>
				    <li class="timeline-inverted">
				    	<div class="timeline-badge <?php if($data->interview == 1){ echo "success"; } else { echo "danger"; } ?>">
						  	<i class="fa fa-<?php if($data->interview == 1){ echo "check"; } else { echo "close"; } ?>"></i>
					    </div>
				    	<div class="timeline-panel">
					        <div class="timeline-heading">
					          <h4>Tahap Wawancara</h4>
					        </div>
				    	</div>
					</li>
                    <li>
				        <div class="timeline-badge <?php if($data->offer == 1){ echo "success"; } else { echo "danger"; } ?>">
						  	<i class="fa fa-<?php if($data->offer == 1){ echo "check"; } else { echo "close"; } ?>"></i>
					    </div>
				    	<div class="timeline-panel">
					        <div class="timeline-heading">
					          <h4>Hasil / Penawaran (Offer)</h4>
					        </div>
				    	</div>
				    </li>
				</ul>
            </div>
		</div>
    </div>
</div>
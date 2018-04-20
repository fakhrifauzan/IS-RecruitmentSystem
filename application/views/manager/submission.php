<div class="row">
    <div class="col-md-12">
		<h4 class="title">Daftar Pelamar</h4>

		<br>

        <div class="card">
            <div class="card-content">
                <div class="toolbar">
                    <!--Here you can write extra buttons/actions for the toolbar-->
                </div>
                <div class="fresh-datatables">
					<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Job Position</th>
							<th>Resume</th>
							<th>Verifikasi</th>
							<th>Rekomendasi</th>
							<th>In Review</th>
							<th>Interview</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($data as $submission): ?>
                            <tr>
                                <td><?php echo $submission->applicants->first_name ?></td>
                                <td><?php echo $submission->vacancy->title ?></td>
                                <td>
                                	<a href="<?php echo base_url('assets/resume/').$submission->resume ?>" class="btn btn-default"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </td>
                                <td>
                                	<a href="<?php echo base_url('employee/submission/').$submission->id_submission.'/setVerified' ?>" class="btn btn-<?php if($submission->verified == 0){ echo 'danger';} else { echo 'success';} ?>"><i class="fa fa-<?php if($submission->verified == 0){ echo 'times';} else { echo 'check';} ?>" aria-hidden="true"></i></a>
                                </td>
                                <td><?php echo $submission->recommendation ?></td>
                                <td>
                                	<a href="<?php echo base_url('employee/submission/').$submission->id_submission.'/setInReview' ?>" class="btn btn-<?php if($submission->in_review == 0){ echo 'danger';} else { echo 'success';} ?>"><i class="fa fa-<?php if($submission->in_review == 0){ echo 'times';} else { echo 'check';} ?>" aria-hidden="true"></i></a>
                                </td>
                                <td>
                                	<a href="<?php echo base_url('employee/submission/').$submission->id_submission.'/setInterview' ?>" class="btn btn-<?php if($submission->interview == 0){ echo 'danger';} else { echo 'success';} ?>"><i class="fa fa-<?php if($submission->interview == 0){ echo 'times';} else { echo 'check';} ?>" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ;?>
					   </tbody>
				    </table>
				</div>
            </div>
        </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
</div> <!-- end row -->
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
        <div class="card">
			<form class="form-horizontal" method="post" action="<?php echo base_url('manager/vacancy/store') ?>">
                <div class="card-header">
					<h4 class="card-title">
						Tambah Lowongan Pekerjaan
					</h4>
					<?php echo validation_errors(); ?>
				</div>
                <div class="card-content">
					<div class="form-group">
                        <label class="col-md-3 control-label">Judul</label>
                        <div class="col-md-9">
                            <input type="text" name="title" placeholder="Judul" class="form-control" value="<?php echo set_value('title'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Deskripsi Pekerjaan</label>
                        <div class="col-md-9">
                            <textarea name="job_desc" class="form-control" placeholder="Here can be your nice text" rows="3" required><?php echo set_value('job_desc'); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kualifikasi</label>
                        <div class="col-md-9">
                            <textarea name="qualifications" class="form-control" placeholder="Here can be your nice text" rows="3" required><?php echo set_value('qualifications'); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Informasi Tambahan</label>
                        <div class="col-md-9">
                            <textarea name="additional" class="form-control" placeholder="Here can be your nice text" rows="3"><?php echo set_value('additional'); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Lokasi</label>
                        <div class="col-md-9">
                            <select name="location_id" class="selectpicker" data-style="btn btn-default" title="Pilih Lokasi Pekerjaan" data-size="7" required>
                            	<?php foreach ($data as $location) : ?>
                            		<option value="<?php echo $location->location_id ?>"><?php echo $location->city ?></option>
                            	<?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tipe Lowongan</label>
                        <div class="col-md-9">
                            <select name="type" class="selectpicker" data-style="btn btn-default" title="Pilih Tipe Lowongan" data-size="7" required>
                                <option value="Full Time">Full Time</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" class="selectpicker" data-style="btn btn-default" title="Pilih Status Lowongan" data-size="7" required>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<label class="col-md-3"></label>
						<div class="col-md-9">
							<button type="submit" class="btn btn-fill btn-info">
								Simpan
							</button>
						</div>
					</div>
				</div>
			</form>
    	</div> <!-- end card -->
	</div> <!--  end col-md-6  -->
	<div class="col-md-2"></div>
</div>
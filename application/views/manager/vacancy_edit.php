<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
        <div class="card">
			<form class="form-horizontal" method="post" action="<?php echo base_url('manager/vacancy/update') ?>">
                <div class="card-header">
					<h4 class="card-title">
						Ubah Lowongan Pekerjaan
					</h4>
					<?php echo validation_errors(); ?>
				</div>
                <div class="card-content">
					<div class="form-group">
                        <label class="col-md-3 control-label">Judul</label>
                        <div class="col-md-9">
                            <input type="text" name="title" placeholder="Judul" class="form-control" value="<?php echo $vacancy->title; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Deskripsi Pekerjaan</label>
                        <div class="col-md-9">
                            <textarea name="job_desc" class="form-control" placeholder="Here can be your nice text" rows="3" required><?php echo $vacancy->job_desc; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kualifikasi</label>
                        <div class="col-md-9">
                            <textarea name="qualifications" class="form-control" placeholder="Here can be your nice text" rows="3" required><?php echo $vacancy->qualifications; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Informasi Tambahan</label>
                        <div class="col-md-9">
                            <textarea name="additional" class="form-control" placeholder="Here can be your nice text" rows="3"><?php echo $vacancy->additional; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Lokasi</label>
                        <div class="col-md-9">
                            <select name="location_id" class="selectpicker" data-style="btn btn-default" title="Pilih Lokasi Pekerjaan" data-size="7" required>
                            	<?php foreach ($data as $location) : ?>
                            		<option value="<?php echo $location->location_id ?>" <?php if($vacancy->location_id == $location->location_id){ echo "selected"; }?>><?php echo $location->city ?></option>
                            	<?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tipe Lowongan</label>
                        <div class="col-md-9">
                            <select name="type" class="selectpicker" data-style="btn btn-default" title="Pilih Tipe Lowongan" data-size="7" required>
                                <?php $type = ['Full Time', 'Freelance', 'Internship']; ?>
                                <?php foreach ($type as $type) : ?>
                                    <option value="<?php echo $type; ?>" <?php if($vacancy->type == $type){ echo "selected"; }?>><?php echo $type; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" class="selectpicker" data-style="btn btn-default" title="Pilih Status Lowongan" data-size="7" required>
                                <option value="1" <?php if($vacancy->status == 1){ echo "selected"; }?>>Aktif</option>
                                <option value="0" <?php if($vacancy->status == 0){ echo "selected"; }?>>Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<label class="col-md-3"></label>
						<div class="col-md-9">
                            <input type="hidden" name="id_vacancy" class="form-control" value="<?php echo $vacancy->id_vacancy; ?>">
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
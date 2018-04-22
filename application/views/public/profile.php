<div class="row">
	<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Profile</h4>
            </div>
            <div class="card-content">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->applicants->username ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control border-input" value="<?php echo $data->applicants->email ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->applicants->first_name ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Belakang</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->applicants->last_name ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->applicants->location ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->applicants->gender ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rekomendasi</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->recommendation ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat Situs</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->website ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LinkedIn</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->linkedin ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Github</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->github ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->facebook ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control border-input" value="<?php echo $data->twitter ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
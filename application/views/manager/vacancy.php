<div class="row">
    <div class="col-md-12">
		<h4 class="title">Daftar Lowongan</h4>

		<br>

        <div class="card">
            <div class="card-content">
                <div class="toolbar text-center">
                    <!--Here you can write extra buttons/actions for the toolbar-->
                    <a href="<?php echo base_url('manager/vacancy/create') ?>" class="btn btn-info btn-fill btn-wd btn-lg">Tambah Lowongan</a>
                </div>
                <div class="fresh-datatables">
					<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
					<thead>
						<tr>
                            <th>Judul</th>
							<th>Lokasi</th>
							<th>Tipe</th>
							<th>Status</th>
							<th>Dibuat Oleh</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($data as $vacancy): ?>
                            <tr>
                                <td><?php echo $vacancy->title ?></td>
                                <td><?php echo $vacancy->location->city ?></td>
                                <td><?php echo $vacancy->type ?></td>
                                <td>
                                    <a href="<?php echo base_url('manager/vacancy/').$vacancy->id_vacancy.'/changeStatus' ?>" class="btn btn-<?php if($vacancy->status == 0){ echo 'danger';} else { echo 'success';} ?>"><i class="fa fa-<?php if($vacancy->status == 0){ echo 'times';} else { echo 'check';} ?>" aria-hidden="true"></i></a>
                                </td>
                                <td><?php echo $vacancy->manager->first_name ?> <?php echo $vacancy->manager->last_name ?></td>
                                <td>
                                    <a href="<?php echo base_url('manager/vacancy/').$vacancy->id_vacancy.'/edit' ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url('manager/vacancy/').$vacancy->id_vacancy.'/delete' ?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
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
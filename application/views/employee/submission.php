<div class="row">
    <div class="col-md-12">
		<h4 class="title">Data Pelamar</h4>

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
                            $i = 1;
                            foreach ($data as $artikel):?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $artikel->judul ?></td>
                                    <td>
                                        <?php echo substr(htmlspecialchars(strip_tags($artikel->isi)), 0, 70); ?>
                                    </td>
                                    <td>
                                        <span class="label label-<?php if($artikel->status == 0){ echo 'default';} else { echo 'success';} ?>"><?php if($artikel->status == 0){ echo 'Pending';} else { echo 'Published';} ?></span>
                                    </td>

                                    <td class="td-actions text-right">
                                        <a href="<?php echo base_url('admin/artikel/'.$artikel->id_artikel); ?>" class="btn btn-info"><i class="material-icons">assignment</i> Lihat</a>
                                        <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->id_artikel); ?>" class="btn btn-warning"><i class="material-icons">mode_edit</i> Ubah</a>
                                        <a href="<?php echo base_url('admin/artikel/delete/'.$artikel->id_artikel); ?>" class="btn btn-danger"><i class="material-icons">close</i> Hapus</a>
                                    </td>
                                </tr>
                        <?php endforeach ;?>
						<tr>
							<td>Fakhri</td>
							<td>Software Engineer</td>
							<td><a href="#" class="btn btn-default"><i class="fa fa-download" aria-hidden="true"></i></a></td>
							<td><a href="#" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
							<td>Si Siapa hayo</td>
							<td><a href="#" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
							<td><a href="#" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
						</tr>
					   </tbody>
				    </table>
				</div>
            </div>
        </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
</div> <!-- end row -->
<script>
	setTimeout(function() {
	$('#fs-ilang').fadeOut('fast');
	}, 2000); // <-- time in milliseconds
</script>
<?php
	$message = $this->session->flashdata('success');
	if (isset($message)) {
	echo '<div id="fs-ilang" class="alert alert-success" role="alert">' . $message . '</div>';
	$this->session->unset_userdata('success');
	}
?>
				<div class="page-header">
						<h4 class="page-title">Data Pengguna</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= site_url('kas_user/home/halaman');?>">
									<i class="flaticon-home" style="font-size:20px;"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Lengkap</th>
													<th>Telpon</th>
													<th>Status</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php
											$no=1;
											foreach($member as $a) :
											?>
												<tr>
													<td><?= $no++ ;?></td>
													<td><?= $a->nama_lengkap ;?></td>
													<td><?= $a->no_telepon ;?></td>
													<td><?= $a->level ;?></td>
													<td>
														<a href="<?= site_url('kas_user/home/edit_pengguna/').$a->id_pengguna ;?>" class="btn btn-small text-primary" width="300px" height="400px"><i class="fas fa-edit"></i></a>
													</td>
												</tr>
												<?php endforeach ;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

<!-- <script>
setTimeout(function() {
    $('#fs-ilang').fadeOut('fast');
}, 2000); // <-- time in milliseconds
</script> -->

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>
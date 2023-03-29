
<fieldset>
    <div class="page-header">
						<h4 class="page-title">Edit Akun</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
                            <a href="<?= site_url('kas_user/home/data1') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
							</li>
                        </ul>
									
					</div>
    <form method="post" action="<?= site_url('kas_user/home/ubah_pengguna') ;?>" class="form-horizontal">
        <input type="hidden" name="id_pengguna" id="id_pengguna" class="form-control" value="<?= $pengguna->id_pengguna ;?>" />
    <div class="form-group">
    	<label for="username" class="col-md-2" >Username</label>
        <div class="col-md-4">
        <input type="text" name="username" id="username" class="form-control" value="<?= $pengguna->username ;?>" readonly />
        </div>
        <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="nama_lengkap" class="col-md-2">Nama Lengkap</label>
        <div class="col-md-4">
        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?= $pengguna->nama_lengkap ;?>"  />
        </div>
        <?= form_error('nama_lengkap','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="no_telepon" class="col-md-2">No Telepon</label>
        <div class="col-md-4">
        <input type="text" id="no_telepon" name="no_telepon" class="form-control" value="<?= $pengguna->no_telepon ;?>"  />
        </div>
        <?= form_error('no_telepon','<small class="text-danger pl-3">','</small>');?>
    </div>  
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Ubah" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>
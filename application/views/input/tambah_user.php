
<fieldset>
    <div class="page-header">
						<h4 class="page-title">Input pass</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
                            <a href="<?= site_url('home/data1') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
							</li>
                        </ul>
									
					</div>
    <form method="post" action="<?= site_url('home/add_user') ;?>" class="form-horizontal">
    <div class="form-group">
    	<label for="username" class="col-md-2" >Username</label>
        <div class="col-md-4">
        <input type="text" name="username" id="username" class="form-control" />
        </div>
        <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
    </div>
	<div class="form-group">
    	<label for="password" class="col-md-2">Password</label>
        <div class="col-md-4">
        <input type="password" name="password" id="password" class="form-control" />
        </div>
        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="pass" class="col-md-2">Hint</label>
        <div class="col-md-4">
        <input type="text" id="pass" name="pass" class="form-control" />
        </div>
        <?= form_error('pass','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="nama_lengkap" class="col-md-2">Nama Lengkap</label>
        <div class="col-md-4">
        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" />
        </div>
        <?= form_error('nama_lengkap','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="no_telepon" class="col-md-2">No Telepon</label>
        <div class="col-md-4">
        <input type="text" id="no_telepon" name="no_telepon" class="form-control" />
        </div>
        <?= form_error('no_telepon','<small class="text-danger pl-3">','</small>');?>
    </div>  
    <div class="form-group">
    	<label for="level" class="col-md-2">Level</label>
        <div class="col-md-4">
        <input type="text" id="level" name="level" class="form-control" />
        </div>
        <?= form_error('level','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>
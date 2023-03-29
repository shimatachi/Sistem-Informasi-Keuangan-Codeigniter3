
<fieldset>
    <div class="page-header">
						<h4 class="page-title">Tambah Rekening</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
                            <a href="<?= site_url('home/data_rekening') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
							</li>
                        </ul>
									
					</div>
    <form method="post" action="<?= site_url('home/add_rekening') ;?>" class="form-horizontal">
    <div class="form-group">
    	<label for="nama" class="col-md-2" >Nama</label>
        <div class="col-md-4">
        <input type="text" name="nama" id="nama" class="form-control" />
        </div>
        <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="nama_rekening" class="col-md-2" >Nama Pada Rekening</label>
        <div class="col-md-4">
        <input type="text" name="nama_rekening" id="nama_rekening" class="form-control" />
        </div>
        <?= form_error('nama_rekening','<small class="text-danger pl-3">','</small>');?>
    </div>
	<div class="form-group">
    	<label for="nama_bank" class="col-md-2">Nama Bank</label>
        <div class="col-md-4">
        <input type="text" name="nama_bank" id="nama_bank" class="form-control" />
        </div>
        <?= form_error('nama_bank','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="no_rekening" class="col-md-2">Nomor Rekening</label>
        <div class="col-md-4">
        <input type="text" name="no_rekening" id="no_rekening" class="form-control" />
        </div>
        <?= form_error('no_rekening','<small class="text-danger pl-3">','</small>');?>
    </div>
	<div class="form-group">
        <div class="col-md-4">
        <input type="hidden" name="username" id="username" class="form-control" value="<?= $user['username'] ;?>"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>
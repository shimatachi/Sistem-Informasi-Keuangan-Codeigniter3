
<fieldset>
<div class="page-header">
						<h4 class="page-title">Edit Data Kas</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
                            <a href="<?= site_url('kas_user/home/data2') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
							</li>
                        </ul>
									
					</div>
    <form method="POST" action="<?= site_url('kas_user/home/ubah1') ;?>" class="form-horizontal">
    <input type="hidden" name="idkas" value="<?= $kas->idkas ;?>">
    <div class="form-group">
    	<label for="kd_rek" class="col-md-2" >Kode Rekening</label>
        <div class="col-md-4">
        <input type="text" name="kd_rek" id="kd_rek" class="form-control" value="<?= $kas->kdrek ;?>" />
        </div>
        <?= form_error('kd_rek','<small class="text-danger pl-3">','</small>');?>
    </div>
	<div class="form-group">
    	<label for="nm_brg" class="col-md-2">Uraian</label>
        <div class="col-md-4">
        <input type="text" name="uraian" id="nm_brg" class="form-control" value="<?= $kas->ket ;?>" />
        </div>
        <?= form_error('uraian','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="hj" class="col-md-2">Penerimaan</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="hj" name="penerimaan" class="form-control" value="<?= $kas->debit ;?>"/>
        </div>
        <?= form_error('penerimaan','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="hj" class="col-md-2">Pengeluaran</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="hj" name="keluar" class="form-control" value="<?= $kas->kredit ;?>"/>
        </div>
        <?= form_error('keluar','<small class="text-danger pl-3">','</small>');?>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Update" class="btn btn-success" />
        </div>
    </div>
    </form>
</fieldset>
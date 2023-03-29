
<fieldset>
    <div class="page-header">
						<h4 class="page-title">Input Penerimaan Kas</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
                            <a href="<?= site_url('kas_user/home/data2') ;?>" class=""><i class="fas fa-reply" style="font-size:30px;"></i></i></a>
							</li>
                        </ul>
					</div>
    <form method="post" action="<?= site_url('kas_user/home/add') ;?>" class="form-horizontal">
    
    <div class="form-group">
    	<label for="kd_rek" class="col-md-2" >Kode Rekening</label>
        <div class="col-md-4">
        <input type="text" name="kd_rek" id="kd_rek" class="form-control" />
        </div>
        <?= form_error('kd_rek','<small class="text-danger pl-3">','</small>');?>
    </div>
	<div class="form-group">
    	<label for="nm_brg" class="col-md-2">Uraian</label>
        <div class="col-md-4">
        <input type="text" name="uraian" id="nm_brg" class="form-control" />
        </div>
        <?= form_error('uraian','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
    	<label for="hj" class="col-md-2">Penerimaan</label>
        <div class="col-md-4">
        <i>Rp. </i>
        <input type="text" id="hj" data-a-sign="" data-a-dec="," data-a-sep="." name="penerimaan" class="form-control"/>
        </div>
        <?= form_error('penerimaan','<small class="text-danger pl-3">','</small>');?>
    </div>
    
    <div class="form-group">
        <div class="col-md-offset-2 col-md-4">
        <input name="tambah" type="submit" value="Tambah" class="btn btn-success"/>
        </div>
    </div>
    </form>
</fieldset>

<script src="~/Scripts/autoNumeric/autoNumeric.min.js" type="text/javascript"></script>
<script>
 jQuery(function($) {
$('#hj').autoNumeric('init');   
 });
</script>
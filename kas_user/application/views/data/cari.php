<?php
error_reporting(0);
?>
<head>
<!-- CSS Files -->
<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/atlantis.min.css">
	<script src="<?= site_url('assets/assets/ckeditor/') ;?>ckeditor.js"></script>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/demo.css">
</head>
<div class="row">
    <div class="col-md-9">
    <div class="container">
        <center>
            <h1><b>Laporan Perbulan</b></h1>
            <hr>
        </center>
        <table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>No</th>
													<th>Tanggal</th>
													<th>Kode Rekening</th>
													<th>Uraian</th>
													<th>Penerimaan</th>
													<th>Pengeluaran</th>
													<th>Saldo</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th>No</th>
													<th>Tanggal</th>
													<th>Kode Rekening</th>
													<th>Uraian</th>
													<th>Penerimaan</th>
													<th>Pengeluaran</th>
													<th>Saldo</th>
												</tr>
											</tfoot>
											<tbody>
											<?php
											$no=1;
											foreach($cari as $a) :
                                            ?>
                                            <?php 
												$saldo += $a->debit - $a->kredit;
												$saldo1 +=$a->debit;
												$saldo2 +=$a->kredit;
												?> 
												<tr>
                                                <td><?= $no++ ;?></td>
													<td><?= $a->tgl;?></td>
													<td><?= $a->kdrek ;?></td>
													<td><?= $a->ket ;?></td>
													<td>Rp. <?= number_format($a->debit) ;?></td>
													<td>Rp. <?= number_format($a->kredit) ;?></td>
													<td>Rp.<?= number_format($saldo) ;?></td>
												</tr>
                                                <?php endforeach ;?>
                                                <?php $total += $saldo+0 ;?>
													<?php $total1 += $saldo1+0 ;?>
													<?php $total2 += $saldo2+0 ;?>
                                            </tbody>
                                            		<tr>
														<th colspan="4"><center><h2>Total</h2></center></th>
														<th><b><h2>Rp.<?= number_format($total1) ;?></h2></b></th>
														<th><b><h2>Rp.<?= number_format($total2) ;?></h2></b></th>
														<td colspan="2"><b><h2>Rp.<?= number_format($total) ;?></h2></b></td>
													</tr>
										</table>
    </div>  
    </div>
</div>
<script>
    window.print();
</script>

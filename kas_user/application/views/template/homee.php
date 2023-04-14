
<br>
<br>


							<div class="text-center">
								<h1>INFORMASI</h1>
							</div>

							<div class="card">
								<div class="card-body">
											<?php
												$no=1; 
												foreach($kas as $a) :
											?>

											<?php 
												$kas2 += $a->saldo; 
												?> 

											<?php endforeach ;?>

											<p></p>

											<div class="card bg-light mb-3" style="max-width: 18rem;">
											<div class="card-header">Saldo Kas</div>
											<div class="card-body">
												<h5 class="card-title">Rp.</h5>
												<p class="card-text"><?= number_format($kas2,2,",",".")?> </p>
											</div>
											</div>
								</div>
							</div>


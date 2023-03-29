<?php
        foreach($grafik as $a){
            $awal = $a->saldoo;
            $akhir = $a->kredit;
            $hasil += $awal - $akhir;
            $tgl[] = $a->tgl;
           $saldo[] +=(double) $hasil  ;
            
        }
    ?>

<br>
<br>
<br>

<canvas id="canvas" width="1200" height="500"></canvas>
<canvas id="lineChart" width="1200" height="500"></canvas>
<script type="text/javascript" src="<?php echo base_url('assets/js/chart.min.js');?>"></script>
<script>
 
 var myLineChart = new Chart(canvas, {
			type: 'line',
			data: {
     labels : <?php echo json_encode($tgl);?>,
     datasets : [{
             label: 'saldo',
			        borderColor: "#1d7af3",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#1d7af3",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
                    data : <?php echo json_encode($saldo);?>,
     
         }]
 }
});
 
var myLine =document.getElementById("canvas").getContext("2d");

</script>

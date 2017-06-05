<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-K1',
      type: 'column'
  },   
  title: {
      text: 'Cakupan K1 '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan='$bulan' and tahun=$tahun order by K1Ini desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_K1Ini   = "SELECT K1Ini FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun ";        
    $query_K1Ini = mysql_query( $sql_K1Ini ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_K1Ini ) ){
      $K1Ini = $data['K1Ini'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $K1Ini; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-K4',
      type: 'column'
  },   
  title: {
      text: 'Cakupan K4'
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan='$bulan' and tahun=$tahun order by K4Ini desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_K4Ini   = "SELECT K4Ini FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_K4Ini = mysql_query( $sql_K4Ini ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_K4Ini ) ){
      $K4Ini = $data['K4Ini'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $K4Ini; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-deteksiResti',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Deteksi Resti'
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by deteksiRestiIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_deteksiRestiIni   = "SELECT deteksiRestiIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_deteksiRestiIni = mysql_query( $sql_deteksiRestiIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_deteksiRestiIni ) ){
      $deteksiRestiIni = $data['deteksiRestiIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $deteksiRestiIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-restiKom',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Resti Kom '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by restiKomIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_restiKomIni   = "SELECT restiKomIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_restiKomIni = mysql_query( $sql_restiKomIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_restiKomIni ) ){
      $restiKomIni = $data['restiKomIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $restiKomIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-komKeb',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Kom Keb '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by komKebIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_komKebIni   = "SELECT komKebIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_komKebIni = mysql_query( $sql_komKebIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_komKebIni ) ){
      $komKebIni = $data['komKebIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $komKebIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-persalinanNakes',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Persalinan Nakes '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by persalinanNakesIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_persalinanNakesIni   = "SELECT persalinanNakesIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_persalinanNakesIni = mysql_query( $sql_persalinanNakesIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_persalinanNakesIni ) ){
      $persalinanNakesIni = $data['persalinanNakesIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $persalinanNakesIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-persalinanFaskes',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Persalinan Faskes '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by persalinanFaskesIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_persalinanFaskesIni   = "SELECT persalinanFaskesIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_persalinanFaskesIni = mysql_query( $sql_persalinanFaskesIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_persalinanFaskesIni ) ){
      $persalinanFaskesIni = $data['persalinanFaskesIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $persalinanFaskesIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-pelayananNifas',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Pelayanan Nifas '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by pelayananNifasIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_pelayananNifasIni   = "SELECT pelayananNifasIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_pelayananNifasIni = mysql_query( $sql_pelayananNifasIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_pelayananNifasIni ) ){
      $pelayananNifasIni = $data['pelayananNifasIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $pelayananNifasIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-KN1',
      type: 'column'
  },   
  title: {
      text: 'Cakupan KN1 '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by KN1Ini desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_KN1Ini   = "SELECT KN1Ini FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_KN1Ini = mysql_query( $sql_KN1Ini ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_KN1Ini ) ){
      $KN1Ini = $data['KN1Ini'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $KN1Ini; ?>]
},
<?php } ?>
]
});
});  
</script>



<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-KNlengkap',
      type: 'column'
  },   
  title: {
      text: 'Cakupan KN Lengkap '
  }, 
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by KNLengkapIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_KNlengkapIni   = "SELECT KNlengkapIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_KNlengkapIni = mysql_query( $sql_KNlengkapIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_KNlengkapIni ) ){
      $KNlengkapIni = $data['KNlengkapIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $KNlengkapIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-neonatalKomplikasi',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Neo Komplikasi '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by neonatalKomplikasiIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_neonatalKomplikasiIni   = "SELECT neonatalKomplikasiIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_neonatalKomplikasiIni = mysql_query( $sql_neonatalKomplikasiIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_neonatalKomplikasiIni ) ){
      $neonatalKomplikasiIni = $data['neonatalKomplikasiIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $neonatalKomplikasiIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-bayiParipurna',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Bayi Paripurna '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by bayiParipurnaIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_bayiParipurnaIni   = "SELECT bayiParipurnaIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_bayiParipurnaIni = mysql_query( $sql_bayiParipurnaIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_bayiParipurnaIni ) ){
      $bayiParipurnaIni = $data['bayiParipurnaIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $bayiParipurnaIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-balitaParipurna',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Balita Paripurna '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by balitaParipurnaIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_balitaParipurnaIni   = "SELECT balitaParipurnaIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_balitaParipurnaIni = mysql_query( $sql_balitaParipurnaIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_balitaParipurnaIni ) ){
      $balitaParipurnaIni = $data['balitaParipurnaIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $balitaParipurnaIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-aprasParipurna',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Apras Paripurna '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by aprasParipurnaIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_aprasParipurnaIni   = "SELECT aprasParipurnaIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_aprasParipurnaIni = mysql_query( $sql_aprasParipurnaIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_aprasParipurnaIni ) ){
      $aprasParipurnaIni = $data['aprasParipurnaIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 

    ?>',
    data: [<?php echo $aprasParipurnaIni; ?>]
},
<?php } ?>
]
});
});  
</script>

<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagramKecamatan-balitaSakit',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Balita Sakit '
  },
  xAxis: {
      categories: ['Desa']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT desa  FROM tb_rekapan where bulan=$bulan and tahun=$tahun order by balitaSakitIni desc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $desa=$ret['desa'];                     
    $sql_balitaSakitIni   = "SELECT balitaSakitIni FROM tb_rekapan WHERE desa='$desa' and bulan='$bulan' and tahun=$tahun";        
    $query_balitaSakitIni = mysql_query( $sql_balitaSakitIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_balitaSakitIni ) ){
      $balitaSakitIni = $data['balitaSakitIni'];                 
  }             
  ?>
  {
      name: '<?php 
      echo $desa; 
      ?>',
    data: [<?php echo $balitaSakitIni; ?>]
},
<?php } ?>
]
});
});  
</script>
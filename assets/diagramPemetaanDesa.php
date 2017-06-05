<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagram-K1',
      type: 'column'
  },   
  title: {
      text: 'Cakupan K1 '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_K1Ini   = "SELECT K1Ini FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_K1Ini = mysql_query( $sql_K1Ini ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_K1Ini ) ){
      $K1Ini = $data['K1Ini'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-K4',
      type: 'column'
  },   
  title: {
      text: 'Cakupan K4'
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_K4Ini   = "SELECT K4Ini FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_K4Ini = mysql_query( $sql_K4Ini ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_K4Ini ) ){
      $K4Ini = $data['K4Ini'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-deteksiResti',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Deteksi Resti'
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_deteksiRestiIni   = "SELECT deteksiRestiIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_deteksiRestiIni = mysql_query( $sql_deteksiRestiIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_deteksiRestiIni ) ){
      $deteksiRestiIni = $data['deteksiRestiIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-restiKom',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Resti Kom '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_restiKomIni   = "SELECT restiKomIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_restiKomIni = mysql_query( $sql_restiKomIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_restiKomIni ) ){
      $restiKomIni = $data['restiKomIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-komKeb',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Kom Keb '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_komKebIni   = "SELECT komKebIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_komKebIni = mysql_query( $sql_komKebIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_komKebIni ) ){
      $komKebIni = $data['komKebIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-persalinanNakes',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Persalinan Nakes '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_persalinanNakesIni   = "SELECT persalinanNakesIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_persalinanNakesIni = mysql_query( $sql_persalinanNakesIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_persalinanNakesIni ) ){
      $persalinanNakesIni = $data['persalinanNakesIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-persalinanFaskes',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Persalinan Faskes '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_persalinanFaskesIni   = "SELECT persalinanFaskesIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_persalinanFaskesIni = mysql_query( $sql_persalinanFaskesIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_persalinanFaskesIni ) ){
      $persalinanFaskesIni = $data['persalinanFaskesIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-pelayananNifas',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Pelayanan Nifas '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_pelayananNifasIni   = "SELECT pelayananNifasIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_pelayananNifasIni = mysql_query( $sql_pelayananNifasIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_pelayananNifasIni ) ){
      $pelayananNifasIni = $data['pelayananNifasIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-KN1',
      type: 'column'
  },   
  title: {
      text: 'Cakupan KN1 '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_KN1Ini   = "SELECT KN1Ini FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_KN1Ini = mysql_query( $sql_KN1Ini ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_KN1Ini ) ){
      $KN1Ini = $data['KN1Ini'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-KNlengkap',
      type: 'column'
  },   
  title: {
      text: 'Cakupan KN Lengkap '
  }, 
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_KNlengkapIni   = "SELECT KNlengkapIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_KNlengkapIni = mysql_query( $sql_KNlengkapIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_KNlengkapIni ) ){
      $KNlengkapIni = $data['KNlengkapIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-neonatalKomplikasi',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Neo Komplikasi '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_neonatalKomplikasiIni   = "SELECT neonatalKomplikasiIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_neonatalKomplikasiIni = mysql_query( $sql_neonatalKomplikasiIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_neonatalKomplikasiIni ) ){
      $neonatalKomplikasiIni = $data['neonatalKomplikasiIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-bayiParipurna',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Bayi Paripurna '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_bayiParipurnaIni   = "SELECT bayiParipurnaIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_bayiParipurnaIni = mysql_query( $sql_bayiParipurnaIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_bayiParipurnaIni ) ){
      $bayiParipurnaIni = $data['bayiParipurnaIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-balitaParipurna',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Balita Paripurna '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_balitaParipurnaIni   = "SELECT balitaParipurnaIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_balitaParipurnaIni = mysql_query( $sql_balitaParipurnaIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_balitaParipurnaIni ) ){
      $balitaParipurnaIni = $data['balitaParipurnaIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-aprasParipurna',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Apras Paripurna '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_aprasParipurnaIni   = "SELECT aprasParipurnaIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_aprasParipurnaIni = mysql_query( $sql_aprasParipurnaIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_aprasParipurnaIni ) ){
      $aprasParipurnaIni = $data['aprasParipurnaIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

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
      renderTo: 'diagram-balitaSakit',
      type: 'column'
  },   
  title: {
      text: 'Cakupan Balita Sakit '
  },
  xAxis: {
      categories: ['Bulan']
  },
  yAxis: {
      title: {
       text: 'Jumlah Pencapaian'
   }
},
series:             
[
<?php 

$sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun order by bulan asc";
$query = mysql_query( $sql )  or die(mysql_error());
while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_balitaSakitIni   = "SELECT balitaSakitIni FROM tb_rekapan WHERE bulan='$bulan' and desa='$desa' and tahun=$tahun";        
    $query_balitaSakitIni = mysql_query( $sql_balitaSakitIni ) or die(mysql_error());
    while( $data = mysql_fetch_array( $query_balitaSakitIni ) ){
      $balitaSakitIni = $data['balitaSakitIni'];                 
  }             
  ?>
  {
      name: '<?php 
      if ($bulan==1) {
        $bulan="Januari";
    } else if ($bulan==2){
        $bulan="Februari";
    }else if ($bulan==3){
        $bulan="Maret";
    }else if ($bulan==4){
        $bulan="April";
    }else if ($bulan==5){
        $bulan="Mei";
    }else if ($bulan==6){
        $bulan="Juni";
    }else if ($bulan==7){
        $bulan="Juli";
    }else if ($bulan==8){
        $bulan="Agustus";
    }else if ($bulan==9){
        $bulan="September";
    }else if ($bulan==10){
        $bulan="Oktober";
    }else if ($bulan==11){
        $bulan="November";
    }else if ($bulan==12){
        $bulan="Desember";
    }
    echo $bulan; 

    ?>',
    data: [<?php echo $balitaSakitIni; ?>]
},
<?php } ?>
]
});
});  
</script>
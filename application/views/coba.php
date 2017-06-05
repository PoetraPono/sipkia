


<script src="<?php echo base_url()?>jschart/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>jschart/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
     chart: {
      renderTo: 'diagram aha',
      type: 'column'
    },   
    title: {
      text: 'Real Count Pemilihan Presiden '
    },
    xAxis: {
      categories: ['calon']
    },
    yAxis: {
      title: {
       text: 'Jumlah pemilih'
     }
   },
   series:             
   [
   <?php 
   $tahun=2016;
   $desa=$this->session->userdata('desa');
   $sql   = "SELECT bulan  FROM tb_rekapan where desa='$desa' and tahun=$tahun";
   $query = mysql_query( $sql )  or die(mysql_error());
   while( $ret = mysql_fetch_array( $query ) ){
    $bulan=$ret['bulan'];                     
    $sql_K1Ini   = "SELECT K1Ini FROM tb_rekapan WHERE bulan='$bulan'";        
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

<div class="about-parlex" id="as">
        <section class="parlex7-back">
          <div class="w-container">
            <div class="wrap">
              <div class="about">
                <h1 class="about-heading"><br/>REAL QOUNT</h1>
                <div class="about-text">HASIL PERHITUNGAN SEMENTARA</div>
                <!-- <div class="sepreater"></div> -->
              </div>
                <div class="col-md-6">
                  <div id='diagram aha'></div>
                </div>
              </div>
            </div>
          </section>
        </div>
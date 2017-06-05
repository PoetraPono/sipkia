<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegisterKohortBayi extends RegisterKohort {

  var $namabayi;
  var $tanggalLahir;
  var $jenisKelamin;
  var $beratBadanLahir;
  var $saatLahir;
  var $beratBadanTerakhir;

  function viewRegister($desa){
    $query=$this->db->query("SELECT * FROM tb_ibu,tb_bayi  WHERE tb_bayi.idIbu like tb_ibu.idRegister AND tb_ibu.desa='$desa'");
    return $query->result();
  }
  function addRegister($desa){
   // echo "Menambahkan Register bayi di Desa ".$desa;
   $idIbu=$this->input->post('idIbu');
   $namaBayi=$this->input->post('namaBayi');
   $tanggalLahir=$this->input->post('tanggalLahir');
   $jenisKelamin=$this->input->post('jenisKelamin');
   $beratBadanLahir=$this->input->post('beratBadanLahir');
   $pelayananSaatLahir1=$this->input->post('pelayananSaatLahir1');
   $pelayananSaatLahir2=$this->input->post('pelayananSaatLahir2');
   $saatLahir=$this->input->post('saatLahir')." ,".$pelayananSaatLahir1." ,".$pelayananSaatLahir2;
   $keterangan=$this->input->post('keterangan');

   $data = array(
    'idIbu' => $idIbu,
    'namaBayi' => $namaBayi,
    'tanggalLahir' => $tanggalLahir,
    'jenisKelamin' => $jenisKelamin,
    'beratBadanLahir' => $beratBadanLahir,
    'beratBadanTerakhir' => $beratBadanLahir,
    'saatLahir' => $saatLahir,
    'keteranganBayi' => $keterangan
    );
   $this->db->insert('tb_bayi', $data);
 }

 function editRegister($desa,$idRegister){
   $namaBayi=$this->input->post('namaBayi');
   $tanggalLahir=$this->input->post('tanggalLahir');
   $jenisKelamin=$this->input->post('jenisKelamin');
   $beratBadanLahir=$this->input->post('beratBadanLahir');
   $saatLahir=$this->input->post('saatLahir');
   $kunjunganNeonatal1=$this->input->post('kunjunganNeonatal1');
   $kunjunganNeonatal2=$this->input->post('kunjunganNeonatal2');
   $kunjunganNeonatal3=$this->input->post('kunjunganNeonatal3');
   $vitaminA=$this->input->post('vitaminA');
   $penyebabKematian=$this->input->post('penyebabKematian');
   $keterangan=$this->input->post('keterangan');

   $data = array(
    'namaBayi' => $namaBayi,
    'tanggalLahir' => $tanggalLahir,
    'jenisKelamin' => $jenisKelamin,
    'beratBadanLahir' => $beratBadanLahir,
    'saatLahir' => $saatLahir,
    'kunjunganNeonatal1' => $kunjunganNeonatal1,
    'kunjunganNeonatal2' => $kunjunganNeonatal2,
    'kunjunganNeonatal3' => $kunjunganNeonatal3,
    'vitaminA' => $vitaminA,
    'penyebabKematian' => $penyebabKematian,
    'keteranganBayi' => $keterangan
    );
   // echo $keterangan;
   $this->db->where('idBayi', $idRegister);
   $this->db->update('tb_bayi', $data); 
 }
 function deleteRegister($desa,$idRegister){
   $this->db->where('idBayi', $idRegister);
   $this->db->delete('tb_bayi'); 
 }

 function addPelayanan($desa,$idRegister){
  $beratBadan=$this->input->post('beratBadan');
  $pelayanan2=$this->input->post('pelayanan2');
  $pelayanan3=$this->input->post('pelayanan3');
  $pelayanan4=$this->input->post('pelayanan4');
  $pelayanan6=$this->input->post('pelayanan6');
  $pelayanan7=$this->input->post('pelayanan7');
  $imunisasiHB=$this->input->post('imunisasiHB');
  $imunisasiBCG=$this->input->post('imunisasiBCG');
  $imunisasiPolio=$this->input->post('imunisasiPolio');
  $imunisasiCampak=$this->input->post('imunisasiCampak');
  $vitaminA=$this->input->post('vitaminA');
  $kunjunganNeonatal=$this->input->post('kunjunganNeonatal');
  $komplikasi=$this->input->post('komplikasi');
  $neonatalKomplikasi=$this->input->post('neonatalKomplikasi');
  $tambahan=$this->input->post('tambahan');
  $tempat=$this->input->post('tempat');

  $KN1=$this->input->post('KN1');
  $KNLengkap=$this->input->post('KNLengkap');
  $bayiParipurna=$this->input->post('bayiParipurna');
  $mtbs=$this->input->post('mtbs');
  $pelayanan="";

  $query=$this->db->query("SELECT * FROM tb_bayi  WHERE idBayi=$idRegister");
  $hasil=$query->result();
  foreach ($hasil as $row) {
    $beratBadanTerakhir=$row->beratBadanTerakhir;
    $imunisasiHB=$row->imunisasiHB;
    $imunisasiCampak=$row->imunisasiCampak;
    $imunisasiPolio=$row->imunisasiPolio;
    $imunisasiBCG=$row->imunisasiBCG;
  }
  if($beratBadanTerakhir==0){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." gram (Bulan lalu tidak ditimbang), ";
  }else if($beratBadan>$beratBadanTerakhir){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." gram (Naik), ";
  }else if($beratBadan==$beratBadanTerakhir){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." gram (Tetap), ";
  }else if($beratBadan<$beratBadanTerakhir){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." gram (Turun), ";
  }
  if($pelayanan2!=""){
    $pelayanan=$pelayanan.$pelayanan2.", ";
  }
  if($pelayanan3!=""){
    $pelayanan=$pelayanan.$pelayanan3.", ";
  }
  if($pelayanan4!=""){
    $pelayanan=$pelayanan.$pelayanan4.", ";
  }
  if($pelayanan6!=""){
    $pelayanan=$pelayanan.$pelayanan6.", ";
  }
  if($pelayanan7!=""){
    $pelayanan=$pelayanan.$pelayanan7.", ";
  }
  if($mtbs!=""){
    $pelayanan=$pelayanan.$mtbs.", ";
  }
  if($kunjunganNeonatal!=""){
    $pelayanan=$pelayanan.$kunjunganNeonatal." ,".$komplikasi.", ";
    $isi=$komplikasi." pada ".date('d-m-Y')." di ".$tempat;
    if ($kunjunganNeonatal=="Kunjungan neonatal pertama") {
      $data = array(
      'kunjunganNeonatal1' => $isi
      );
    } else if ($kunjunganNeonatal=="Kunjungan neonatal kedua") {
      $data = array(
      'kunjunganNeonatal2' => $isi
      );
    }else{
      $data = array(
      'kunjunganNeonatal3' => $isi
      );
    }
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }

  if($neonatalKomplikasi=="Ditangani"){
    $pelayanan=$pelayanan."Komplikasi neonatal ".$neonatalKomplikasi.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'neonatalKomplikasi' => $bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($vitaminA!=""){
    $pelayanan=$pelayanan.$vitaminA.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'vitaminA' => $bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($imunisasiHB!=""){
    $pelayanan=$pelayanan.$imunisasiHB.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'imunisasiHB' => $imunisasiHB.", ".$bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($imunisasiBCG!=""){
    $pelayanan=$pelayanan.$imunisasiBCG.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'imunisasiBCG' => $imunisasiBCG.", ".$bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($imunisasiPolio!=""){
    $pelayanan=$pelayanan.$imunisasiPolio.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'imunisasiPolio' => $imunisasiPolio.", ".$bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($imunisasiCampak!=""){
    $pelayanan=$pelayanan.$imunisasiCampak.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'imunisasiCampak' => $imunisasiCampak.", ".$bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($KN1!=""){
    $pelayanan=$pelayanan.$KN1.", ";

    $bulan=date('d-m-Y');
    $data = array(
      'KN1' => $bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data); 
  }
  if($KNLengkap!=""){
    $pelayanan=$pelayanan.$KNLengkap.", ";

    $bulan=date('d-m-Y');
    $data = array(
      'KNLengkap' => $bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data);
  }
  if($bayiParipurna!=""){
    $pelayanan=$pelayanan.$bayiParipurna.", ";

    $bulan=date('d-m-Y');
    $data = array(
      'bayiParipurna' => $bulan
      );
    $this->db->where('idBayi', $idRegister);
    $this->db->update('tb_bayi', $data);
  }

  if($tambahan!=""){
    $pelayanan=$pelayanan.$tambahan.", ";
  }

  $tanggal=date('d-m-Y');
  $pelayanan=$pelayanan."pelayanan diberikan di ".$tempat.", pada ".$tanggal.".";
  $bulan=date('m')+0;
  $tahun=date('y');

  if($tahun==17){
    $bulan=$bulan+12;
  }

  $bulan="bulan".$bulan;

  $data = array(
    'beratBadanTerakhir' => $beratBadan,
    $bulan => $pelayanan
    );
  $this->db->where('idBayi', $idRegister);
  $this->db->update('tb_bayi', $data); 

  ?> <script language="JavaScript">alert('Pelayanan berhasil ditambahkan!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/bayi'</script>
  <?php
  
}
function editPelayanan($desa,$idRegister){
  $bulan1=$this->input->post('bulan1');
  $bulan2=$this->input->post('bulan2');
  $bulan3=$this->input->post('bulan3');
  $bulan4=$this->input->post('bulan4');
  $bulan5=$this->input->post('bulan5');
  $bulan6=$this->input->post('bulan6');
  $bulan7=$this->input->post('bulan7');
  $bulan8=$this->input->post('bulan8');
  $bulan9=$this->input->post('bulan9');
  $bulan10=$this->input->post('bulan10');
  $bulan11=$this->input->post('bulan11');
  $bulan12=$this->input->post('bulan12');
  $bulan13=$this->input->post('bulan13');
  $bulan14=$this->input->post('bulan14');
  $bulan15=$this->input->post('bulan15');
  $bulan16=$this->input->post('bulan16');
  $bulan17=$this->input->post('bulan17');
  $bulan18=$this->input->post('bulan18');
  $bulan19=$this->input->post('bulan19');
  $bulan20=$this->input->post('bulan20');
  $bulan21=$this->input->post('bulan21');
  $bulan22=$this->input->post('bulan22');
  $bulan23=$this->input->post('bulan23');
  $bulan24=$this->input->post('bulan24');

  $data = array(
    'bulan1' => $bulan1,
    'bulan2' => $bulan2,
    'bulan3' => $bulan3,
    'bulan4' => $bulan4,
    'bulan5' => $bulan5,
    'bulan6' => $bulan6,
    'bulan7' => $bulan7,
    'bulan8' => $bulan8,
    'bulan9' => $bulan9,
    'bulan10' => $bulan10,
    'bulan11' => $bulan11,
    'bulan12' => $bulan12,
    'bulan13' => $bulan13,
    'bulan14' => $bulan14,
    'bulan15' => $bulan15,
    'bulan16' => $bulan16,
    'bulan17' => $bulan17,
    'bulan18' => $bulan18,
    'bulan19' => $bulan19,
    'bulan20' => $bulan20,
    'bulan21' => $bulan21,
    'bulan22' => $bulan22,
    'bulan23' => $bulan23,
    'bulan24' => $bulan24
    );
  $this->db->where('idBayi', $idRegister);
  $this->db->update('tb_bayi', $data);

  ?> <script language="JavaScript">alert('Update pelayanan berhasil!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/bayi'</script>
  <?php
}
function deletePelayanan($desa,$idRegister){
  $bulan1="";
  $bulan2="";
  $bulan3="";
  $bulan4="";
  $bulan5="";
  $bulan6="";
  $bulan7="";
  $bulan8="";
  $bulan9="";
  $bulan10="";
  $bulan11="";
  $bulan12="";
  $bulan13="";
  $bulan14="";
  $bulan15="";
  $bulan16="";
  $bulan17="";
  $bulan18="";
  $bulan19="";
  $bulan20="";
  $bulan21="";
  $bulan22="";
  $bulan23="";
  $bulan24="";

  $data = array(
    'bulan1' => $bulan1,
    'bulan2' => $bulan2,
    'bulan3' => $bulan3,
    'bulan4' => $bulan4,
    'bulan5' => $bulan5,
    'bulan6' => $bulan6,
    'bulan7' => $bulan7,
    'bulan8' => $bulan8,
    'bulan9' => $bulan9,
    'bulan10' => $bulan10,
    'bulan11' => $bulan11,
    'bulan12' => $bulan12,
    'bulan13' => $bulan13,
    'bulan14' => $bulan14,
    'bulan15' => $bulan15,
    'bulan16' => $bulan16,
    'bulan17' => $bulan17,
    'bulan18' => $bulan18,
    'bulan19' => $bulan19,
    'bulan20' => $bulan20,
    'bulan21' => $bulan21,
    'bulan22' => $bulan22,
    'bulan23' => $bulan23,
    'bulan24' => $bulan24
    );
  $this->db->where('idBayi', $idRegister);
  $this->db->update('tb_bayi', $data);

  ?> <script language="JavaScript">alert('Hapus pelayanan berhasil!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/bayi'</script>
  <?php
}
function viewRekapan(){}
function printRekapan(){}

}

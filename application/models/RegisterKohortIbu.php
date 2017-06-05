<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegisterKohortIbu extends RegisterKohort {

  var $namaIbu;
  var $namaAyah;
  var $umurIbu;
  var $umurKehamilan;
  var $hamilKe;
  var $beratBadan;
  var $dapatBukuKia;
  var $tinggiBadan;
  var $imt;
  var $golonganDarah;
  var $tensi;
  var $pendeteksiFaktorResiko;
  var $skorResiko;
  var $pemberianImunisasi;
  var $statusImunisasi;
  var $jarakKehamilan;

  function viewRegister($desa){
    $query=$this->db->query("SELECT * FROM tb_ibu where desa='$desa'");
    return $query->result();
  }
  function addRegister($desa){
   // echo "Menambahkan Register Ibu di Desa ".$desa;
   $namaIbu=$this->input->post('namaIbu');
   $namaAyah=$this->input->post('namaAyah');
   $alamat=$this->input->post('alamat');
   $umurIbu=$this->input->post('umurIbu');
   $umurKehamilan=$this->input->post('umurKehamilan');
   $hamilKe=$this->input->post('hamilKe');
   $beratBadan=$this->input->post('beratBadan');
   $dapatBukuKia=$this->input->post('dapatBukuKia');
   $tinggiBadan=$this->input->post('tinggiBadan');
   $imt=$beratBadan/(($tinggiBadan/100)*($tinggiBadan/100));
   $imt= floor($imt);
   $golonganDarah=$this->input->post('golonganDarah');
   $tensi=$this->input->post('tensi');
   $pendeteksiFaktorResiko=$this->input->post('pendeteksiFaktorResiko');
   $skorResiko=$this->input->post('skorResiko');
   $pemberianImunisasi=$this->input->post('pemberianImunisasi');
   $statusImunisasi=$this->input->post('statusImunisasi');
   $jarakKehamilan=$this->input->post('jarakKehamilan');
   $keterangan=$this->input->post('keterangan');

   $hamil=floor($umurKehamilan/4);
   // echo $hamil;
   $perkiraan=floor((36-$hamil)/4)+date('m');
   $perkiraan="bulan".$perkiraan;
   // echo $perkiraan;

   if ($pendeteksiFaktorResiko=="Masyarakat") {
     $bulan=date('d-m-Y');
     $data = array(
      'deteksiResti' => $bulan
      );
     $this->db->where('idRegister', $idRegister);
     $this->db->update('tb_ibu', $data); 
   }
   if ($pemberianImunisasi=="Diberi imunisasi TT") {
     $tanggal=date('d-m-Y');
     $pemberianImunisasi=$pemberianImunisasi." pada ".$tanggal;
   }

   $data = array(
    'namaIbu' => $namaIbu,
    'namaAyah' => $namaAyah,
    'alamat' => $alamat,
    'desa' => $desa,
    'umurIbu' => $umurIbu,
    'umurKehamilan' => $umurKehamilan,
    'hamilKe' => $hamilKe,
    'beratBadan' => $beratBadan,
    'tinggiBadan' => $tinggiBadan,
    'imt' => $imt,
    'golonganDarah' => $golonganDarah,
    'tensi' => $tensi,
    'pendeteksiFaktorResiko' => $pendeteksiFaktorResiko,
    'skorResiko' => $skorResiko,
    'pemberianImunisasi' => $pemberianImunisasi,
    'statusImunisasi' => $statusImunisasi,
    'skorResiko' => $skorResiko,
    'jarakKehamilan' => $jarakKehamilan,
    'dapatBukuKia' => $dapatBukuKia,
    'keterangan' => $keterangan,
    $perkiraan => "Perkiraan kelahiran"
    );
   $this->db->insert('tb_ibu', $data);
 }

 function editRegister($desa,$idRegister){
   $namaIbu=$this->input->post('namaIbu');
   $namaAyah=$this->input->post('namaAyah');
   $alamat=$this->input->post('alamat');
   $umurIbu=$this->input->post('umurIbu');
   $umurKehamilan=$this->input->post('umurKehamilan');
   $hamilKe=$this->input->post('hamilKe');
   $beratBadan=$this->input->post('beratBadan');
   $tinggiBadan=$this->input->post('tinggiBadan');
   $imt=$beratBadan/(($tinggiBadan/100)*($tinggiBadan/100));
   $imt= floor($imt);
   $golonganDarah=$this->input->post('golonganDarah');
   $tensi=$this->input->post('tensi');
   $pendeteksiFaktorResiko=$this->input->post('pendeteksiFaktorResiko');
   $skorResiko=$this->input->post('skorResiko');
   $jarakKehamilan=$this->input->post('jarakKehamilan');
   $statusImunisasi=$this->input->post('statusImunisasi');
   $pemberianImunisasi=$this->input->post('pemberianImunisasi');
   $dapatBukuKia=$this->input->post('dapatBukuKia');
   $penolongPersalinan=$this->input->post('penolongPersalinan');
   $waktuPersalinan=$this->input->post('waktuPersalinan');
   $kelahiran=$this->input->post('kelahiran');
   $nifas1=$this->input->post('nifas1');
   $nifas2=$this->input->post('nifas2');
   $nifas3=$this->input->post('nifas3');
   $keterangan=$this->input->post('keterangan');

   if ($pendeteksiFaktorResiko=="Masyarakat") {
     $bulan=date('d-m-Y');
     $data = array(
      'deteksiResti' => $bulan
      );
     $this->db->where('idRegister', $idRegister);
     $this->db->update('tb_ibu', $data); 
   }
   $data = array(
    'namaIbu' => $namaIbu,
    'namaAyah' => $namaAyah,
    'alamat' => $alamat,
    'desa' => $desa,
    'umurIbu' => $umurIbu,
    'umurKehamilan' => $umurKehamilan,
    'hamilKe' => $hamilKe,
    'beratBadan' => $beratBadan,
    'tinggiBadan' => $tinggiBadan,
    'imt' => $imt,
    'golonganDarah' => $golonganDarah,
    'tensi' => $tensi,
    'pendeteksiFaktorResiko' => $pendeteksiFaktorResiko,
    'skorResiko' => $skorResiko,
    'jarakKehamilan' => $jarakKehamilan,
    'statusImunisasi' => $statusImunisasi,
    'pemberianImunisasi' => $pemberianImunisasi,
    'dapatBukuKia' => $dapatBukuKia,
    'penolongPersalinan' => $penolongPersalinan,
    'waktuPersalinan' => $waktuPersalinan,
    'kelahiran' => $kelahiran,
    'nifas1' => $nifas1,
    'nifas2' => $nifas2,
    'nifas3' => $nifas3,
    'keterangan' => $keterangan
    );
   $this->db->where('idRegister', $idRegister);
   $this->db->update('tb_ibu', $data); 
 }
 function deleteRegister($desa,$idRegister){
   $this->db->where('idRegister', $idRegister);
   $this->db->delete('tb_ibu'); 
 }

 function addPelayanan($desa,$idRegister){
  $pelayanan1=$this->input->post('pelayanan1');
  $pelayanan2=$this->input->post('pelayanan2');
  $pelayanan3=$this->input->post('pelayanan3');
  $pelayanan4=$this->input->post('pelayanan4');
  $pelayanan5=$this->input->post('pelayanan5');
  $pelayanan6=$this->input->post('pelayanan6');
  $pelayanan7=$this->input->post('pelayanan7');
  $pelayanan8=$this->input->post('pelayanan8');
  $pelayanan9=$this->input->post('pelayanan9');
  $pelayanan10=$this->input->post('pelayanan10');
  $pelayanan11=$this->input->post('pelayanan11');
  $pelayanan12=$this->input->post('pelayanan12');
  $pelayanan13=$this->input->post('pelayanan13');
  $pelayanan14=$this->input->post('pelayanan14');
  $tambahan=$this->input->post('tambahan');
  $K1=$this->input->post('K1');
  $K4=$this->input->post('K4');
  $restiKom=$this->input->post('restiKom');
  $komKeb=$this->input->post('komKeb');
  $persalinanNakes=$this->input->post('persalinanNakes');
  $persalinanFaskes=$this->input->post('persalinanFaskes');
  $nifas1=$this->input->post('nifas1');
  $nifas2=$this->input->post('nifas2');
  $nifas3=$this->input->post('nifas3');
  $tempat=$this->input->post('tempat');
  $pelayanan="";
  if($pelayanan1!=""){
    $pelayanan=$pelayanan.$pelayanan1.", ";
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
  if($pelayanan5!=""){
    $pelayanan=$pelayanan.$pelayanan5.", ";
  }
  if($pelayanan6!=""){
    $pelayanan=$pelayanan.$pelayanan6.", ";
  }
  if($pelayanan7!=""){
    $pelayanan=$pelayanan.$pelayanan7.", ";
  }
  if($pelayanan8!=""){
    $pelayanan=$pelayanan.$pelayanan8.", ";
  }
  if($pelayanan9!=""){
    $pelayanan=$pelayanan.$pelayanan9.", ";
  }
  if($pelayanan10!=""){
    $pelayanan=$pelayanan.$pelayanan10.", ";
  }
  if($pelayanan11!=""){
    $pelayanan=$pelayanan.$pelayanan11.", ";
  }
  if($pelayanan12!=""){
    $pelayanan=$pelayanan.$pelayanan12.", ";
  }
  if($pelayanan13!=""){
    $pelayanan=$pelayanan.$pelayanan13.", ";
  }
  if($pelayanan14!=""){
    $pelayanan=$pelayanan.$pelayanan14.",";
  }
  if($tambahan!=""){
    $pelayanan=$pelayanan.$tambahan.",";
  }
  // echo $pelayanan;

  if($K1!=""){
    $pelayanan=$pelayanan.$K1.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'K1' => $bulan
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }

  if($K4!=""){
    $pelayanan=$pelayanan.$K4.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'K4' => $bulan
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }
  if($nifas1!=""){
    $pelayanan=$pelayanan.$nifas1.", ";
    $tanggal=date('d-m-Y');
    $data = array(
      'nifas1' => $tanggal
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }
  if($nifas2!=""){
    $tanggal=date('d-m-Y');
    $pelayanan=$pelayanan.$nifas2.", ";
    $data = array(
      'nifas2' => $tanggal
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }
  if($nifas3!=""){
    $tanggal=date('d-m-Y');
    $pelayanan=$pelayanan.$nifas3.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'nifas3' => $tanggal,
      'pelayananNifas'=>$bulan
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }
  
  if($restiKom!=""){
    $pelayanan=$pelayanan.$restiKom.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'restiKom' => $bulan
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }
  if($komKeb!=""){
    $pelayanan=$pelayanan.$komKeb.", ";
    $bulan=date('d-m-Y');
    $data = array(
      'komKeb' => $bulan
      );
    $this->db->where('idRegister', $idRegister);
    $this->db->update('tb_ibu', $data); 
  }
  if($persalinanNakes!=""){
    $pelayanan=$pelayanan.$persalinanNakes.", ";
    $tanggal=date('d-m-Y');
    if ($persalinanNakes!="Tidak") {
      $penolong="Tenaga kesehatan";
      $bulan=date('d-m-Y');
      $data = array(
        'persalinanNakes' => $bulan,
        'penolongPersalinan' => $penolong,
        'waktuPersalinan' => $tanggal
        );
      $this->db->where('idRegister', $idRegister);
      $this->db->update('tb_ibu', $data); 
    }else{
      $penolong="Bukan tenaga kesehatan";
      $data = array(
        'waktuPersalinan' => $tanggal,
        'penolongPersalinan' => $penolong
        );
      $this->db->where('idRegister', $idRegister);
      $this->db->update('tb_ibu', $data); 
    }
  }
  if($persalinanFaskes!=""){
    $pelayanan=$pelayanan.$persalinanFaskes.", ";
    if ($persalinanFaskes!="Tidak") {
      $bulan=date('d-m-Y');
      $data = array(
        'persalinanFaskes' => $bulan
        );
      $this->db->where('idRegister', $idRegister);
      $this->db->update('tb_ibu', $data); 
    }
  }

  $tanggal=date('d M Y');
  $pelayanan=$pelayanan."pelayanan diberikan di ".$tempat.", pada ".$tanggal.".";
  $bulan=date('m')+0;
  $tahun=date('y');

  if($tahun==17){
    $bulan=$bulan+12;
  }

  $bulan="bulan".$bulan;

  $data = array(
    $bulan => $pelayanan
    );
  $this->db->where('idRegister', $idRegister);
  $this->db->update('tb_ibu', $data); 

  ?> <script language="JavaScript">alert('Pelayanan berhasil ditambahkan!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/ibu'</script>
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
  $this->db->where('idRegister', $idRegister);
  $this->db->update('tb_ibu', $data);

  ?> <script language="JavaScript">alert('Update pelayanan berhasil!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/ibu'</script>
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
  $this->db->where('idRegister', $idRegister);
  $this->db->update('tb_ibu', $data);

  ?> <script language="JavaScript">alert('Hapus pelayanan berhasil!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/ibu'</script>
  <?php
}

}

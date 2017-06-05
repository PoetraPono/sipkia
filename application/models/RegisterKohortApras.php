<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegisterKohortApras extends RegisterKohort {

  var $namaApras;
  var $jenisKelamin;
  var $umur;
  var $anakKe;

  function viewRegister($desa){
    $query=$this->db->query("SELECT * FROM tb_ibu,tb_apras  WHERE tb_apras.idIbu like tb_ibu.idRegister AND tb_ibu.desa='$desa'");
    return $query->result();
  }
  function addRegister($desa){
   // echo "Menambahkan Register bayi di Desa ".$desa;
   $idIbu=$this->input->post('idIbu');
   $namaApras=$this->input->post('namaApras');
   $jenisKelamin=$this->input->post('jenisKelamin');
   $umur=$this->input->post('umur');
   $anakKe=$this->input->post('anakKe');
   $beratBadan=$this->input->post('beratBadan');
   $keterangan=$this->input->post('keterangan');

   $data = array(
    'idIbu' => $idIbu,
    'namaApras' => $namaApras,
    'jenisKelamin' => $jenisKelamin,
    'umur' => $umur,
    'anakKe' => $anakKe,
	'beratBadanTerakhir' => $beratBadan,
    'keteranganApras' => $keterangan
    );
   $this->db->insert('tb_apras', $data);
 }

 function editRegister($desa,$idRegister){
   $namaApras=$this->input->post('namaApras');
   $jenisKelamin=$this->input->post('jenisKelamin');
   $umur=$this->input->post('umur');
   $anakKe=$this->input->post('anakKe');
   $keterangan=$this->input->post('keterangan');
   echo $keterangan;

   $data = array(
    'namaApras' => $namaApras,
    'jenisKelamin' => $jenisKelamin,
    'umur' => $umur,
    'anakKe' => $anakKe,
    'keteranganApras' => $keterangan
    );
   // echo $keterangan;
   $this->db->where('idApras', $idRegister);
   $this->db->update('tb_apras', $data); 
 }
 function deleteRegister($desa,$idRegister){
   $this->db->where('idApras', $idRegister);
   $this->db->delete('tb_apras'); 
 }

 function addPelayanan($desa,$idRegister){
  

  $beratBadan=$this->input->post('beratBadan');
  $tempat=$this->input->post('tempat');
  $ddtk=$this->input->post('ddtk');
  $deteksiPertama=$this->input->post('deteksiPertama');
  $deteksiParipurna=$this->input->post('deteksiParipurna');
  $tambahan=$this->input->post('tambahan');
  $pelayanan="";

  $query=$this->db->query("SELECT * FROM tb_apras  WHERE idApras=$idRegister");
  $hasil=$query->result();
  foreach ($hasil as $row) {
    $beratBadanTerakhir=$row->beratBadanTerakhir;
  }
  if($beratBadanTerakhir==0){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." Kg (Bulan lalu tidak ditimbang), ";
  }else if($beratBadan>$beratBadanTerakhir){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." Kg (Naik), ";
  }else if($beratBadan==$beratBadanTerakhir){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." Kg (Tetap), ";
  }else if($beratBadan<$beratBadanTerakhir){
    $pelayanan=$pelayanan."Berat Badan ".$beratBadan." Kg (Turun), ";
  }
  if($ddtk!=""){
    $pelayanan=$pelayanan.$ddtk.", ";
  }
  if($deteksiPertama!=""){
    $pelayanan=$pelayanan.$deteksiPertama.", ";
  }
  if($deteksiParipurna!=""){
    $pelayanan=$pelayanan.$deteksiParipurna.", ";

    $bulan=date('d-m-Y');
    $data = array(
      'aprasParipurna' => $bulan
      );
    $this->db->where('idApras', $idRegister);
    $this->db->update('tb_apras', $data); 
  }
  
  if($tambahan!=""){
    $pelayanan=$pelayanan.$tambahan.", ";
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
  $this->db->where('idApras', $idRegister);
  $this->db->update('tb_apras', $data); 

  ?> <script language="JavaScript">alert('Pelayanan berhasil ditambahkan!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/apras'</script>
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
  $this->db->where('idApras', $idRegister);
  $this->db->update('tb_apras', $data);

  ?> <script language="JavaScript">alert('Update pelayanan berhasil!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/apras'</script>
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
  $this->db->where('idApras', $idRegister);
  $this->db->update('tb_apras', $data);

  ?> <script language="JavaScript">alert('Hapus pelayanan berhasil!');
  document.location='<?php echo base_url(); ?>C_Bidan/lihatRegister/<?php echo $desa ?>/apras'</script>
  <?php
}
function viewRekapan(){}
function printRekapan(){}

}

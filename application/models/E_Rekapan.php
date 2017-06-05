<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Rekapan extends CI_Model {
  function viewRekapanKecamatan($tahun,$bulan){
    $query=$this->db->query("SELECT * FROM tb_rekapan where bulan='$bulan' and tahun='$tahun'");
    return $query->result();
  }
  
  function viewRekapanDesa($desa,$tahun){
    $query=$this->db->query("SELECT * FROM tb_rekapan where desa='$desa' and tahun='$tahun' order by bulan asc");
    return $query->result();
  }

  function viewPemetaanKecamatan($tahun,$bulan){
    $query=$this->db->query("SELECT * FROM tb_pemetaan where bulan='$bulan' and tahun='$tahun'");
    return $query->result();
  }

  function viewPemetaanDesa($desa,$tahun){
    $query=$this->db->query("SELECT * FROM tb_pemetaan where desa='$desa' and tahun='$tahun'");
    return $query->result();
  }

  function newRekapan($desa,$tahun){
    $cekTabelRekapan=$this->db->query("SELECT * FROM tb_rekapan where desa='$desa' and tahun='$tahun'");
    if($cekTabelRekapan->num_rows() == 0 && $tahun>=2016) {
      for ($bulan=1; $bulan <= 12; $bulan++) { 
        $query=$this->db->query("INSERT INTO tb_rekapan VALUES ('','$bulan','$tahun','$desa','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0' ,'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'); 
");
      }
    }

    $query=$this->db->query("SELECT * FROM tb_ibu where desa='$desa'");
    $ibu=$query->result();

    $K1['1']=0;$K1['2']=0;$K1['3']=0;$K1['4']=0;$K1['5']=0;$K1['6']=0;$K1['7']=0;$K1['8']=0;$K1['9']=0;$K1['10']=0;$K1['11']=0;$K1['12']=0;
    $K4['1']=0;$K4['2']=0;$K4['3']=0;$K4['4']=0;$K4['5']=0;$K4['6']=0;$K4['7']=0;$K4['8']=0;$K4['9']=0;$K4['10']=0;$K4['11']=0;$K4['12']=0;
    $deteksiResti['1']=0;$deteksiResti['2']=0;$deteksiResti['3']=0;$deteksiResti['4']=0;$deteksiResti['5']=0;$deteksiResti['6']=0;$deteksiResti['7']=0;$deteksiResti['8']=0;$deteksiResti['9']=0;$deteksiResti['10']=0;$deteksiResti['11']=0;$deteksiResti['12']=0;
    $restiKom['1']=0;$restiKom['2']=0;$restiKom['3']=0;$restiKom['4']=0;$restiKom['5']=0;$restiKom['6']=0;$restiKom['7']=0;$restiKom['8']=0;$restiKom['9']=0;$restiKom['10']=0;$restiKom['11']=0;$restiKom['12']=0;
    $komKeb['1']=0;$komKeb['2']=0;$komKeb['3']=0;$komKeb['4']=0;$komKeb['5']=0;$komKeb['6']=0;$komKeb['7']=0;$komKeb['8']=0;$komKeb['9']=0;$komKeb['10']=0;$komKeb['11']=0;$komKeb['12']=0;
    $persalinanNakes['1']=0;$persalinanNakes['2']=0;$persalinanNakes['3']=0;$persalinanNakes['4']=0;$persalinanNakes['5']=0;$persalinanNakes['6']=0;$persalinanNakes['7']=0;$persalinanNakes['8']=0;$persalinanNakes['9']=0;$persalinanNakes['10']=0;$persalinanNakes['11']=0;$persalinanNakes['12']=0;
    $persalinanFaskes['1']=0;$persalinanFaskes['2']=0;$persalinanFaskes['3']=0;$persalinanFaskes['4']=0;$persalinanFaskes['5']=0;$persalinanFaskes['6']=0;$persalinanFaskes['7']=0;$persalinanFaskes['8']=0;$persalinanFaskes['9']=0;$persalinanFaskes['10']=0;$persalinanFaskes['11']=0;$persalinanFaskes['12']=0;
    $pelayananNifas['1']=0;$pelayananNifas['2']=0;$pelayananNifas['3']=0;$pelayananNifas['4']=0;$pelayananNifas['5']=0;$pelayananNifas['6']=0;$pelayananNifas['7']=0;$pelayananNifas['8']=0;$pelayananNifas['9']=0;$pelayananNifas['10']=0;$pelayananNifas['11']=0;$pelayananNifas['12']=0;
    
    
    foreach ($ibu as $row) {
      if ($row->K1!="") {
        $data=$row->K1;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $K1['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $K1['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $K1['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $K1['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $K1['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $K1['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $K1['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $K1['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $K1['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $K1['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $K1['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $K1['12']++;
        }
      }
      if ($row->K4!="") {
        $data=$row->K4;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $K4['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $K4['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $K4['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $K4['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $K4['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $K4['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $K4['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $K4['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $K4['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $K4['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $K4['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $K4['12']++;
        }
      }

      if ($row->deteksiResti!="") {
        $data=$row->deteksiResti;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $deteksiResti['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $deteksiResti['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $deteksiResti['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $deteksiResti['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $deteksiResti['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $deteksiResti['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $deteksiResti['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $deteksiResti['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $deteksiResti['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $deteksiResti['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $deteksiResti['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $deteksiResti['12']++;
        }
      }

      if ($row->restiKom!="") {
        $data=$row->restiKom;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $restiKom['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $restiKom['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $restiKom['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $restiKom['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $restiKom['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $restiKom['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $restiKom['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $restiKom['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $restiKom['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $restiKom['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $restiKom['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $restiKom['12']++;
        }
      }

      if ($row->komKeb!="") {
        $data=$row->komKeb;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $komKeb['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $komKeb['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $komKeb['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $komKeb['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $komKeb['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $komKeb['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $komKeb['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $komKeb['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $komKeb['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $komKeb['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $komKeb['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $komKeb['12']++;
        }
      }
      if ($row->persalinanNakes!="") {
        $data=$row->persalinanNakes;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $persalinanNakes['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $persalinanNakes['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $persalinanNakes['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $persalinanNakes['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $persalinanNakes['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $persalinanNakes['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $persalinanNakes['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $persalinanNakes['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $persalinanNakes['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $persalinanNakes['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $persalinanNakes['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $persalinanNakes['12']++;
        }
      }
      if ($row->persalinanFaskes!="") {
        $data=$row->persalinanFaskes;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $persalinanFaskes['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $persalinanFaskes['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $persalinanFaskes['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $persalinanFaskes['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $persalinanFaskes['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $persalinanFaskes['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $persalinanFaskes['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $persalinanFaskes['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $persalinanFaskes['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $persalinanFaskes['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $persalinanFaskes['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $persalinanFaskes['12']++;
        }
      }
      if ($row->pelayananNifas!="") {
        $data=$row->pelayananNifas;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $pelayananNifas['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $pelayananNifas['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $pelayananNifas['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $pelayananNifas['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $pelayananNifas['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $pelayananNifas['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $pelayananNifas['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $pelayananNifas['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $pelayananNifas['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $pelayananNifas['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $pelayananNifas['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $pelayananNifas['12']++;
        }
      }
    }

    for ($i=1; $i <=12 ; $i++) { 
      $hasil=$this->editCakupan('K1',$K1[$i],$i,$tahun,$desa);
      // $this->editPemetaan('K1',$i,$tahun,$desa,$hasil);
    }for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('K4',$K4[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('deteksiResti',$deteksiResti[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('restiKom',$restiKom[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('komKeb',$komKeb[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('persalinanNakes',$persalinanNakes[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('persalinanFaskes',$persalinanFaskes[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('pelayananNifas',$pelayananNifas[$i],$i,$tahun,$desa);
    }

    $query=$this->db->query("SELECT * FROM tb_bayi b,tb_ibu i where i.idRegister=b.idIbu and i.desa='$desa'");
    $bayi=$query->result();

    $KN1['1']=0;$KN1['2']=0;$KN1['3']=0;$KN1['4']=0;$KN1['5']=0;$KN1['6']=0;$KN1['7']=0;$KN1['8']=0;$KN1['9']=0;$KN1['10']=0;$KN1['11']=0;$KN1['12']=0;
    $KNLengkap['1']=0;$KNLengkap['2']=0;$KNLengkap['3']=0;$KNLengkap['4']=0;$KNLengkap['5']=0;$KNLengkap['6']=0;$KNLengkap['7']=0;$KNLengkap['8']=0;$KNLengkap['9']=0;$KNLengkap['10']=0;$KNLengkap['11']=0;$KNLengkap['12']=0;
    $neonatalKomplikasi['1']=0;$neonatalKomplikasi['2']=0;$neonatalKomplikasi['3']=0;$neonatalKomplikasi['4']=0;$neonatalKomplikasi['5']=0;$neonatalKomplikasi['6']=0;$neonatalKomplikasi['7']=0;$neonatalKomplikasi['8']=0;$neonatalKomplikasi['9']=0;$neonatalKomplikasi['10']=0;$neonatalKomplikasi['11']=0;$neonatalKomplikasi['12']=0;
    $bayiParipurna['1']=0;$bayiParipurna['2']=0;$bayiParipurna['3']=0;$bayiParipurna['4']=0;$bayiParipurna['5']=0;$bayiParipurna['6']=0;$bayiParipurna['7']=0;$bayiParipurna['8']=0;$bayiParipurna['9']=0;$bayiParipurna['10']=0;$bayiParipurna['11']=0;$bayiParipurna['12']=0;
    
    foreach ($bayi as $row) {
      if ($row->KN1!="") {
        $data=$row->KN1;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $KN1['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $KN1['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $KN1['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $KN1['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $KN1['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $KN1['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $KN1['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $KN1['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $KN1['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $KN1['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $KN1['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $KN1['12']++;
        }
      }
      if ($row->KNLengkap!="") {
        $data=$row->KNLengkap;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $KNLengkap['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $KNLengkap['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $KNLengkap['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $KNLengkap['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $KNLengkap['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $KNLengkap['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $KNLengkap['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $KNLengkap['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $KNLengkap['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $KNLengkap['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $KNLengkap['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $KNLengkap['12']++;
        }
      }

      if ($row->neonatalKomplikasi!="") {
        $data=$row->neonatalKomplikasi;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $neonatalKomplikasi['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $neonatalKomplikasi['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $neonatalKomplikasi['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $neonatalKomplikasi['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $neonatalKomplikasi['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $neonatalKomplikasi['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $neonatalKomplikasi['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $neonatalKomplikasi['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $neonatalKomplikasi['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $neonatalKomplikasi['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $neonatalKomplikasi['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $neonatalKomplikasi['12']++;
        }
      }

      if ($row->bayiParipurna!="") {
        $data=$row->bayiParipurna;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $bayiParipurna['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $bayiParipurna['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $bayiParipurna['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $bayiParipurna['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $bayiParipurna['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $bayiParipurna['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $bayiParipurna['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $bayiParipurna['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $bayiParipurna['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $bayiParipurna['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $bayiParipurna['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $bayiParipurna['12']++;
        }
      }
    }

    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('KN1',$KN1[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('KNLengkap',$KNLengkap[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('neonatalKomplikasi',$neonatalKomplikasi[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('bayiParipurna',$bayiParipurna[$i],$i,$tahun,$desa);
    }

    $query=$this->db->query("SELECT * FROM tb_balita b,tb_ibu i where i.idRegister=b.idIbu and i.desa='$desa'");
    $balita=$query->result();

    $balitaParipurna['1']=0;$balitaParipurna['2']=0;$balitaParipurna['3']=0;$balitaParipurna['4']=0;$balitaParipurna['5']=0;$balitaParipurna['6']=0;$balitaParipurna['7']=0;$balitaParipurna['8']=0;$balitaParipurna['9']=0;$balitaParipurna['10']=0;$balitaParipurna['11']=0;$balitaParipurna['12']=0;
    $balitaSakit['1']=0;$balitaSakit['2']=0;$balitaSakit['3']=0;$balitaSakit['4']=0;$balitaSakit['5']=0;$balitaSakit['6']=0;$balitaSakit['7']=0;$balitaSakit['8']=0;$balitaSakit['9']=0;$balitaSakit['10']=0;$balitaSakit['11']=0;$balitaSakit['12']=0;
    
    foreach ($balita as $row) {
      if ($row->balitaParipurna!="") {
        $data=$row->balitaParipurna;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $balitaParipurna['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $balitaParipurna['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $balitaParipurna['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $balitaParipurna['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $balitaParipurna['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $balitaParipurna['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $balitaParipurna['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $balitaParipurna['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $balitaParipurna['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $balitaParipurna['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $balitaParipurna['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $balitaParipurna['12']++;
        }
      }
      if ($row->balitaSakit!="") {
        $data=$row->balitaSakit;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $balitaSakit['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $balitaSakit['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $balitaSakit['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $balitaSakit['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $balitaSakit['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $balitaSakit['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $balitaSakit['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $balitaSakit['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $balitaSakit['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $balitaSakit['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $balitaSakit['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $balitaSakit['12']++;
        }
      }
    }

    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('balitaParipurna',$balitaParipurna[$i],$i,$tahun,$desa);
    }
    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('balitaSakit',$balitaSakit[$i],$i,$tahun,$desa);
    }

    $query=$this->db->query("SELECT * FROM tb_apras b,tb_ibu i where i.idRegister=b.idIbu and i.desa='$desa'");
    $apras=$query->result();

    $aprasParipurna['1']=0;$aprasParipurna['2']=0;$aprasParipurna['3']=0;$aprasParipurna['4']=0;$aprasParipurna['5']=0;$aprasParipurna['6']=0;$aprasParipurna['7']=0;$aprasParipurna['8']=0;$aprasParipurna['9']=0;$aprasParipurna['10']=0;$aprasParipurna['11']=0;$aprasParipurna['12']=0;
    
    foreach ($apras as $row) {
      if ($row->aprasParipurna!="") {
        $data=$row->aprasParipurna;
        list($tanggal, $bulan, $years) = explode("-", $data);
        if (($bulan==1)&&($years==$tahun)) {
          $aprasParipurna['1']++;
        } else if (($bulan==2)&&($years==$tahun)) {
          $aprasParipurna['2']++;
        }else if (($bulan==3)&&($years==$tahun)) {
          $aprasParipurna['3']++;
        }else if (($bulan==4)&&($years==$tahun)) {
          $aprasParipurna['4']++;
        }else if (($bulan==5)&&($years==$tahun)) {
          $aprasParipurna['5']++;
        }else if (($bulan==6)&&($years==$tahun)) {
          $aprasParipurna['6']++;
        }else if (($bulan==7)&&($years==$tahun)) {
          $aprasParipurna['7']++;
        }else if (($bulan==8)&&($years==$tahun)) {
          $aprasParipurna['8']++;
        }else if (($bulan==9)&&($years==$tahun)) {
          $aprasParipurna['9']++;
        }else if (($bulan==10)&&($years==$tahun)) {
          $aprasParipurna['10']++;
        }else if (($bulan==11)&&($years==$tahun)) {
          $aprasParipurna['11']++;
        }else if (($bulan==12)&&($years==$tahun)) {
          $aprasParipurna['12']++;
        }
      }
    }

    for ($i=1; $i <=12 ; $i++) { 
      $this->editCakupan('aprasParipurna',$aprasParipurna[$i],$i,$tahun,$desa);
    }
    
  }
  
  function editCakupan($tipe,$jumlah,$bulan,$tahun,$desa){
    // Kelola Rekapan
    // Ambil pembagi (sasaran)
    $pembagi=0;
    $sasaran=$this->getSasaran($desa);
    foreach ($sasaran as $row ) {
      $sasaran['Bumil']=$row->sasaranBumil;
      $sasaran['BumilRisti']=$row->sasaranBumilRisti;
      $sasaran['Bulin']=$row->sasaranBulin;
      $sasaran['Bayi']=$row->sasaranBayi;
      $sasaran['NeoRisti']=$row->sasaranNeoRisti;
      $sasaran['Balita']=$row->sasaranBalita;
      $sasaran['Apras']=$row->sasaranApras;
    }

    if (($tipe=="K1")||($tipe=="K4")||($tipe=="deteksiResti")||($tipe=="restiKom")) {
      $pembagi=$sasaran['Bumil'];
    } else if($tipe=="komKeb") {
      $pembagi=$sasaran['BumilRisti'];
    }else if(($tipe=="persalinanNakes")||($tipe=="persalinanFaskes")||($tipe=="pelayananNifas")) {
      $pembagi=$sasaran['Bulin'];
    }else if(($tipe=="KN1")||($tipe=="KNLengkap")||($tipe=="bayiParipurna")) {
      $pembagi=$sasaran['Bayi'];
    }else if($tipe=="neonatalKomplikasi") {
      $pembagi=$sasaran['NeoRisti'];
    }else if(($tipe=="balitaParipurna")||($tipe=="balitaSakit")) {
      $pembagi=$sasaran['Balita'];
    }else if($tipe=="aprasParipurna") {
      $pembagi=$sasaran['Apras'];
    }
    
    $jumlahBulanLalu=0;
    $jumlahKomulatifLalu=0;
    $komulatif=$jumlah;
    $bulanLalu=$bulan-1;
    if ($bulanLalu!=0) {
      $ini=$tipe."Ini";
      $kom=$tipe."Kom";
      $query=$this->db->query("SELECT $ini,$kom FROM tb_rekapan where desa='$desa' and bulan='$bulanLalu' and tahun='$tahun'" );
      $lalu=$query->result();
      foreach ($lalu as $row ) {
        $jumlahBulanLalu=$row->$ini;
        $jumlahKomulatifLalu=$row->$kom;
      }
      $komulatif=$jumlah+$jumlahKomulatifLalu;
    }

    $presentase=($komulatif/$pembagi)*100;

    $data = array(
      $tipe."Ini" => $jumlah,
      $tipe."Lalu" => $jumlahBulanLalu,
      $tipe."Kom" => $komulatif,
      $tipe."Presentase" => $presentase
      );
    $this->db->where('bulan', $bulan);
    $this->db->where('tahun', $tahun);
    $this->db->where('desa', $desa);
    $this->db->update('tb_rekapan', $data);

    // $return['ini']=$jumlah;
    // $return['lalu']=$jumlahBulanLalu;
    // $return['kom']=$komulatif;
    // $return['pres']=$presentase;

  }

  function newPemetaan($desa,$tahun){
    $cekTabelPemetaan=$this->db->query("SELECT * FROM tb_pemetaan where desa='$desa' and tahun='$tahun'");
    if($cekTabelPemetaan->num_rows() == 0) {
      for ($bulan=1; $bulan <= 12; $bulan++) { 
        $query=$this->db->query("INSERT INTO `sipkia`.`tb_pemetaan` (`idPemetaan`, `desa`, `bulan`, `tahun`, `K1Lalu`, `K4Lalu`, `deteksiRestiLalu`, `restiKomLalu`, `komKebLalu`, `persalinanNakesLalu`, `persalinanFaskesLalu`, `pelayananNifasLalu`, `KN1Lalu`, `KNLengkapLalu`, `neonatalKomplikasiLalu`, `bayiParipurnaLalu`, `balitaParipurnaLalu`, `aprasParipurnaLalu`, `balitaSakitLalu`, `K1Target`, `K4Target`, `deteksiRestiTarget`, `restiKomTarget`, `komKebTarget`, `persalinanNakesTarget`, `persalinanFaskesTarget`, `pelayananNifasTarget`, `KN1Target`, `KNLengkapTarget`, `neonatalKomplikasiTarget`, `bayiParipurnaTarget`, `balitaParipurnaTarget`, `aprasParipurnaTarget`, `balitaSakitTarget`, `K1Status`, `K4Status`, `deteksiRestiStatus`, `restiKomStatus`, `komKebStatus`, `persalinanNakesStatus`, `persalinanFaskesStatus`, `pelayananNifasStatus`, `KN1Status`, `KNLengkapStatus`, `neonatalKomplikasiStatus`, `bayiParipurnaStatus`, `balitaParipurnaStatus`, `aprasParipurnaStatus`, `balitaSakitStatus`) VALUES (NULL, '$desa', '$bulan', '$tahun', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
      }
    }
    $cekTabelRekapan=$this->db->query("SELECT * FROM tb_rekapan where desa='$desa' and tahun='$tahun'");
    if($cekTabelRekapan->num_rows() == 0 && $tahun>=2016) {
      for ($bulan=1; $bulan <= 12; $bulan++) { 
        $query=$this->db->query("INSERT INTO tb_rekapan VALUES ('','$bulan','$tahun','$desa','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0' ,'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'); 
");
      }
    }
    $query=$this->db->query("SELECT * FROM tb_rekapan where desa='$desa' and tahun='$tahun' order by bulan asc");
    $hasil=$query->result();
    $bulan=1;
    foreach ($hasil as $row) {
      $K1Ini[$bulan]=$row->K1Ini;
      $K1Lalu[$bulan]=$row->K1Lalu;
      $K1Presentase[$bulan]=$row->K1Presentase;
      $K4Ini[$bulan]=$row->K4Ini;
      $K4Lalu[$bulan]=$row->K4Lalu;
      $K4Presentase[$bulan]=$row->K4Presentase;
      $deteksiRestiIni[$bulan]=$row->deteksiRestiIni;
      $deteksiRestiLalu[$bulan]=$row->deteksiRestiLalu;
      $deteksiRestiPresentase[$bulan]=$row->deteksiRestiPresentase;
      $restiKomIni[$bulan]=$row->restiKomIni;
      $restiKomLalu[$bulan]=$row->restiKomLalu;
      $restiKomPresentase[$bulan]=$row->restiKomPresentase;
      $komKebIni[$bulan]=$row->komKebIni;
      $komKebLalu[$bulan]=$row->komKebLalu;
      $komKebPresentase[$bulan]=$row->komKebPresentase;
      $persalinanNakesIni[$bulan]=$row->persalinanNakesIni;
      $persalinanNakesLalu[$bulan]=$row->persalinanNakesLalu;
      $persalinanNakesPresentase[$bulan]=$row->persalinanNakesPresentase;
      $persalinanFaskesIni[$bulan]=$row->persalinanFaskesIni;
      $persalinanFaskesLalu[$bulan]=$row->persalinanFaskesLalu;
      $persalinanFaskesPresentase[$bulan]=$row->persalinanFaskesPresentase;
      $pelayananNifasIni[$bulan]=$row->pelayananNifasIni;
      $pelayananNifasLalu[$bulan]=$row->pelayananNifasLalu;
      $pelayananNifasPresentase[$bulan]=$row->pelayananNifasPresentase;
      $KN1Ini[$bulan]=$row->KN1Ini;
      $KN1Lalu[$bulan]=$row->KN1Lalu;
      $KN1Presentase[$bulan]=$row->KN1Presentase;
      $KNLengkapIni[$bulan]=$row->KNLengkapIni;
      $KNLengkapLalu[$bulan]=$row->KNLengkapLalu;
      $KNLengkapPresentase[$bulan]=$row->KNLengkapPresentase;
      $neonatalKomplikasiIni[$bulan]=$row->neonatalKomplikasiIni;
      $neonatalKomplikasiLalu[$bulan]=$row->neonatalKomplikasiLalu;
      $neonatalKomplikasiPresentase[$bulan]=$row->neonatalKomplikasiPresentase;
      $bayiParipurnaIni[$bulan]=$row->bayiParipurnaIni;
      $bayiParipurnaLalu[$bulan]=$row->bayiParipurnaLalu;
      $bayiParipurnaPresentase[$bulan]=$row->bayiParipurnaPresentase;
      $balitaParipurnaIni[$bulan]=$row->balitaParipurnaIni;
      $balitaParipurnaLalu[$bulan]=$row->balitaParipurnaLalu;
      $balitaParipurnaPresentase[$bulan]=$row->balitaParipurnaPresentase;
      $aprasParipurnaIni[$bulan]=$row->aprasParipurnaIni;
      $aprasParipurnaLalu[$bulan]=$row->aprasParipurnaLalu;
      $aprasParipurnaPresentase[$bulan]=$row->aprasParipurnaPresentase;
      $balitaSakitIni[$bulan]=$row->balitaSakitIni;
      $balitaSakitLalu[$bulan]=$row->balitaSakitLalu;
      $balitaSakitPresentase[$bulan]=$row->balitaSakitPresentase;
      $bulan++;      
    }
    for ($month=1; $month <=12 ; $month++) { 
      $this->editPemetaan('K1',$K1Ini[$month],$K1Lalu[$month],$K1Presentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('K4',$K4Ini[$month],$K4Lalu[$month],$K4Presentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('deteksiResti',$deteksiRestiIni[$month],$deteksiRestiLalu[$month],$deteksiRestiPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('restiKom',$restiKomIni[$month],$restiKomLalu[$month],$restiKomPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('komKeb',$komKebIni[$month],$komKebLalu[$month],$komKebPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('persalinanNakes',$persalinanNakesIni[$month],$persalinanNakesLalu[$month],$persalinanNakesPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('persalinanFaskes',$persalinanFaskesIni[$month],$persalinanFaskesLalu[$month],$persalinanFaskesPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('pelayananNifas',$pelayananNifasIni[$month],$pelayananNifasLalu[$month],$pelayananNifasPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('KN1',$KN1Ini[$month],$KN1Lalu[$month],$KN1Presentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('KNLengkap',$KNLengkapIni[$month],$KNLengkapLalu[$month],$KNLengkapPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('neonatalKomplikasi',$neonatalKomplikasiIni[$month],$neonatalKomplikasiLalu[$month],$neonatalKomplikasiPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('bayiParipurna',$bayiParipurnaIni[$month],$bayiParipurnaLalu[$month],$bayiParipurnaPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('balitaParipurna',$balitaParipurnaIni[$month],$balitaParipurnaLalu[$month],$balitaParipurnaPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('aprasParipurna',$aprasParipurnaIni[$month],$aprasParipurnaLalu[$month],$aprasParipurnaPresentase[$month],$month,$tahun,$desa);
      $this->editPemetaan('balitaSakit',$balitaSakitIni[$month],$balitaSakitLalu[$month],$balitaSakitPresentase[$month],$month,$tahun,$desa);
    }
  }
  function editPemetaan($tipe, $jumlah,$jumlahBulanLalu,$presentase, $bulan,$tahun,$desa){
    // echo "Sekarang = ". $jumlah."<br>";
    // echo "Lalu = ". $jumlahBulanLalu."<br>";
    // echo "Presentase = ". $presentase;
    if ($tahun<=2015) {
      $presentase=$presentase*100;
    }

    if ($bulan==1) {
      $jumlahBulanLalu=0;
    }
    // // Kelola Pemetaan
    $Target="";
    $Lalu="";
    $Status="";
    $target=$this->getTarget();
    foreach ($target as $row) {
      $targetK1=$row->K1;
      $targetK4=$row->K4;
      $targetdeteksiResti=$row->deteksiResti;
      $targetrestiKom=$row->restiKom;
      $targetkomKeb=$row->komKeb;
      $targetpersalinanNakes=$row->persalinanNakes;
      $targetpersalinanFaskes=$row->persalinanFaskes;
      $targetpelayananNifas=$row->pelayananNifas;
      $targetKN1=$row->KN1;
      $targetKNLengkap=$row->KNLengkap;
      $targetneonatalKomplikasi=$row->neonatalKomplikasi;
      $targetbayiParipurna=$row->bayiParipurna;
      $targetbalitaParipurna=$row->balitaParipurna;
      $targetaprasParipurna=$row->aprasParipurna;
      $targetbalitaSakit=$row->balitaSakit;
    }

    if ($tipe=="K1") {
      $targetK1=($targetK1/12)*$bulan;
      // echo "target K1 bulan ".$bulan." = ".$targetK1."<br>";
      if (($presentase>=$targetK1)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetK1)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetK1)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetK1)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
      
    } else if($tipe=="K4"){
      $targetK4=($targetK4/12)*$bulan;
      if (($presentase>=$targetK4)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetK4)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetK4)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetK4)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="deteksiResti"){
      $targetdeteksiResti=($targetdeteksiResti/12)*$bulan;
      if (($presentase>=$targetdeteksiResti)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetdeteksiResti)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetdeteksiResti)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetdeteksiResti)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="restiKom"){
      $targetrestiKom=($targetrestiKom/12)*$bulan;
      if (($presentase>=$targetrestiKom)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetrestiKom)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetrestiKom)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetrestiKom)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="komKeb"){
      $targetkomKeb=($targetkomKeb/12)*$bulan;
      if (($presentase>=$targetkomKeb)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetkomKeb)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetkomKeb)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetkomKeb)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="persalinanNakes"){
      $targetpersalinanNakes=($targetpersalinanNakes/12)*$bulan;
      if (($presentase>=$targetpersalinanNakes)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetpersalinanNakes)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetpersalinanNakes)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetpersalinanNakes)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="persalinanFaskes"){
      $targetpersalinanFaskes=($targetpersalinanFaskes/12)*$bulan;
      if (($presentase>=$targetpersalinanFaskes)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetpersalinanFaskes)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetpersalinanFaskes)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetpersalinanFaskes)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="pelayananNifas"){
      $targetpelayananNifas=($targetpelayananNifas/12)*$bulan;
      if (($presentase>=$targetpelayananNifas)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetpelayananNifas)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetpelayananNifas)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetpelayananNifas)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="KN1"){
      $targetKN1=($targetKN1/12)*$bulan;
      if (($presentase>=$targetKN1)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetKN1)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetKN1)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetKN1)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="KNLengkap"){
      $targetKNLengkap=($targetKNLengkap/12)*$bulan;
      if (($presentase>=$targetKNLengkap)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetKNLengkap)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetKNLengkap)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetKNLengkap)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="neonatalKomplikasi"){
      $targetneonatalKomplikasi=($targetneonatalKomplikasi/12)*$bulan;
      if (($presentase>=$targetneonatalKomplikasi)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetneonatalKomplikasi)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetneonatalKomplikasi)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetneonatalKomplikasi)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="bayiParipurna"){
      $targetbayiParipurna=($targetrestiKom/12)*$bulan;
      if (($presentase>=$targetbayiParipurna)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetbayiParipurna)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetbayiParipurna)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetbayiParipurna)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="balitaParipurna"){
      $targetbalitaParipurna=($targetrestiKom/12)*$bulan;
      if (($presentase>=$targetbalitaParipurna)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetbalitaParipurna)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetbalitaParipurna)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetbalitaParipurna)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="aprasParipurna"){
      $targetaprasParipurna=($targetaprasParipurna/12)*$bulan;
      if (($presentase>=$targetaprasParipurna)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetaprasParipurna)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetaprasParipurna)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetaprasParipurna)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }else if($tipe=="balitaSakit"){
      $targetbalitaSakit=($targetbalitaSakit/12)*$bulan;
      if (($presentase>=$targetbalitaSakit)&&($jumlah>=$jumlahBulanLalu)) {
        $Target="Positif";
        $Lalu="Naik/Tetap";
        $Status="Baik";
      } else if(($presentase>=$targetbalitaSakit)&&($jumlah<$jumlahBulanLalu)){
        $Target="Positif";
        $Lalu="Turun";
        $Status="Kurang";
      }else if(($presentase<$targetbalitaSakit)&&($jumlah>=$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Naik/Tetap";
        $Status="Cukup";
      }else if(($presentase<$targetbalitaSakit)&&($jumlah<$jumlahBulanLalu)){
        $Target="Negatif";
        $Lalu="Turun";
        $Status="Jelek";
      }
    }
    // echo $Lalu;
    // echo "bulan".$bulan."<br>";
    $data2 = array(
      $tipe."Target" => $Target,
      $tipe."Lalu"   => $Lalu,
      $tipe."Status" => $Status
      );
    $this->db->where('bulan', $bulan);
    $this->db->where('tahun', $tahun);
    $this->db->where('desa', $desa);
    $this->db->update('tb_pemetaan', $data2);
  }

  function getSasaran($desa){
    $query=$this->db->query("SELECT * FROM tb_sasaran where desa='$desa'" );
    return $query->result();
  }
  function getTarget(){
    $query=$this->db->query("SELECT * FROM tb_target");
    return $query->result();
  }

}




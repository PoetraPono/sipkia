<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Bidan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    if (($this->session->userdata('sudahlogin') == FALSE)){
      redirect ('C_Login');
    }
  }
  public function index()
  {
    $bidan=$this->session->userdata('desa');
    $tahun=date('Y');
    $link="C_Bidan/lihatRekapan/".$bidan."/".$tahun;
    redirect($link);
  }
  public function lihatRegister($bidan,$jenis)
  {
    if ($bidan=="kidal") {
      $factoryKidal = new BidanDesaKidal();
      $hasil['data']=$factoryKidal->lihatRegister($jenis);
      $hasil['ibu']=$factoryKidal->lihatRegister('ibu');
    }else if ($bidan=="kambingan") {
      $factoryKambingan = new BidanDesaKambingan();
      $hasil['data']=$factoryKambingan->lihatRegister($jenis);
      $hasil['ibu']=$factoryKambingan->lihatRegister('ibu');
    }else if ($bidan=="ngingit") {
      $factoryNgingit = new BidanDesaNgingit();
      $hasil['data']=$factoryNgingit->lihatRegister($jenis);
      $hasil['ibu']=$factoryNgingit->lihatRegister('ibu');
    }else if ($bidan=="pandanajeng") {
      $factoryPandanajeng = new BidanDesaPandanajeng();
      $hasil['data']=$factoryPandanajeng->lihatRegister($jenis);
      $hasil['ibu']=$factoryPandanajeng->lihatRegister($jenis);
    }else if ($bidan=="pulungdowo") {
      $factoryPulungdowo = new BidanDesaPulungdowo();
      $hasil['data']=$factoryPulungdowo->lihatRegister($jenis);
      $hasil['ibu']=$factoryPulungdowo->lihatRegister($jenis);
    }else if ($bidan=="bokor") {
      $factoryBokor = new BidanDesaBokor();
      $hasil['data']=$factoryBokor->lihatRegister($jenis);
      $hasil['ibu']=$factoryBokor->lihatRegister($jenis);
    }else if ($bidan=="slamet") {
      $factorySlamet = new BidanDesaSlamet();
      $hasil['data']=$factorySlamet->lihatRegister($jenis);
      $hasil['ibu']=$factorySlamet->lihatRegister($jenis);
    }else if ($bidan=="tumpang") {
      $factoryTumpang = new BidanDesaTumpang();
      $hasil['data']=$factoryTumpang->lihatRegister($jenis);
      $hasil['ibu']=$factoryTumpang->lihatRegister($jenis);
    }else if ($bidan=="dampul") {
      $factoryDampul = new BidanDesaDampul();
      $hasil['data']=$factoryDampul->lihatRegister($jenis);
      $hasil['ibu']=$factoryDampul->lihatRegister($jenis);
    }else if ($bidan=="duwet") {
      $factoryDuwet = new BidanDesaDuwet();
      $hasil['data']=$factoryDuwet->lihatRegister($jenis);
      $hasil['ibu']=$factoryDuwet->lihatRegister($jenis);
    }else if ($bidan=="benjor") {
      $factoryBenjor = new BidanDesaBenjor();
      $hasil['data']=$factoryBenjor->lihatRegister($jenis);
      $hasil['ibu']=$factoryBenjor->lihatRegister($jenis);
    }else if ($bidan=="malangsuko") {
      $factoryMalangsuko = new BidanDesaMalangsuko();
      $hasil['data']=$factoryMalangsuko->lihatRegister($jenis);
      $hasil['ibu']=$factoryMalangsuko->lihatRegister($jenis);
    }else if ($bidan=="wringinsongo") {
      $factoryWringinsongo = new BidanDesaWringinsongo();
      $hasil['data']=$factoryWringinsongo->lihatRegister($jenis);
      $hasil['ibu']=$factoryWringinsongo->lihatRegister($jenis);
    }else if ($bidan=="jeru") {
      $factoryJeru = new BidanDesaJeru();
      $hasil['data']=$factoryJeru->lihatRegister($jenis);
      $hasil['ibu']=$factoryJeru->lihatRegister($jenis);
    }else if ($bidan=="tulusbesar") {
      $factoryTulusbesar = new BidanDesaTulusBesar();
      $hasil['data']=$factoryTulusbesar->lihatRegister($jenis);
      $hasil['ibu']=$factoryTulusbesar->lihatRegister($jenis);
    }
    $view="";
    if ($jenis=="ibu") {
      $view="B_KohortIbu";
    }else if ($jenis=="bayi") {
      $view="B_KohortBayi";
    }else if ($jenis=="balita") {
      $view="B_KohortBalita";
    }else if ($jenis=="apras") {
      $view="B_KohortApras";
    }
    $this->load->view($view, $hasil);
  }

  public function tambahRegister($bidan,$jenis){
    if ($bidan=="kidal") {
      $factoryKidal = new BidanDesaKidal();
      $hasil=$factoryKidal->tambahRegister($jenis);
    }else if ($bidan=="kambingan") {
      $factoryKambingan = new BidanDesaKambingan();
      $hasil=$factoryKambingan->tambahRegister($jenis);
    }else if ($bidan=="ngingit") {
      $factoryNgingit = new BidanDesaNgingit();
      $hasil=$factoryNgingit->tambahRegister($jenis);
    }else if ($bidan=="pandanajeng") {
      $factoryPandanajeng = new BidanDesaPandanajeng();
      $hasil=$factoryPandanajeng->tambahRegister($jenis);
    }else if ($bidan=="pulungdowo") {
      $factoryPulungdowo = new BidanDesaPulungdowo();
      $hasil=$factoryPulungdowo->tambahRegister($jenis);
    }else if ($bidan=="bokor") {
      $factoryBokor = new BidanDesaBokor();
      $hasil=$factoryBokor->tambahRegister($jenis);
    }else if ($bidan=="slamet") {
      $factorySlamet = new BidanDesaSlamet();
      $hasil=$factorySlamet->tambahRegister($jenis);
    }else if ($bidan=="tumpang") {
      $factoryTumpang = new BidanDesaTumpang();
      $hasil=$factoryTumpang->tambahRegister($jenis);
    }else if ($bidan=="dampul") {
      $factoryDampul = new BidanDesaDampul();
      $hasil=$factoryDampul->tambahRegister($jenis);
    }else if ($bidan=="duwet") {
      $factoryDuwet = new BidanDesaDuwet();
      $hasil=$factoryDuwet->tambahRegister($jenis);
    }else if ($bidan=="benjor") {
      $factoryBenjor = new BidanDesaBenjor();
      $hasil=$factoryBenjor->tambahRegister($jenis);
    }else if ($bidan=="malangsuko") {
      $factoryMalangsuko = new BidanDesaMalangsuko();
      $hasil=$factoryMalangsuko->tambahRegister($jenis);
    }else if ($bidan=="wringinsongo") {
      $factoryWringinsongo = new BidanDesaWringinsongo();
      $hasil=$factoryWringinsongo->tambahRegister($jenis);
    }else if ($bidan=="jeru") {
      $factoryJeru = new BidanDesaJeru();
      $hasil=$factoryJeru->tambahRegister($jenis);
    }else if ($bidan=="tulusbesar") {
      $factoryTulusbesar = new BidanDesaTulusBesar();
      $hasil=$factoryTulusbesar->tambahRegister($jenis);
    }
    $link="C_Bidan/lihatRegister/".$bidan."/".$jenis;
    redirect($link);
  }

  public function ubahRegister($bidan,$jenis,$idRegister){
    if ($bidan=="kidal") {
      $factoryKidal = new BidanDesaKidal();
      $hasil=$factoryKidal->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="kambingan") {
      $factoryKambingan = new BidanDesaKambingan();
      $hasil=$factoryKambingan->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="ngingit") {
      $factoryNgingit = new BidanDesaNgingit();
      $hasil=$factoryNgingit->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="pandanajeng") {
      $factoryPandanajeng = new BidanDesaPandanajeng();
      $hasil=$factoryPandanajeng->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="pulungdowo") {
      $factoryPulungdowo = new BidanDesaPulungdowo();
      $hasil=$factoryPulungdowo->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="bokor") {
      $factoryBokor = new BidanDesaBokor();
      $hasil=$factoryBokor->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="slamet") {
      $factorySlamet = new BidanDesaSlamet();
      $hasil=$factorySlamet->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="tumpang") {
      $factoryTumpang = new BidanDesaTumpang();
      $hasil=$factoryTumpang->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="dampul") {
      $factoryDampul = new BidanDesaDampul();
      $hasil=$factoryDampul->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="duwet") {
      $factoryDuwet = new BidanDesaDuwet();
      $hasil=$factoryDuwet->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="benjor") {
      $factoryBenjor = new BidanDesaBenjor();
      $hasil=$factoryBenjor->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="malangsuko") {
      $factoryMalangsuko = new BidanDesaMalangsuko();
      $hasil=$factoryMalangsuko->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="wringinsongo") {
      $factoryWringinsongo = new BidanDesaWringinsongo();
      $hasil=$factoryWringinsongo->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="jeru") {
      $factoryJeru = new BidanDesaJeru();
      $hasil=$factoryJeru->ubahRegister($jenis,$idRegister);
    }else if ($bidan=="tulusbesar") {
      $factoryTulusbesar = new BidanDesaTulusBesar();
      $hasil=$factoryTulusbesar->ubahRegister($jenis,$idRegister);
    }
    $link="C_Bidan/lihatRegister/".$bidan."/".$jenis;
    redirect($link);
  }

  public function hapusRegister($bidan,$jenis,$idRegister){
   if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $hasil=$factoryKidal->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $hasil=$factoryKambingan->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $hasil=$factoryNgingit->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $hasil=$factoryPandanajeng->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $hasil=$factoryPulungdowo->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $hasil=$factoryBokor->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $hasil=$factorySlamet->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $hasil=$factoryTumpang->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $hasil=$factoryDampul->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $hasil=$factoryDuwet->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $hasil=$factoryBenjor->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $hasil=$factoryMalangsuko->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $hasil=$factoryWringinsongo->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $hasil=$factoryJeru->hapusRegister($jenis,$idRegister);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $hasil=$factoryTulusbesar->hapusRegister($jenis,$idRegister);
  }
  $link="C_Bidan/lihatRegister/".$bidan."/".$jenis;
  redirect($link);
}

public function tambahPelayanan($bidan,$jenis,$idRegister){
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $hasil=$factoryKidal->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $hasil=$factoryKambingan->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $hasil=$factoryNgingit->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $hasil=$factoryPandanajeng->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $hasil=$factoryPulungdowo->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $hasil=$factoryBokor->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $hasil=$factorySlamet->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $hasil=$factoryTumpang->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $hasil=$factoryDampul->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $hasil=$factoryDuwet->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $hasil=$factoryBenjor->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $hasil=$factoryMalangsuko->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $hasil=$factoryWringinsongo->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $hasil=$factoryJeru->tambahPelayanan($jenis,$idRegister);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $hasil=$factoryTulusbesar->tambahPelayanan($jenis,$idRegister);
  }
}

public function ubahPelayanan($bidan,$jenis,$idRegister){
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $hasil=$factoryKidal->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $hasil=$factoryKambingan->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $hasil=$factoryNgingit->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $hasil=$factoryPandanajeng->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $hasil=$factoryPulungdowo->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $hasil=$factoryBokor->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $hasil=$factorySlamet->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $hasil=$factoryTumpang->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $hasil=$factoryDampul->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $hasil=$factoryDuwet->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $hasil=$factoryBenjor->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $hasil=$factoryMalangsuko->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $hasil=$factoryWringinsongo->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $hasil=$factoryJeru->ubahPelayanan($jenis,$idRegister);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $hasil=$factoryTulusbesar->ubahPelayanan($jenis,$idRegister);
  }
}

public function hapusPelayanan($bidan,$jenis,$idRegister){
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $hasil=$factoryKidal->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $hasil=$factoryKambingan->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $hasil=$factoryNgingit->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $hasil=$factoryPandanajeng->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $hasil=$factoryPulungdowo->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $hasil=$factoryBokor->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $hasil=$factorySlamet->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $hasil=$factoryTumpang->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $hasil=$factoryDampul->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $hasil=$factoryDuwet->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $hasil=$factoryBenjor->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $hasil=$factoryMalangsuko->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $hasil=$factoryWringinsongo->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $hasil=$factoryJeru->hapusPelayanan($jenis,$idRegister);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $hasil=$factoryTulusbesar->hapusPelayanan($jenis,$idRegister);
  }
}

public function lihatRekapan($bidan,$tahun)
{
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $hasil['data']=$factoryKidal->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryKidal->ambilSasaran();
    $hasil['target']=$factoryKidal->ambilTarget();
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $hasil['data']=$factoryKambingan->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryKambingan->ambilSasaran();
    $hasil['target']=$factoryKambingan->ambilTarget();
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $hasil['data']=$factoryNgingit->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryNgingit->ambilSasaran();
    $hasil['target']=$factoryNgingit->ambilTarget();
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $hasil['data']=$factoryPandanajeng->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryPandanajeng->ambilSasaran();
    $hasil['target']=$factoryPandanajeng->ambilTarget();
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $hasil['data']=$factoryPulungdowo->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryPulungdowo->ambilSasaran();
    $hasil['target']=$factoryPulungdowo->ambilTarget();
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $hasil['data']=$factoryBokor->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryBokor->ambilSasaran();
    $hasil['target']=$factoryBokor->ambilTarget();
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $hasil['data']=$factorySlamet->lihatRekapan($tahun);
    $hasil['sasaran']=$factorySlamet->ambilSasaran();
    $hasil['target']=$factorySlamet->ambilTarget();
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $hasil['data']=$factoryTumpang->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryTumpang->ambilSasaran();
    $hasil['target']=$factoryTumpang->ambilTarget();
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $hasil['data']=$factoryDampul->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryDampul->ambilSasaran();
    $hasil['target']=$factoryDampul->ambilTarget();
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $hasil['data']=$factoryDuwet->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryDuwet->ambilSasaran();
    $hasil['target']=$factoryDuwet->ambilTarget();
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $hasil['data']=$factoryBenjor->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryBenjor->ambilSasaran();
    $hasil['target']=$factoryBenjor->ambilTarget();
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $hasil['data']=$factoryMalangsuko->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryMalangsuko->ambilSasaran();
    $hasil['target']=$factoryMalangsuko->ambilTarget();
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $hasil['data']=$factoryWringinsongo->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryWringinsongo->ambilSasaran();
    $hasil['target']=$factoryWringinsongo->ambilTarget();
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $hasil['data']=$factoryJeru->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryJeru->ambilSasaran();
    $hasil['target']=$factoryJeru->ambilTarget();
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $hasil['data']=$factoryTulusbesar->lihatRekapan($tahun);
    $hasil['sasaran']=$factoryTulusbesar->ambilSasaran();
    $hasil['target']=$factoryTulusbesar->ambilTarget();
  }
  $hasil['tahun']=$tahun;
  $hasil['desa']=$bidan;
  $this->load->view('B_RekapanDesa', $hasil);
}
public function perbaruiRekapan($bidan,$tahun)
{
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $factoryKidal->perbaruiRekapan($tahun);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $factoryKambingan->perbaruiRekapan($tahun);
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $factoryNgingit->perbaruiRekapan($tahun);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $factoryPandanajeng->perbaruiRekapan($tahun);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $factoryPulungdowo->perbaruiRekapan($tahun);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $factoryBokor->perbaruiRekapan($tahun);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $factorySlamet->perbaruiRekapan($tahun);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $factoryTumpang->perbaruiRekapan($tahun);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $factoryDampul->perbaruiRekapan($tahun);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $factoryDuwet->perbaruiRekapan($tahun);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $factoryBenjor->perbaruiRekapan($tahun);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $factoryMalangsuko->perbaruiRekapan($tahun);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $factoryWringinsongo->perbaruiRekapan($tahun);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $factoryJeru->perbaruiRekapan($tahun);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $factoryTulusbesar->perbaruiRekapan($tahun);
  }
  $link="C_Bidan/lihatRekapan/".$bidan."/".$tahun;
  redirect($link,'refresh');
}
public function lihatPemetaan($bidan,$tahun)
{
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $hasil['data']=$factoryKidal->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryKidal->ambilSasaran();
    $hasil['target']=$factoryKidal->ambilTarget($tahun);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $hasil['data']=$factoryKambingan->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryKambingan->ambilSasaran();
    $hasil['target']=$factoryKambingan->ambilTarget();
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $hasil['data']=$factoryNgingit->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryNgingit->ambilSasaran();
    $hasil['target']=$factoryNgingit->ambilTarget($tahun);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $hasil['data']=$factoryPandanajeng->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryPandanajeng->ambilSasaran();
    $hasil['target']=$factoryPandanajeng->ambilTarget($tahun);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $hasil['data']=$factoryPulungdowo->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryPulungdowo->ambilSasaran();
    $hasil['target']=$factoryPulungdowo->ambilTarget($tahun);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $hasil['data']=$factoryBokor->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryBokor->ambilSasaran();
    $hasil['target']=$factoryBokor->ambilTarget($tahun);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $hasil['data']=$factorySlamet->lihatPemetaan($tahun);
    $hasil['sasaran']=$factorySlamet->ambilSasaran();
    $hasil['target']=$factorySlamet->ambilTarget($tahun);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $hasil['data']=$factoryTumpang->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryTumpang->ambilSasaran();
    $hasil['target']=$factoryTumpang->ambilTarget($tahun);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $hasil['data']=$factoryDampul->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryDampul->ambilSasaran();
    $hasil['target']=$factoryDampul->ambilTarget($tahun);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $hasil['data']=$factoryDuwet->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryDuwet->ambilSasaran();
    $hasil['target']=$factoryDuwet->ambilTarget($tahun);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $hasil['data']=$factoryBenjor->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryBenjor->ambilSasaran();
    $hasil['target']=$factoryBenjor->ambilTarget($tahun);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $hasil['data']=$factoryMalangsuko->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryMalangsuko->ambilSasaran();
    $hasil['target']=$factoryMalangsuko->ambilTarget($tahun);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $hasil['data']=$factoryWringinsongo->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryWringinsongo->ambilSasaran();
    $hasil['target']=$factoryWringinsongo->ambilTarget($tahun);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $hasil['data']=$factoryJeru->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryJeru->ambilSasaran();
    $hasil['target']=$factoryJeru->ambilTarget($tahun);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $hasil['data']=$factoryTulusbesar->lihatPemetaan($tahun);
    $hasil['sasaran']=$factoryTulusbesar->ambilSasaran();
    $hasil['target']=$factoryTulusbesar->ambilTarget($tahun);
  }
  $hasil['tahun']=$tahun;
  $hasil['desa']=$bidan;
  $this->load->view('B_PemetaanDesa', $hasil);
}
public function perbaruiPemetaan($bidan,$tahun)
{
  if ($bidan=="kidal") {
    $factoryKidal = new BidanDesaKidal();
    $factoryKidal->perbaruiPemetaan($tahun);
  }else if ($bidan=="kambingan") {
    $factoryKambingan = new BidanDesaKambingan();
    $factoryKambingan->perbaruiPemetaan($tahun);
  }else if ($bidan=="ngingit") {
    $factoryNgingit = new BidanDesaNgingit();
    $factoryNgingit->perbaruiPemetaan($tahun);
  }else if ($bidan=="pandanajeng") {
    $factoryPandanajeng = new BidanDesaPandanajeng();
    $factoryPandanajeng->perbaruiPemetaan($tahun);
  }else if ($bidan=="pulungdowo") {
    $factoryPulungdowo = new BidanDesaPulungdowo();
    $factoryPulungdowo->perbaruiPemetaan($tahun);
  }else if ($bidan=="bokor") {
    $factoryBokor = new BidanDesaBokor();
    $factoryBokor->perbaruiPemetaan($tahun);
  }else if ($bidan=="slamet") {
    $factorySlamet = new BidanDesaSlamet();
    $factorySlamet->perbaruiPemetaan($tahun);
  }else if ($bidan=="tumpang") {
    $factoryTumpang = new BidanDesaTumpang();
    $factoryTumpang->perbaruiPemetaan($tahun);
  }else if ($bidan=="dampul") {
    $factoryDampul = new BidanDesaDampul();
    $factoryDampul->perbaruiPemetaan($tahun);
  }else if ($bidan=="duwet") {
    $factoryDuwet = new BidanDesaDuwet();
    $factoryDuwet->perbaruiPemetaan($tahun);
  }else if ($bidan=="benjor") {
    $factoryBenjor = new BidanDesaBenjor();
    $factoryBenjor->perbaruiPemetaan($tahun);
  }else if ($bidan=="malangsuko") {
    $factoryMalangsuko = new BidanDesaMalangsuko();
    $factoryMalangsuko->perbaruiPemetaan($tahun);
  }else if ($bidan=="wringinsongo") {
    $factoryWringinsongo = new BidanDesaWringinsongo();
    $factoryWringinsongo->perbaruiPemetaan($tahun);
  }else if ($bidan=="jeru") {
    $factoryJeru = new BidanDesaJeru();
    $factoryJeru->perbaruiPemetaan($tahun);
  }else if ($bidan=="tulusbesar") {
    $factoryTulusbesar = new BidanDesaTulusBesar();
    $factoryTulusbesar->perbaruiPemetaan($tahun);
  }
  $link="C_Bidan/lihatPemetaan/".$bidan."/".$tahun;
  redirect($link,'refresh');
}
}

include("application/controllers/BidanDesa/BidanDesa.php");
include("application/controllers/BidanDesa/BidanDesaKidal.php");
include("application/controllers/BidanDesa/BidanDesaKambingan.php");
include("application/controllers/BidanDesa/BidanDesaNgingit.php");
include("application/controllers/BidanDesa/BidanDesaMalangsuko.php");
include("application/controllers/BidanDesa/BidanDesaJeru.php");
include("application/controllers/BidanDesa/BidanDesaBenjor.php");
include("application/controllers/BidanDesa/BidanDesaBokor.php");
include("application/controllers/BidanDesa/BidanDesaPandanajeng.php");
include("application/controllers/BidanDesa/BidanDesaDuwet.php");
include("application/controllers/BidanDesa/BidanDesaDampul.php");
include("application/controllers/BidanDesa/BidanDesaTulusBesar.php");
include("application/controllers/BidanDesa/BidanDesaTumpang.php");
include("application/controllers/BidanDesa/BidanDesaPulungdowo.php");
include("application/controllers/BidanDesa/BidanDesaSlamet.php");
include("application/controllers/BidanDesa/BidanDesaWringinsongo.php");



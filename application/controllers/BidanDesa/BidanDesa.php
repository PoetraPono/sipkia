<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
abstract class BidanDesa extends CI_Controller {
  var $idBidan;
  var $namaBidan;
  var $alamatBidan;

  function lihatRegister($jenis){}
  function tambahRegister($jenis){}
  function ubahRegister($jenis,$idRegister){}
  function hapusRegister($jenis,$idRegister){}
  function lihatPelayanan($jenis,$idRegister){}
  function tambahPelayanan($jenis,$idRegister){}
  function ubahPelayanan($jenis,$idRegister){}
  function hapusPelayanan($jenis,$idRegister){}
  function lihatRekapan($tahun){}
  function perbaruiRekapan($tahun){}
  function perbaruiPemetaan($tahun){}
  function lihatPemetaan($tahun){}
  function ambilSasaran(){}
  function ambilTarget(){}

}
<?php
  class Siswa{
    public $nama;
    public $nrp;
    public $daftarNilai;

    public function __construct(){
      $this->nama = "";
      $this->daftarNilai = array_fill(0, 3, new Nilai());
      $this->nrp = "";
    }

  }

  class Nilai{
    public $mapel;
    public $nilai;
    public function __construct(){
      $this->mapel = "";
      $this->nilai = "";
    }
  }

  $first_siswa = new Siswa();
  $first_siswa->daftarNilai[0]->mapel = "Inggris";
  $first_siswa->daftarNilai[0]->nilai = 100;

  $siswa = [];
  $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $mapel = ["Inggris", "Indonesia", "Jepang"];
  for ($i = 0; $i < 10; $i++){
    $randomString = "";
    for ($j = 0; $j < 10; $j++){
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    $siswa[$i] = new Siswa();
    $siswa[$i]->nama = $randomString;
    echo $siswa[$i]->nama;
    echo "\n";
    for ($j = 0; $j < 3; $j++){
      $siswa[$i]->daftarNilai[$j]->mapel = $mapel[rand(0, 2)];
      $siswa[$i]->daftarNilai[$j]->nilai = rand(0, 100);
      echo $siswa[$i]->daftarNilai[$j]->mapel . " " . $siswa[$i]->daftarNilai[$j]->nilai;
      echo "\n";
    }
  }

?>
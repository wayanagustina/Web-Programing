<?php

// //Tipe Data
// $x = "Harry"; 
// echo $x; 
// echo "\n";
// $x = 1234;
// var_dump($x);

// //Variabel
// $nama = "noven";
// $jumlahUang = 0;
// echo "$nama punya uang $jumlahUang rupiah" . PHP_EOL;

$biodata = [
  "nama" => "Agustina",
  "pekerjaan" => "programer",
  "pendidikan" => "S1",
  "nilai" => "E",
  "umur" => 18,
  "hobi" => [
    "makan", "tidur", "ngegame"
  ],

  // "pendidikan_terakhir" => [
  //   "instansi" => "INSTIKI",
  //   "SMA" => "Smanab",
  //   "jurusan" => "ti-mdi",
  //   "tahun_lulus" => 2023,
  // ]

];


// KUIS //
// echo "Saya {$biodata['nama']}, dulu kuliah di {$biodata['pendidikan_terakhir']['instansi']} jurusan {$biodata['pendidikan_terakhir']['jurusan']}, lulusnya tahun {$biodata['pendidikan_terakhir']['tahun_lulus']}an " . PHP_EOL;

// Cara nambah data
// $biodata["hobi"][] = "tidur";
// $biodata["alamat"] = "jalan";

// // Cara menghapus data
// // unset($biodata["umur"]);
// // unset($biodata["hobi"][1]);

// // 'count' untuk menghitung jumlah array
// $biodata["jumlah_hobi"] = count($biodata["hobi"]);

// var_dump($biodata);

// // menghitung jumlah array
// echo count($biodata);

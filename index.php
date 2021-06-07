<!-- <?php 

$a = "saat ini sedang genting";

function beritaDunia($b, $c){
	global $a;
	echo $a." banyak terjadi kerusuhan ". ", ". $b. ".", $c;
}

beritaDunia( " minumbulkan kepanikan ", " sehingga banyak kecemasan "."<br>");

$d = "ini harus segera di tangani";
$e = "karena membuat masyarakat tidak tenang";
beritaDunia($d, $e);

 ?> -->




<!--  <?php 
//Memangil Fungsi di dalam Fungsi
$x = 2021;

function umurSaya($tahun_lahir){
	global $x;
	$z  = $x - $tahun_lahir;
	return $z;
}

function perkenalan($nama, $greeting = "selamat pagi"){
	echo "$greeting". " ". "perkenalkan nama saya" ." ". $nama." ". "usia saya adalah". " ";
	echo  umurSaya(1997);
}

perkenalan("ilham");



  ?> -->



  <!-- Fungsi rekursif
Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. Fungsi ini biasanya digunakan untuk menyelesaikan masalah sepeti faktorial, bilangan fibbonaci, pemrograman dinamis, dll. -->
<!-- <?php 


// function faktorial($angka){
// 	if ($angka < 2) {
// 		return 1;
// 	} else{
// 		return ($angka * faktorial($angka-1));
// 	}
// }

// echo "faktorial 5 adalah ". faktorial(5);
//  ?> -->






  <!--Fungsi Anonim atau Closure   
  	terdapat anonymous function alias fungsi tanpa nama. Kita bisa mendefinisikan suatu fungsi tanpa nama dan menaruhnya di dalam variabel, atau bahkan kita bisa menjadikannya sebagai parameter pada fungsi yang lain. -->



<!-- <?php

$namaLengkap = function ($namaDepan, $namaBelakang) {
  return "{$namaDepan} {$namaBelakang}";
};

echo $namaLengkap("Nurul", "Huda");

  ?> -->

  <!-- <?php 
  $beritaDunia = function ($kejadian, $peristiwa){
  	return "{$kejadian} {$peristiwa}";
  };

echo $beritaDunia("telah terjadi kerusuhan di depan gedung pemerintahan ", "mengakibatkan jatuhnya korban jiwa akibat kerusuhan yang tidak terkendali");

   ?>  -->






<!-- 
   <?php

/**
 * Fungsi ini untuk melakukan foreach pada setiap item pada array.
 * Lalu parameter ke-2 adalah fungsi anonim untuk menangani item array
 * tersebut mau diapakan
 */
function tampilkanArray (array $array, callable $fungsiEchoer) {
  foreach ($array as $key => $item) {
    # di sini kita tidak tahu fungsi anonim ini tugasnya seperti apa
    # karena ia tergantung fungsi yang dilemparkan sebagai parameter
    $fungsiEchoer($key, $item, count($array));
  }
}

# kita bikin satu variabel array berisi kumpulan nama mahasiswa
$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Lendis Fabri'];

# kita panggil fungsi tampilkanArray()
# kita passing variabel $listMahasiswa untuk parameter 1, dan 
# fungsi anonim yang akan menangani setiap item dari array
# sebagai parameter 2
tampilkanArray($listMahasiswa, function ($key, $nama) {
  echo "{$key} - Bung {$nama} <br>";
});

# kita panggil lagi fungsi tampilkanArray dengan
# parameter fungsi anonim yang berbeda. 
tampilkanArray($listMahasiswa, function ($key, $nama, $panjangArray) {
  echo "{$nama}";

  if ($key < $panjangArray - 1) {
    echo " - ";
  }
});

echo "<br>"; ?> -->






<!-- error karena tidak d tentukan nilainya -->


<!-- function tampilkanHaloDunia () {
  echo "Halo dunia! <br>";

  tampilkanHaloDunia();
}

# panggil fungsi tampilkanHaloDunia();
tampilkanHaloDunia();
 -->






<?php 

$istri = "windi";

function aktivitas($bekerja, $berangkat, $pekerjaan){
	echo "pekerjaan saya adalah" . " " . $bekerja . "<br>";
	echo " saya harus berangkat pukul" . " " . $berangkat . "<br>";
	echo "saya bekerja sebagai seorang" . " " . $pekerjaan;
}

aktivitas("masinis", "05:30", "pengemudi kereta api");


function keluarga($menikah, $asal_istri, $marga_istri){
	global $istri;
	echo "<br>". "saya menikah pada tahun" . " ". $menikah. " ". "<br>";
	echo "istri saya bernama $istri". " dengan marga $marga_istri". " ". "<br>";
	echo "asal istri saya dari $asal_istri";
}

keluarga("2022","Purba Dolok", "Saragih");

?>


 
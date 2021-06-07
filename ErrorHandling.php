<!-- die() -->

<!-- <?php 
$namaFile = "/web/document/histori.txt";

if (!file_exists($namaFile)){
	die("File tidak di temukan");
}else{
	$File = fopen($namaFile, "r");
	echo "File berhasil dibaca";
}


 ?> -->



 <!-- membuat fungsi error
 $errLevel = berisi konstata tipe error level
 $eerMessage = berisi label/pesan dari error
 $errFile = berisi file dimana error terjadi
 $errLine = berisi baris dimana error terjadi -->

 <!-- mematikan semua pesan error bawaan PHP  error_reporting(0)-->

<!--  <?php 


function tanganiError($level, $message, $file, $line){
	echo "<div style='padding: 2rem; background: rgb(200, 0, 0, 0 0.5); color: white'>";
	echo "<b>Terjadi Error</b>";
	echo "<p>[{$level}] {$message} {$namaFile} {$line}";
	echo "</div>";
}

error_reporting("tanganiError");
set_error_handler("tanganiError");


echo "$tess";

  ?> -->

<!-- 
  <?php

register_shutdown_function(function () {
    if (error_get_last()) {
        # ambil error terakhir
        $error = (object) error_get_last();

        tanganiError(
            $error->type, $error->message, $error->file, $error->line
        );
    }
}); 


selamatpagi();
?> -->


<?php 
echo json_encode($_SERVER);

 ?>
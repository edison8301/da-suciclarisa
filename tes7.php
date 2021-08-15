<?php


$kalimat = isset($_GET['kalimat'])?$_GET['kalimat']:'';

if(!empty($kalimat))
{
 $jmlchar = strlen($kalimat);
 echo "Kalimat: $kalimat";
 echo"<br>";
 echo "Jumlah Karakter: $jmlchar";
}

?>
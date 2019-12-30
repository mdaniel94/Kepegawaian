<?php
include "../include/konek.php";//sambung ke mysql

//mengambil nilai dari FORM

$nip = $_POST['nip'];
$tmt = $_POST['tmt_kgb'];
$naik = $_POST['naik_kgb'];

$date = "$naik";
$newdate3 = strtotime ( '2 year' , strtotime ( $date ) ) ;
$newdate = date ( 'y-m-d' , $newdate3 );
//Query update data tabel pasien
$hasil = mysql_query("UPDATE tb_kgb SET TMT_KGB = '$naik', NAIK_KGB = '$newdate' WHERE NIP = '$nip' ");

$hasil2 = mysql_query("UPDATE tb_pegawai SET TMT_KGB = '$naik' WHERE NIP = '$nip' ");


if ($hasil && $hasil2){
//echo "Sukses";
?><script>document.location.href="tabeltahunankgb.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>

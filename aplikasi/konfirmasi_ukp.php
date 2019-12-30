<?php
include "../include/konek.php";//sambung ke mysql

//mengambil nilai dari FORM
$tanggal_sk_pangkat = $_POST['tanggal_sk_pangkat'];
$sk_pangkat = $_POST['sk_pangkat'];
$nip = $_POST['NIP'];
$gol = $_POST['pangkat_golongan'];
$tmt = $_POST['tmt_pangkat'];
$naik = $_POST['naik_pangkat'];

$date = "$naik";
$newdate3 = strtotime ( '4 year' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d' , $newdate3 );

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-d", $tanggal);
//Query update data tabel pasien
$hasil = mysql_query("UPDATE tb_ukp SET PANGKAT_GOLONGAN = '$gol', TMT_PANGKAT = '$naik',NAIK_PANGKAT = '$newdate'  WHERE NIP = '$nip' ");

$hasil2 = mysql_query("UPDATE tb_pegawai SET PANGKAT_GOLONGAN = '$gol', TMT_PANGKAT = '$naik', `SK_PANGKAT`='$sk_pangkat',`TANGGAL_SK_PANGKAT`='$tanggal_sk_pangkat' WHERE NIP = '$nip' ");

$hasil3 = mysql_query("UPDATE tb_kgb SET TMT_PANGKAT = '$naik' WHERE NIP = '$nip' ");

if ($hasil && $hasil2 && $hasil3){
//echo "Sukses";
?><script>document.location.href="tabelukptahunan.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>

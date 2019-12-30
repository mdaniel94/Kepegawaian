<?php
include "../include/konek.php";//sambung ke mysql

//mengambil data dari form
$no = $_POST['no']; //1
$nama = $_POST['nama']; //2
$nip = $_POST['nip'];//3
$pangkat_golongan = $_POST['pangkat_golongan'];//4
$jabatan = $_POST['jabatan'];//5
$tanggal_lahir = $_POST['tanggal_lahir'];//6
$tahun_pensiun = $_POST['tahun_pensiun']; //7
$tempat_tugas = $_POST['tempat_tugas']; //8

date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y", $tanggal);

$query = mysql_query("INSERT INTO tb_pensiun VALUES('$no', '$nama', '$nip', '$pangkat_golongan', '$jabatan','$tanggal_lahir', '$tahun_pensiun', '$tempat_tugas')");

$hasil1 = mysql_query("DELETE FROM tb_pegawai WHERE NIP = '$nip'");

$hasil2 = mysql_query("DELETE FROM tb_ukp WHERE NIP = '$nip'");

$hasil3 = mysql_query("DELETE FROM tb_kgb WHERE NIP = '$nip'");

if ($query && $hasil1 && $hasil2 && $hasil3){
//echo "sukses";
?><script>document.location.href="tabelpensiun.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>

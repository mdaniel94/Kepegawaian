<?php
include "../include/konek.php";//sambung ke mysql

//mengambil nilai dari FORM
$nama = $_POST['nama']; //1
$nip = $_POST['nip'];//2
$pangkat_golongan = $_POST['pangkat_golongan'];//3
$jabatan = $_POST['jabatan'];//4
$tmt_cpns = $_POST['tmt_cpns'];//5
$tmt_pns = $_POST['tmt_pns']; //6
$tmt_jabatan = $_POST['tmt_jabatan']; //7
$tmt_pangkat = $_POST['tmt_pangkat'];//8
$tmt_kgb = $_POST['tmt_kgb'];//9
$naik_kgb = $_POST['naik_kgb'];//11
$tugas = $_POST['tugas'];//11


$hasil2 = mysql_query("UPDATE `tb_kgb` SET `NAMA_PEGAWAI`='$nama',`PANGKAT_GOLONGAN`='$pangkat_golongan',`JABATAN`='$jabatan',`TMT_CPNS`='$tmt_cpns',`TMT_PNS`='$tmt_pns',`TMT_JABATAN`='$tmt_jabatan',`TMT_PANGKAT`='$tmt_pangkat',`TMT_KGB`='$tmt_kgb',`NAIK_KGB`='$naik_kgb',`TUGAS`='$tugas' WHERE NIP = '$nip'");

$hasil1 = mysql_query("UPDATE `tb_pegawai` SET `NAMA_PEGAWAI`='$nama',`PANGKAT_GOLONGAN`='$pangkat_golongan',`JABATAN`='$jabatan',`TMT_CPNS`='$tmt_cpns',`TMT_PNS`='$tmt_pns',`TMT_JABATAN`='$tmt_jabatan',`TMT_PANGKAT`='$tmt_pangkat',`TMT_KGB`='$tmt_kgb',`TUGAS`='$tugas' WHERE NIP = '$nip'");

if ($hasil2 && $hasil1){
//echo "Sukses";
?><script>document.location.href="tabelkgb.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>

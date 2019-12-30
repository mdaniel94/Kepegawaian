<?php
include "../include/konek.php";//sambung ke mysql

//mengambil nilai dari FORM
$nama = $_POST['nama']; //2
$nip = $_POST['nip'];//3
$pangkat_golongan = $_POST['pangkat_golongan'];//4
$jabatan = $_POST['jabatan'];//5
$jabatan_eselon = $_POST['jabatan_eselon'];//5
$tmt_cpns = $_POST['tmt_cpns'];//6
$tmt_pns = $_POST['tmt_pns']; //1
$tmt_pangkat = $_POST['tmt_pangkat'];//3
$naik_pangkat = $_POST['naik_pangkat'];
$pendidikan = $_POST['pendidikan'];//5
$tugas = $_POST['tugas'];//6


//Query update data tabel pasien
$hasil = mysql_query("UPDATE tb_ukp SET NAMA_PEGAWAI = '$nama',PANGKAT_GOLONGAN = '$pangkat_golongan',JABATAN = '$jabatan',JABATAN_ESELON = '$jabatan_eselon',TMT_CPNS = '$tmt_cpns',TMT_PNS = '$tmt_pns',TMT_PANGKAT = '$tmt_pangkat',NAIK_PANGKAT = '$naik_pangkat',PENDIDIKAN = '$pendidikan',TUGAS = '$tugas' WHERE NIP = '$nip'");

$hasil1 = mysql_query("UPDATE `tb_pegawai` SET `NAMA_PEGAWAI`='$nama',`NIP`='$nip',`PANGKAT_GOLONGAN`='$pangkat_golongan',`JABATAN`='$jabatan',`JABATAN_ESELON`='$jabatan_eselon',`TMT_CPNS`='$tmt_cpns',`TMT_PNS`='$tmt_pns', `TMT_PANGKAT`='$tmt_pangkat',`TUGAS`='$tugas' WHERE `NIP`='$nip'");

if ($hasil && $hasil1){
//echo "Sukses";
?><script>document.location.href="tabelukp.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>

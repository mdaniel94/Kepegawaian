<?php
include "../include/konek.php";//sambung ke mysql

//mengambil nilai dari FORM
$no = $_POST['no']; //1
$nama = $_POST['nama']; //1
$nip = $_POST['nip'];//2
$pangkat_golongan = $_POST['pangkat_golongan'];//3
$jabatan = $_POST['jabatan'];//4
$tanggal_lahir = $_POST['tanggal_lahir'];//5
$tahun_pensiun = $_POST['tahun_pensiun'];
$tugas = $_POST['tugas'];//11


$hasil = mysql_query("UPDATE `tb_pensiun` SET `NAMA_PEGAWAI`='$nama',`PANGKAT_GOLONGAN`='$pangkat_golongan',`JABATAN`='$jabatan',`TANGGAL_LAHIR`='$tanggal_lahir',`TAHUN_PENSIUN`='$tahun_pensiun',`TUGAS`='$tugas' WHERE NIP = '$nip'");

if ($hasil){
//echo "Sukses";
?><script>document.location.href="tabelpensiun.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>

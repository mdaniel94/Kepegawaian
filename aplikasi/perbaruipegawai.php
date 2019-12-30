<?php
include "../include/konek.php";//sambung ke mysql

//mengambil nilai dari FORM
$no = $_POST['no']; //1
$nama = $_POST['nama']; //2
$nip = $_POST['nip'];//3
$tahun_pensiun = $_POST['tahun_pensiun'];//3
$pangkat_golongan = $_POST['pangkat_golongan'];
$jabatan = $_POST['jabatan']; 
$status = $_POST['status']; //8
$tempat_lahir = $_POST['tempat_lahir'];//9
$tanggal_lahir = $_POST['tanggal_lahir'];//9
$agama = $_POST['agama'];//10
$jenis_kelamin = $_POST['jenis_kelamin'];//10
$pendidikan = $_POST['pendidikan'];//11
$no_ijazah = $_POST['no_ijazah'];//12
$tanggal_ijazah = $_POST['tanggal_ijazah']; //13
$jabatan_eselon = $_POST['jabatan_eselon']; //14
$tmt_eselon = $_POST['tmt_eselon'];//15
$sk_jabatan = $_POST['sk_jabatan'];//16
$tanggal_sk_jabatan = $_POST['tanggal_sk_jabatan'];//17
$tmt_jabatan = $_POST['tmt_jabatan'];//18
$sk_pangkat = $_POST['sk_pangkat']; //19
$tanggal_sk_pangkat = $_POST['tanggal_sk_pangkat']; //20
$tmt_pangkat = $_POST['tmt_pangkat'];//21
$tmt_kgb = $_POST['tmt_kgb'];//21

$tmt_cpns = $_POST['tmt_cpns'];//22
$tmt_pns = $_POST['tmt_pns'];//23
$nrp = $_POST['nrp'];//24
$npwp = $_POST['npwp']; //25
$karpeg = $_POST['karpeg']; //26
$tugas = $_POST['tugas'];//27

$date2 = "$tmt_pangkat";
$newdate2 = strtotime ( '4 year' , strtotime ( $date2 ) ) ;
$naik_pangkat = date ( 'Y-m-d' , $newdate2 );

$date3 = "$tmt_kgb";
$newdate3 = strtotime ( '2 year' , strtotime ( $date3 ) ) ;
$naik_kgb = date ( 'Y-m-d' , $newdate3 );

//Query update data tabel pasien
$hasil1 = mysql_query("UPDATE `tb_pegawai` SET `NAMA_PEGAWAI`='$nama',`NIP`='$nip',`TAHUN_PENSIUN`='$tahun_pensiun',`PANGKAT_GOLONGAN`='$pangkat_golongan',`JABATAN`='$jabatan',`STATUS`='$status',`TEMPAT_LAHIR`='$tempat_lahir',`TANGGAL_LAHIR`='$tanggal_lahir',`AGAMA`='$agama',`JENIS_KELAMIN`='$jenis_kelamin',`PENDIDIKAN`='$pendidikan',`NO_IJAZAH`='$no_ijazah',`TANGGAL_IJAZAH`='$tanggal_ijazah',`JABATAN_ESELON`='$jabatan_eselon',`TMT_ESELON`='$tmt_eselon',`SK_JABATAN`='$sk_jabatan',`TANGGAL_SK_JABATAN`='$tanggal_sk_jabatan',`TMT_JABATAN`='$tmt_jabatan',`SK_PANGKAT`='$sk_pangkat',`TANGGAL_SK_PANGKAT`='$tanggal_sk_pangkat',`TMT_PANGKAT`='$tmt_pangkat',`TMT_KGB`='$tmt_kgb',`TMT_CPNS`='$tmt_cpns',`TMT_PNS`='$tmt_pns',`NRP`='$nrp',`NPWP`='$npwp',`KARPEG`='$karpeg',`TUGAS`='$tugas' WHERE `NIP`='$nip'");

$hasil2 = mysql_query("UPDATE `tb_kgb` SET `NAMA_PEGAWAI`='$nama',`PANGKAT_GOLONGAN`='$pangkat_golongan',`JABATAN`='$jabatan',`TMT_CPNS`='$tmt_cpns',`TMT_PNS`='$tmt_pns',`TMT_JABATAN`='$tmt_jabatan',`TMT_PANGKAT`='$tmt_pangkat',`TMT_KGB`='$tmt_kgb',`NAIK_KGB`='$naik_kgb',`TUGAS`='$tugas' WHERE NIP = '$nip'");

$hasil3 = mysql_query("UPDATE tb_ukp SET NAMA_PEGAWAI = '$nama',PANGKAT_GOLONGAN = '$pangkat_golongan',JABATAN = '$jabatan',JABATAN_ESELON = '$jabatan_eselon',TMT_CPNS = '$tmt_cpns',TMT_PNS = '$tmt_pns',TMT_PANGKAT = '$tmt_pangkat',NAIK_PANGKAT = '$naik_pangkat',PENDIDIKAN = '$pendidikan',TUGAS = '$tugas' WHERE NIP = '$nip'");

if ($hasil1 && $hasil2 && $hasil3){
//echo "Sukses";
?><script>document.location.href="tabelpegawai.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>

<?php
include "../include/konek.php";//sambung ke mysql

//mengambil data dari form
$no = $_POST['no']; //1
$nama = $_POST['nama']; //2
$nip = $_POST['nip'];//3
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


$date1 = "$tanggal_lahir";
$newdate1 = strtotime ( '+10 year' , strtotime ( $date1 ) ) ;
$a = date ( 'Y' , $newdate1 );
$tahun_pensiun=$a + 48;

$date2 = "$tmt_pangkat";
$newdate2 = strtotime ( '4 year' , strtotime ( $date2 ) ) ;
$naik_pangkat = date ( 'Y-m-d' , $newdate2 );

$date3 = "$tmt_kgb";
$newdate3 = strtotime ( '2 year' , strtotime ( $date3 ) ) ;
$naik_kgb = date ( 'Y-m-d' , $newdate3 );

$tb_pegawai = mysql_query("INSERT INTO `kepegawaian`.`tb_pegawai` 
(`NO`, `NAMA_PEGAWAI`, `NIP`, `TAHUN_PENSIUN`, `PANGKAT_GOLONGAN`, `JABATAN`, `STATUS`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `AGAMA`, `JENIS_KELAMIN`, `PENDIDIKAN`, `NO_IJAZAH`, `TANGGAL_IJAZAH`, `JABATAN_ESELON`, `TMT_ESELON`, `SK_JABATAN`, `TANGGAL_SK_JABATAN`, `TMT_JABATAN`, `SK_PANGKAT`, `TANGGAL_SK_PANGKAT`, `TMT_PANGKAT`, `TMT_KGB`, `TMT_CPNS`, `TMT_PNS`, `NRP`, `NPWP`, `KARPEG`, `TUGAS`) VALUES 
('$no', '$nama', '$nip', '$tahun_pensiun', '$pangkat_golongan', '$jabatan', '$status', '$tempat_lahir', '$tanggal_lahir', '$agama', '$jenis_kelamin', '$pendidikan', '$no_ijazah', '$tanggal_ijazah', '$jabatan_eselon', '$tmt_eselon', '$sk_jabatan', '$tanggal_sk_jabatan', '$tmt_jabatan', '$sk_pangkat', '$tanggal_sk_pangkat', '$tmt_pangkat', '$tmt_kgb', '$tmt_cpns', '$tmt_pns', '$nrp', '$npwp', '$karpeg', '$tugas')");

$tb_ukp = mysql_query("INSERT INTO tb_ukp VALUES('$no' ,'$nama', '$nip', '$pangkat_golongan', '$jabatan','$jabatan_eselon','$tmt_cpns', '$tmt_pns','$tmt_pangkat', '$naik_pangkat', '$pendidikan','$tugas')");

$tb_kgb = mysql_query("INSERT INTO tb_kgb VALUES('$no', '$nama', '$nip', '$pangkat_golongan', '$jabatan','$tmt_cpns', '$tmt_pns', '$tmt_jabatan','$tmt_pangkat', '$tmt_kgb', '$naik_kgb','$tugas')");


if ($tb_pegawai && $tb_ukp && $tb_kgb){
//echo "sukses";
?><script>document.location.href="tabelpegawai.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>

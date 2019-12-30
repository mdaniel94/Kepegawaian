<?php
include "../include/konek.php";//sambung ke mysql
$NIP = $_GET['NIP'];

//menghapus Record di tabel pasien
$hasil1 = mysql_query("DELETE FROM tb_pegawai WHERE NIP = '$NIP'");

$hasil2 = mysql_query("DELETE FROM tb_ukp WHERE NIP = '$NIP'");

$hasil3 = mysql_query("DELETE FROM tb_kgb WHERE NIP = '$NIP'");

if ($hasil1 && $hasil2 && $hasil3){
//echo "sukses";
?><script>document.location.href="tabelpegawai.php"</script><?php
} 
else
{
echo "gagal karena : ".mysql_error();
}
?>

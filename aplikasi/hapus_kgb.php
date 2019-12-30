<?php
include "../include/konek.php";

$NIP = $_GET['NIP'];


$hasil1 = mysql_query("DELETE FROM tb_pegawai WHERE NIP = '$NIP'");

$hasil2 = mysql_query("DELETE FROM tb_ukp WHERE NIP = '$NIP'");

$hasil3 = mysql_query("DELETE FROM tb_kgb WHERE NIP = '$NIP'");

if ($hasil1 && $hasil2 && $hasil3){//jika berhasil
//echo  Berhasil dihapus";
?><script>document.location.href="tabelkgb.php"</script><?php
}else{//jika  gagal menghapus
echo "Gagal : ".mysql_error();
}
?>

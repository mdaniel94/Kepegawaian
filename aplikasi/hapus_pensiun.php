<?php
include "../include/konek.php";

$NIP = $_GET['NIP'];

$hasil1 = mysql_query("DELETE FROM tb_pensiun WHERE NIP = '$NIP'");

if ($hasil1){//jika berhasil
//echo  Berhasil dihapus";
?><script>document.location.href="tabelpensiun.php"</script><?php
}else{//jika  gagal menghapus
echo "Gagal : ".mysql_error();
}
?>

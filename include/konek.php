<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if(!isset($_SESSION)) {
     session_start();
}
if(!isset($_SESSION['username'])){
?>
<script>document.location.href="../login/"</script>
<?php 
}

$host="localhost"; //deklarasi variabel
$user="root"; 
$password=""; 
$database="kepegawaian"; 

//sambungkan ke database
$koneksi=mysql_connect($host,$user,$password); 

//memilih database yang akan dipakai
$con = mysql_select_db($database,$koneksi); 

if($koneksi){  //cek koneksi 
//echo "berhasil koneksi"; 
}else{ 
 echo "koneksi ke database mysql gagal"; 
} 

?>

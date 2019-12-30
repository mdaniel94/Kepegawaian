<?php
$date = "1996-04-25";
$newdate3 = strtotime ( '+1 year' , strtotime ( $date ) ) ;
$a = date ( 'Y' , $newdate3 );

$tahun_pensiun=$a + 57;
echo("$tahun_pensiun");


$i=0;
$tampil = "SELECT *, count(kd_gejala) as jml_gejala FROM relasi GROUP BY kd_gejala";
$sql = mysql_query($tampil);
while($data = mysql_fetch_array($sql))
{
$i++;
echo '
<td>Apakah ?'.$data[kd_gejala].'= '.$data[jml_gejala].'</td></tr>';
$jmlgejala[$i] = $data[jml_gejala];
}
sort($jmlgejala);
$totaldata = count($jmlgejala);
for($x = 0; $x < $totaldata; $x++) {
echo $jmlgejala[$x];
echo "<br>";
}
?>
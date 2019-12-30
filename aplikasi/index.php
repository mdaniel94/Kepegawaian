<?php
if(!isset($_SESSION)) {
     session_start();
}

if(isset($_SESSION['username'])){
require "index2.php";
}else{
?>
<script>
document.location.href="../login/"
</script>
<?php
}
?>

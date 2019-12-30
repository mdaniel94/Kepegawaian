<?php
session_start();

unset($_SESSION['username']);

?>
<script>document.location.href="../login/"
</script>
<?
include "index.php";
?>
<?php
$coon=mysqli_connect("sql305.infinityfree.com","if0_35999981","","if0_35999981_apple");
$id= $_GET['id'];
mysqli_query($coon, "delete from phones where id=$id");
header("location:view.php");
?>
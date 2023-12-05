<?php
$im = $_POST["im"];
$nz = $_POST["nz"];
$ad = $_POST["ad"];
$lacz = mysqli_connect('localhost','root','','wedkowanie');
$pyt = "INSERT INTO `karty_wedkarskie`(`imie`, `nazwisko`, `adres`) VALUES ('$im', '$nz','$ad')";
$wyn = mysqli_query($lacz, $pyt);   

mysqli_close($lacz)
?>
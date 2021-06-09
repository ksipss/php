<?php 

$link = mysqli_connect("localhost", "root", "root", "Vaspi", "3307");
$query = sprintf('SELECT * FROM news WHERE id=%s', mysqli_real_escape_string($link, $_GET['id']));
$result = mysqli_query($link, $query);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
$name = $result[0];
?>


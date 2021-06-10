<?php 
    $link = mysqli_connect("localhost", "root", "root", "Vaspi", "3306");

    $query = "SELECT * FROM aboutus";
    $stmt = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
      print "Ошибка подготовки запроса\n";
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $aboutUs = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

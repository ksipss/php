<?php 
    $link = mysqli_connect("localhost", "root", "root", "Vaspi", "3307");

    $query = "SELECT * FROM news";
    $stmt = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
      print "Ошибка подготовки запроса\n";
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";
}

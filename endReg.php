<?php require_once('./password.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="proektt.css">
</head>
<body>

    <form action="reg.php">
    <input type="submit" value="Back">
    </form>
    
    <?php 
    $link = mysqli_connect("localhost", "root", "root", "vaspi", "3306");
    
    if(!empty($_POST)){
        $data = $_POST;
        $data['login'] = mysqli_real_escape_string($link, $_POST['login']);
        $data['email'] = mysqli_real_escape_string($link, $_POST['email']);
        // $data['password'] = mysqli_real_escape_string($link, $_POST['password']);
        $data['password'] = md5($data['password'] . 'UUUUJFSDfaesuijksdvn');
        
        $sql = 'INSERT INTO `reg` (`login`,`email`, `password`) VALUES (\'%s\', \'%s\', \'%s\')';
        $sql = sprintf($sql, $data['login'], $data['email'], $data['password']);
        // $result = mysqli_query($link, $sql);
        if(mysqli_query($link, $sql)
        {
           print ('Ваши данные приняты!')
        });
    };
    
    // var_dump ($sql);
    
    ?>
     
</body>
</html>
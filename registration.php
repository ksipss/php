<form action="/reg.php" method="POST">
    <input type="text"  name="login">
    <input type="password"  name="password">
    <input type="submin">
</form>

<?php 
    if(empty($_POST)){
        die();
    }

    $data = $_POST;
    $data['password'] = md5($data['password'] + 'dgfdf3524dfg56g8u34nl');

    $sql = 'INSERT INTO `user` (`name`) VALUES ('fdfdsfds')';

?>

<?php
    $_SESSION['user'] = $data;

    if(empty($_SESSION['user'])){
        die();
    }

?>
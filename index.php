<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    if(empty($_GET['step'])){
        $_GET['step'] = 1;
    }
    ?>
    <?php 
    $arr = [
        'a'=>1,
        'b'=>2,
        'c'=>3
    ];
    foreach($arr as $key=>$value) 
        echo '<div>key = ' .$key.'</div>';
        echo 'value = ' .$value;

    ?>

<form action="index.php" method='get'>
    <input type="text" name='test' value='HI!!!!!'>
    <input type="submit">
</form>


<?php 

$data = [
    ['name'=>'Дом местных жителей (5 человек)', 'stone'=>10, 'wood'=>10]
];


?>

<form action="index.php" method='get'>
<input type="hidden" name='step' value='<?php echo $_GET['step'] + 1 ?>'>
    <input id='build1' type="radio" name='build' value='1'><label for='build1'>Дом местных жителей (5 человек)</label>
    <input type="radio" name='build' value='2'>
    <input type="radio" name='build' value='3'>
    <input type="radio" name='build' value='4'>
    
    <input type="submit">
</form>

<?php 
$key = $_GET['build'] - 1; 
var_dump($_GET['step']);

?>



</body>
</html>
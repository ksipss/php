<?php require_once('./db.php');   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="proektt.css">
</head>
<body>
<?php require_once('./components/header.php'); ?>
<div class="wrapper">
    <div class="game_item">
        <div class="game_text">
        
        </div>
        <div class="game_image" style="background-image: url( <?php echo $name['background'] ?>)">
        
        </div>
        
    </div>
</div>
<?php require_once('./components/footer.php'); ?>
</body>
</html>
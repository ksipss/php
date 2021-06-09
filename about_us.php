<?php require_once('./bdAboutUs.php'); ?>
<?php require_once('./template.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about_us</title>
    <link rel="stylesheet" href="proektt.css">
</head>
<body>
    <div class="wrapper">
    <?php
  require_once('./components/header.php');
  ?>

        
        <div class="about_us_po_zentru">


          <div class="about_us">
            <h2>О нас</h2>
            <div class="about_us_text">
              <p>В реализации проекта принимали участие</p>
            </div>
            <?php 
                        foreach($aboutUs as $item) {
                          echo template('./aboutUscard.php', $item);                         
                        }
                         ?>
            
          </div>
        </div>
      
        <?php
            require_once('./components/footer.php');
            ?>
      
        </div>
        <a href="#" title="Вернуться наверх" class="buttonup"></a>
</body>
</html>
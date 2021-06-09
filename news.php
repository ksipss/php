<?php require_once('./bdNews.php'); ?>
<?php require_once('./template.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <link rel="stylesheet" href="proektt.css">
</head>

<body>
    <div class="wrapper">
        <?php
        require_once('./components/header.php');
        ?>
        <div class="news_po_zentru">

            <div class="news_content">
                <h2>Новости</h2>
                <div class="news">

                        <?php 
                        foreach($news as $item) {
                            // var_dump ($item);
                          echo template('./newscard.php', $item);                         
                        }
                         ?>
                      

                      </div>

                </div>
 </div>

            <?php
            require_once('./components/footer.php');
            ?>
        </div>
        <a href="#" title="Вернуться наверх" class="buttonup"></a>
</body>

</html>
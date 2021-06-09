                    <?php require_once('./newscard.php'); ?>
                    <?php require_once('./function.php'); ?>
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
                        foreach($newsData as $news) {
                          echo template('./card.php', $news);                         
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
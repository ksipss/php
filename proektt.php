<?php require_once('./newsData.php'); ?>
<?php require_once('./bdNews.php'); ?>
<?php require_once('./bdAboutUs.php'); ?>
<?php require_once('./aboutUsData.php'); ?>
<?php require_once('./template.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>proekt</title>
  <link rel="stylesheet" href="proektt.css">
</head>

<body>
  <?php
  require_once('./components/header.php');
  ?>
  <div class="wrapper">
    <!-- <div class="conteiner"> -->
    <div class="slider">
      <div class="slider__wrapper">
        <div class="slider__item">
          <div class="images-slide">
            <div class="top_games">
              <a href="#">
                <div class="images-slide__items_1"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_2"></div>
              </a>
            </div>
            <div class="bot_games">
              <a href="#">
                <div class="images-slide__items_3"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_4"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_5"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="slider__item">
          <div class="images-slide">
            <div class="top_games">
              <a href="#">
                <div class="images-slide__items_1"></div>
              </a>

              <a href="#">
                <div class="images-slide__items_2"></div>
              </a>

            </div>
            <div class="bot_games">
              <a href="#">
                <div class="images-slide__items_3"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_4"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_5"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="slider__item">
          <div class="images-slide">
            <div class="top_games">
              <a href="#">
                <div class="images-slide__items_1"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_2"></div>
              </a>
            </div>
            <div class="bot_games">
              <a href="#">
                <div class="images-slide__items_3"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_4"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_5"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="slider__item">
          <div class="images-slide">
            <div class="top_games">
              <a href="#">
                <div class="images-slide__items_1"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_2"></div>
              </a>
            </div>
            <div class="bot_games">
              <a href="#">
                <div class="images-slide__items_3"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_4"></div>
              </a>
              <a href="#">
                <div class="images-slide__items_5"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a class="slider__control slider__control_left" href="#" role="button"></a>
      <a class="slider__control slider__control_right" href="#" role="button"></a>
    </div>
    <!-- </div> -->

    <div class="games_po_zentru">
      <div class="games_content">
        <h2>
          Игры</h2>

        <a href="games.php">
          <div class="games">

          </div>
        </a>
      </div>
    </div>
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
  </div>
  <a href="#" title="Вернуться наверх" class="buttonup"></a>



  <script src="proektt.js"></script>
</body>

</html>
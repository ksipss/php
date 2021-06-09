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

        <?php require_once('./newscard.php'); ?>
                        <?php foreach ($news as $new) : ?>
                        <div class="service-part-card" style="background-image: <?php echo $new['background'] ?>">
                            <div class="service-part-card-image">

                                <h3>
                                    <a href="#"><?php echo $new['name'] ?></a>
                                </h3>
                                <a href="#"> <span> <?php echo $new['text']  ?> </span> </a>
                               
                            </div>
                        </div>
                        <?php endforeach; ?>
        </div>

      </div>
    </div>
    <div class="about_us_po_zentru">


          <div class="about_us">
            <h2>О нас</h2>
            <div class="about_us_text">
              <p>В реализации проекта принимали участие</p>
            </div>
            <?php require_once('./about_uscard.php'); ?>
            <?php foreach ($about_us as $about) : ?>
            <div class="card_about_me">
              <div class="about_me_avatar_1" style="background-image: <?php echo $about['avatar'] ?>">
    
              </div>
              <div class="about_me_text">
               <?php echo $about[text] ?>
              </div>
            </div>
            <?php endforeach; ?>
            
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
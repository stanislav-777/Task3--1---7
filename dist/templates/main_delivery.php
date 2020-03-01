<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>delivery</title>
    <?php
include_once ("./templates/blocks/head.php");
?>
  </head>
  <body>

<?php
include_once ("./templates/blocks/header.php");
?>

<?php
include_once ("./templates/blocks/mobile_menu.php");
?>
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="/index.php">Главная</a></li>
            <li><span>Доставка</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Доставка</h1>
        </div>
        <div class="grid-container">
          <div class="seo_text"><img class="content-img" src="/assets/img/delivery.png" alt="" title="">
            <p>Для того, чтобы избавить своих клиентов от лишних проблем наша компания предлагает такие услуги как: доставка бытовок и блок-контейнеров.</p>
            <p>Доставка бытовок включает в себя не только транспортировку, но и погрузочно-разгрузочные работы, а также их установку. Перевозка бытовок производится в собранном виде при помощи манипулятора. Это значительно сокращает расходы, так как избавляет от необходимости использования грузоподъемной техники.</p>
            <p>Стоимость услуги до 50 км от склада (г. Химки, МО) на сегодняшний день составляет 6 500 рублей. Перевозка бытовок на более дальнее расстояние осуществляется по прейскуранту 50 рублей за каждый дополнительный километр.</p>
            <p>Все разрешения на перевозку бытовок наша компания получает самостоятельно. Вам нужно сделать только заказ и указать начальную и конечную точку перевозки. Остальные формальности наша компания берет на себя. Необходимо учитывать, чтобы на месте погрузки и выгрузки бытовок был свободный подъезд манипулятора.</p>
            <p>Звоните по телефонам:<span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества.</p>
          </div>
        </div>
        
<?php
include_once ("./templates/blocks/delivery_calc.php");
?>

        <?php
        include_once ("./templates/blocks/main_photogallery.php");
        ?>
        
<?php
include_once ("./templates/blocks/order_form-block.php");
?> 

        <div class="main_article">
          <div class="grid-container">
            <div class="main_article-heading heading">Так же Вам могут быть полезны  <a href="#">  наши статьи</a><a class="mobile-more" href="#"></a></div>
            <div class="main_article-wrapper"><a class="main_article-item" href="/pokupka-ili-arenda-byitovok/">Покупать или арендовать?</a><a class="main_article-item" href="/xarakteristiki-byitovok/">Характеристики бытовок</a><a class="main_article-item" href="/naznachenie-byitovok/">Назначение бытовок</a><a class="main_article-item" href="/ispolzovanie-krana-manipulyatora/">Использование крана-манипулятора</a><a class="main_article-item" href="/kupit-byitovku-bu/">Купить бытовку бу</a><a class="main_article-item" href="/byitovka-sklad/">Бытовка склад</a><a class="main_article-item" href="/bytovka-prorabskaya-ofis/">Бытовка прорабская(офис)</a><a class="main_article-item" href="/byitovka-zhilaya/">Бытовка жилая</a><a class="main_article-item" href="/byitovka-stolovaya/">Бытовка столовая</a><a class="main_article-item" href="/byitovka-razdevalka/">Бытовка раздевалка</a><a class="main_article-item" href="/bytovka-post-oxrany/">Бытовка пост-охраны</a></div>
          </div>
        </div>
      </div>
    </main>
    <?php
include_once ("./templates/blocks/footer.php");
?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/foundation.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async src="/assets/js/main.js"></script>
    <div class="popup_form order_popup reveal" id="popup_order" data-reveal>
      <button class="close-modal" data-close aria-label="Close modal" type="button"></button>
<?php
include_once ("./templates/blocks/order-form.php");
?>
    </div>
  </body>
</html>
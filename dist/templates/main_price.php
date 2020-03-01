<!DOCTYPE html>
<html lang="ru">
<head>
<title>Price</title>
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
      <div class="content price-page">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="/index.php">Главная</a></li>
            <li><span>Цены</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Цены</h1>
        </div>
        <div class="price">
            <div class="price_wrapper">
      <?php
include_once ("./templates/blocks/block-price.php");
?>
</div>
</div>
  

        <?php
include_once ("./templates/blocks/calc-choose.php");
?>


        <div class="grid-container">
        <?php
include_once ("./templates/blocks/seo-text_block.php");
?>      

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

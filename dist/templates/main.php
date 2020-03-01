<!DOCTYPE html>
<html lang="ru">
<head>
<title>home page</title>

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
      <div class="main_slider-wrapper">
        <div class="grid-container">
          <div class="grid-x">
            <div class="main_slider">
              <div class="main_slider-item"><img src="../assets/img/bytovka1.png" alt="" title="">
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description"></div>
                  <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
              </div>
              <div class="main_slider-item"><img src="../assets/img/bytovka2.png" alt="" title="">
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья</div>
                  <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
              </div>
              <div class="main_slider-item"><img src="../assets/img/bytovka3.png" alt="" title="">
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку пост-охраны</div>
                  <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
              </div>
              <div class="main_slider-item"><img src="../assets/img/bytovka4.png" alt="" title="">
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку под склад</div>
                  <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
              </div>
              <div class="main_slider-item"><img src="../assets/img/bytovka5.png" alt="" title="">
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду офисную бытовку</div>
                  <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
              </div>
              <div class="main_slider-item"><img src="../assets/img/bytovka6.png" alt="" title="">
                <div class="main_slider-substrate">
                  <div class="main_substrate-heading">Строительные бытовки недорого!</div>
                  <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку-раздевалку</div>
                  <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php

include_once ("./templates/blocks/preview_bytovka-wrapper.php");
      ?>
      <div class="main_map">
        <div class="grid-container">
          <div class="main_map-heading heading">Мы работаем по Москве и Московской области</div>
          <div class="main_map-wrapper">
            <div class="main_map-body" id="map"></div>
            <script>
              var mapsPoints = [
                                          {
                                              coords: [55.5572, 37.7086],
                                              locationUrl: '/arenda-bytovok-v-vidnom/',
                                          },
                                          {
                                              coords: [55.4255, 38.2641],
                                              locationUrl: '/arenda-bytovok-v-bronnicah/',
                                          },
                                          {
                                              coords: [56.3439, 37.5203],
                                              locationUrl: '/arenda-bytovok-v-dmitrove/',
                                          },
                                          {
                                              coords: [55.5673, 38.2258],
                                              locationUrl: '/arenda-bytovok-v-ramenskom/',
                                          },
                                          {
                                              coords: [55.1499, 37.4670],
                                              locationUrl: '/arenda-bytovok-v-chekhove/',
                                          },
                                          {
                                              coords: [56.3153, 38.1360],
                                              locationUrl: '/arenda-bytovok-v-sergiev-posade/',
                                          },
                                          {
                                              coords: [56.3317, 36.7287],
                                              locationUrl: '/arenda-bytovok-v-klinu/',
                                          },
                                          {
                                              coords: [55.9143, 36.8603],
                                              locationUrl: '/arenda-bytovok-v-istre/',
                                          },
                                          {
                                              coords: [55.4312, 37.5447],
                                              locationUrl: '/arenda-bytovok-v-podolske/',
                                          },
                                          {
                                              coords: [55.4312, 37.5447],
                                              locationUrl: '/arenda-bytovok-v-vidnom/',
                                          },
                                          {
                                              coords: [56.0357, 35.9585],
                                              locationUrl: '/arenda-bytovok-v-volokolamske/',
                                          },
                                          {
                                              coords: [56.0104, 37.8472],
                                              locationUrl: '/arenda-bytovok-v-pushkino/',
                                          },
                                          {
                                              coords: [55.9919, 37.2144],
                                              locationUrl: '/arenda-bytovok-v-zelenograde/',
                                          },
                                          {
                                              coords: [55.7963, 37.9382],
                                              locationUrl: '/arenda-bytovok-v-balashihe/',
                                          },
                                          {
                                              coords: [55.9202, 37.9915],
                                              locationUrl: '/arenda-bytovok-v-shchelkovo/',
                                          },
                                          {
                                              coords: [55.8545, 38.4418],
                                              locationUrl: '/arenda-bytovok-v-noginske/',
                                          },
              
                                      ];
            </script>
            <div class="main_map-links">
              <div class="main_map-links-title">Аренда бытовок в: </div><a href="/arenda-bytovok-v-vidnom/">Видном</a><a href="/arenda-bytovok-v-bronnicah/">Бронницах</a><a href="/arenda-bytovok-v-dmitrove/">Дмитрове</a><a href="/arenda-bytovok-v-ramenskom/">Раменском</a><a href="/arenda-bytovok-v-chekhove/">Чехове</a><a href="/arenda-bytovok-v-sergiev-posade/">Сергиев Посаде</a><a href="/arenda-bytovok-v-klinu/">Клину</a><a href="/arenda-bytovok-v-istre/">Истре</a><a href="/arenda-bytovok-v-podolske/">Подольске</a><a href="/arenda-bytovok-v-vidnom/">Солнечногорске</a><a href="/arenda-bytovok-v-volokolamske/">Волоколамске</a><a href="/arenda-bytovok-v-pushkino/">Пушкино</a><a href="/arenda-bytovok-v-zelenograde/">Зеленограде</a><a href="/arenda-bytovok-v-balashihe/">Балашихе</a><a href="/arenda-bytovok-v-shchelkovo/">Щелково</a><a href="/arenda-bytovok-v-noginske/">Ногинске</a>
            </div>
          </div>
        </div>
      </div>

      <div class="rent_block">
        <div class="grid-container">
          <div class="rent_info">
            <div class="rent_heading">Условия аренды блок-контейнеров с доставкой</div>
            <div class="rent_text">Сдача блок-контейнера в аренду производится после первоначального платежа: доставка + вывоз + 3 месяц аренды. Минимальный срок - 1 месяц.</div>
          </div>
          <div class="grid-x">
            <div class="rent_item entity">
              <div class="rent_item-heading">Для юридических лиц:</div>
              <ul class="characteristic">
                <li>Заявка на электронную почту с указанием типа бытовка; </li>
                <li>Карточка организации; </li>
                <li>Доверенность от организации на получение товарно-материальных ценностей; </li>
                <li>Оплата по безналичному расчету; </li>
                <li>Залог не требуется!</li>
              </ul>
              <div class="rent_icon"></div>
            </div>
            <div class="rent_item individual">
              <div class="rent_item-heading">Для физических лиц:</div>
              <ul class="characteristic">
                <li>Аренда блок - контейнеров без залога;</li>
                <li>Копия паспорта с пропиской Москва или область; </li>
                <li>Оплата по безналичному расчету или наличными.</li>
              </ul>
              <div class="rent_icon"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tech-characteristics">
        <div class="grid-container">
          <div class="tech-characteristics-heading heading">Технические характеристики бытовок</div>
          <div class="tech-characteristics-wrapper">
            <div class="tech-characteristics-item">
              <div class="tech-characteristics-item-title">Стандартная бытовка</div>
              <div class="tech-characteristics-item-body">
                <div class="tech-characteristics-img"><img src="../assets/img/standartnaya-bytovka-texnicheskie-xarakteristiki.jpg" title="" alt=""></div>
                <div class="tech-characteristics-item-table">
                  <div class="tech-characteristics-item-tr">Характеристики стандартной строительной бытовки</div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Тип</div>
                    <div class="tech-characteristics-item-td">Вход с торца</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Габариты</div>
                    <div class="tech-characteristics-item-td">2,5 х 6 х 2,5 м</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Каркас</div>
                    <div class="tech-characteristics-item-td">Металлический</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Окно</div>
                    <div class="tech-characteristics-item-td">Рама деревянная (двойное остекление)</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Внешняя отделка</div>
                    <div class="tech-characteristics-item-td">Оцинкованный профлист</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Внутренняя отделка</div>
                    <div class="tech-characteristics-item-td">Деревянная, ПХВ вагонка, оргалит</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Напольное покрытие</div>
                    <div class="tech-characteristics-item-td">Линолеум</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Дверь наружная</div>
                    <div class="tech-characteristics-item-td">Деревянная (с замком, обитая жестью)</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Дверь межкомнатная</div>
                    <div class="tech-characteristics-item-td">ДВП</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Утепление</div>
                    <div class="tech-characteristics-item-td">Минеральная вата 50 мм.</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Электропроводка</div>
                    <div class="tech-characteristics-item-td">Стандарт 5 КВт (2 лампы, 1 светильник, 3 розетки двойные, 2 выключателя)</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Решетка на окне</div>
                    <div class="tech-characteristics-item-td">Есть</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tech-characteristics-item">
              <div class="tech-characteristics-item-title">Стандартная бытовка</div>
              <div class="tech-characteristics-item-body">
                <div class="tech-characteristics-img"><img src="../assets/img/standartnaya-bytovka-texnicheskie-xarakteristiki2.jpg" title="" alt=""></div>
                <div class="tech-characteristics-item-table">
                  <div class="tech-characteristics-item-tr">Характеристики стандартной строительной бытовки</div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Тип</div>
                    <div class="tech-characteristics-item-td">Вход с торца</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Габариты</div>
                    <div class="tech-characteristics-item-td">2,5 х 6 х 2,5 м</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Каркас</div>
                    <div class="tech-characteristics-item-td">Металлический</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Окно</div>
                    <div class="tech-characteristics-item-td">Рама деревянная (двойное остекление)</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Внешняя отделка</div>
                    <div class="tech-characteristics-item-td">Оцинкованный профлист</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Внутренняя отделка</div>
                    <div class="tech-characteristics-item-td">Деревянная, ПХВ вагонка, оргалит</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Напольное покрытие</div>
                    <div class="tech-characteristics-item-td">Линолеум</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Дверь наружная</div>
                    <div class="tech-characteristics-item-td">Деревянная (с замком, обитая жестью)</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Дверь межкомнатная</div>
                    <div class="tech-characteristics-item-td">ДВП</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Утепление</div>
                    <div class="tech-characteristics-item-td">Минеральная вата 50 мм.</div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Электропроводка</div>
                    <div class="tech-characteristics-item-td">Стандарт 5 КВт (2 лампы, 1 светильник, 3 розетки двойные, 2 выключателя) </div>
                  </div>
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">Решетка на окне</div>
                    <div class="tech-characteristics-item-td">Есть</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-x">
            <div class="tech-characteristics-link"><span class="btn_blue">Показать еще</span></div>
          </div>
        </div>
      </div>

<?php
include_once ("./templates/blocks/calc-choose.php");
?>

      <div class="advantages">
        <div class="grid-container">
          <div class="advantages_heading heading">Наши преимущества</div>
          <div class="advantages_slider slider-dots">
            <div class="advantages_item">
              <div class="advantages_item-img"><img src="../assets/img/ad1.png" alt="" title=""></div>
              <div class="advantages_item-content">Наша фирма занимается арендой бытовок с 2008 года, поэтому мы знаем что нужно нашему клиенту!</div>
            </div>
            <div class="advantages_item">
              <div class="advantages_item-img"><img src="../assets/img/ad2.png" alt="" title=""></div>
              <div class="advantages_item-content">
                Оплату за аренду
                и доставку бытовки
                можно производить
                по безналичному
                и наличному расчету.
              </div>
            </div>
            <div class="advantages_item">
              <div class="advantages_item-img"><img src="../assets/img/ad3.png" alt="" title=""></div>
              <div class="advantages_item-content">Для постоянных клиентов у нас действует гибкая система скидок как по аренде бытовки так и по доставке и вывоза её на склад.</div>
            </div>
          </div>
        </div>
      </div>

        <?php
        include_once ("./templates/blocks/main_photogallery.php");
        ?>

<div class="price">
            <div class="price_wrapper">
      <?php
      foreach($itemsRent as $key => $value){
        $itemsTitle = $value['title'];
        $itemsPrice = $value['price'];
include_once ("./templates/blocks/block-price.php");
      }
?>
</div>
</div>



      <div class="grid-container content">
      <?php
include_once ("./templates/blocks/seo-text_block.php");
?>
      </div>

<?php
include_once ("./templates/blocks/delivery_calc.php");
?>
      <div class="often-question">
        <div class="grid-container">
          <div class="often-question heading">Часто задаваемые вопросы</div>
          <div class="often-question-wrapper">
            <div class="often-question-item">
              <div class="often-question-ask">Сколько времени занимает доставка?</div>
              <div class="often-question-answer">Бытовку Вы получаете в день составления договора и оплаты заказа</div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Возможно ли доукомплектовывать бытовку?</div>
              <div class="often-question-answer">Да, мы предоставляем разнообразный выбор комплектации на Ваш выбор. Вся возможная комплектация доступна на сайте или Вы можете получить консультацию у нашего менеджера.</div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Возможна ли аренда бу бытовки без залога?</div>
              <div class="often-question-answer">Да, вариант аренды без залога возможен при условии аванса за 3 месяца. </div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Как мне вернуть бытовку по истечении срока аренды?</div>
              <div class="often-question-answer">При приблежении окончания срока аренды, наши менеджеры сами свяжутся с Вами, для обсуждения процесса возврата удобным для Вас способом.</div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Есть ли у Вас бытовки для проживания зимой?</div>
              <div class="often-question-answer">Да, наша компания предлагает бытовки, которые утеплены 100мм слоем утеплителя, на полу настелен линолеум, в них будет комфортно до -15 градусов. Так же возможна комплектация дополнительным электрооборудованием.</div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Какие дополнительные расходы могут возникнуть при аренде вагончика?</div>
              <div class="often-question-answer">Кроме оплаты аренды Вам необходимо оплатить доставку, если у вас нет собственного транспорта.</div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Нужен ли фундамент для установки или можно ставить на грунт?</div>
              <div class="often-question-answer">Мы рекомендуем устанавливать бытовку на фундаменте или на бетонных блоках. Однако, можно установить на ровную заасфальтированную площадку. </div>
            </div>
            <div class="often-question-item">
              <div class="often-question-ask">Можно ли выкупить арендованную бытовку? </div>
              <div class="often-question-answer">Вопрос покупки обговаривается индивидуально.</div>
            </div>
          </div>
        </div>
      </div>
      <?php
include_once ("./templates/blocks/order_form-block.php");
?> 
      <div class="main_article">
        <div class="grid-container">
          <div class="main_article-heading heading">Так же Вам могут быть полезны  <a href="#">  наши статьи</a><a class="mobile-more" href="#"></a></div>
          <div class="main_article-wrapper"><a class="main_article-item" href="/pokupka-ili-arenda-byitovok/">Покупать или арендовать?</a><a class="main_article-item" href="/xarakteristiki-byitovok/">Характеристики бытовок</a><a class="main_article-item" href="/naznachenie-byitovok/">Назначение бытовок</a><a class="main_article-item" href="/ispolzovanie-krana-manipulyatora/">Использование крана-манипулятора</a><a class="main_article-item" href="/kupit-byitovku-bu/">Купить бытовку бу</a><a class="main_article-item" href="/byitovka-sklad/">Бытовка склад</a><a class="main_article-item" href="/bytovka-prorabskaya-ofis/">Бытовка прорабская(офис)</a><a class="main_article-item" href="/byitovka-zhilaya/">Бытовка жилая</a><a class="main_article-item" href="/byitovka-stolovaya/">Бытовка столовая</a><a class="main_article-item" href="/byitovka-razdevalka/">Бытовка раздевалка</a><a class="main_article-item" href="/bytovka-post-oxrany/">Бытовка пост-охраны</a></div>
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
<!-- $itemsRent = array(
                1 => array(
                    'title' => 'Блок контейнер 2,5 х 6 м',
                    'price' => '452 Р/мес'
                ),
                2 => array(
                    'title' => 'Блок контейнер 2 х 3 м',
                    'price' => '52345 Р/мес'
                ),
                3 => array(
                    'title' => 'Блок контейнер 3000 х 6000 cм',
                    'price' => '25667 Р/мес'
                ),
                4 => array(
                    'title' => 'Блок контейнер 100 х 6000 cм',
                    'price' => '34 Р/мес'
                ),
                5 => array(
                    'title' => 'Блок контейнер 4 х 16 м',
                    'price' => '(по запросу)'
                )

            );
foreach ($itemsRent as $key => $value){
    echo '
        <div class="price_item">
            <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg"><img src="../assets/img/price.jpg"><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
            <div class="price_content">
            <div class="price_description">
                <div class="price_title">'.$value['title'].'</div>
                    <div class="price_text">
                    <div><span>Наружная обшивка: </span>металлический каркас оцинкованный профнастил С-8</div>
                    <div><span>Внутренняя отделка: </span>ДВП утепление 50 мм электрика</div>
                    </div>
                  </div>
                  <div class="price_summ"><span>'.$value['price'].'</span></div>
                </div>
              </div>
             ';
} -->
<div class="price_item">
    <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg"><img src="../assets/img/price.jpg"><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
    <div class="price_content">
    <div class="price_description">
        <div class="price_title"><?php echo $itemTitle ?></div>
        <div class="price_text">
        <div><span>Наружная обшивка: </span>металлический каркас оцинкованный профнастил С-8</div>
        <div><span>Внутренняя отделка: </span>ДВП утепление 50 мм электрика</div>
        </div>
    </div>
    <div class="price_summ"><span><?php echo $itemPrice ?></span></div>
    </div>
</div>
             
             
              
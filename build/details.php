<?php
include 'inc/data.php';
include 'inc/renderTemplate.php';
include 'inc/ending.php';
$MOUNT_SECOND = 2629743;
$key = $_GET["tarif"];
$idMounth = $_GET["mounth"];

foreach ($obj['tarifs'][$key]['tarifs'] as $item) {
    if($item['ID'] == $idMounth) {
        $res = $item;
    }
}
$date_sec = $res['new_payday'];
$dateStart = date("d.m.Y", $date_sec);
$dateEnd =  date("d.m.Y", $date_sec + $res['pay_period'] * $MOUNT_SECOND);
?>
<a class="back historyAPI" href="tariff.php?tarif=<?=$key;?>">Выбор тарифа</a>
<div class="content__list">
    <div class="card card--main">
        <div class="card__title">Тариф "<?=$obj['tarifs'][$key]['title'];?>"</div>
        <div class="card__content">
            <div class="card__price">Период оплаты — <?=$res['pay_period'];?> месяц<?=ending($res['pay_period']);?><br><?=$res['price']/$res['pay_period'] ;?> ₽/мес</div>
            <div class="card__wrap-text">
                <p class="card__text">Разовый платеж — <?=$res['price'];?> ₽</p>
                <p class="card__text">Со счета спишется — <?=$res['price'];?> ₽</p>
            </div>
            <div class="card__wrap-text">
                <p class="card__text card__text--gray">Вступит в силу — <?=$dateStart;?></p>
                <p class="card__text card__text--gray">Активно до — <?=$dateEnd;?></p>
            </div>
        </div>
        <div class="card__footer">
            <button class="card__btn">Выбрать</button>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>

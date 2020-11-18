<?php
include 'inc/data.php';
include 'inc/renderTemplate.php';
include 'inc/ending.php';
include 'inc/averagePrice.php';

$key = $_GET["tarif"];
$masTarifs = $obj['tarifs'][$key]['tarifs'];
usort($masTarifs, function($a, $b) {
    $a1 = $a['ID'];
    $b1 = $b['ID'];
    return $a1 == $b1 ? 0 : ($a1 > $b1 ? 1 : -1);
});
?>
<a class="back historyAPI" href="index.php">Тариф "<?=$obj['tarifs'][$key]['title'];?>"</a>
<div class="content__list">
    <?php
        foreach ($masTarifs as $key2 => $mounth) {
            $averagePrice = averagePrice($mounth);
            $ending = ending($mounth['pay_period']);
            renderTemplate('inc/template/card_mounth.php', ['mounth' => $mounth, 'averagePrice' => $averagePrice, 'key' => $key, 'key2' => $key2, 'ending' => $ending]);
        }
    ?>
</div>
<?php include 'inc/footer.php';?>

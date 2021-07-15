
<?php 

foreach($promos as $promo):
$promo_class = "card-group-promo";

    if(!empty($promo['modifier'])) {
        $promo_class = $promo_class . $promo['modifier'];
    }
?>

<div class="<?php echo $promo_class ?>">

    <?php if(!empty($promo["heading"])): ?>
        <div data-container-name="<?php echo $promo["heading"] ?>">
        <h2 class="card-group-promo__heading"><?php echo $promo["heading"] ?></h2>
    <?php endif; ?>
        <?php 
        foreach ($promo["cards"] as $card_title => $card_values) {
            include "../includes/card-group-promo__card.php"; 

            if ($card_title !== array_key_last($promo["cards"])) {
                echo "<hr class='card-group-promo__card-sepeartor' />";
            }
        }
        ?>
    <?php if(!empty($promo["heading"])): ?>
    </div>
    <?php endif; ?>
</div>

<?php 
endforeach;
?>
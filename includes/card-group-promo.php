<div class="card-group-promo--dark">
    <h2 class="card-group-promo__heading"><?php echo $promo["heading"] ?></h2>
        <?php 
        foreach ($promo["cards"] as $card_title => $card_values) {
            include "../includes/card-group-promo__card.php"; 

            if ($card_title !== array_key_last($promo["cards"])) {
                echo "<hr class='card-group-promo__card-sepeartor' />";
            }
        }
        ?>
</div>
<?php 

$card_class = "card-group-text-nav" . $card_values['bem_modifier'];

?>

<div class="col-sm-12 col-md-6 col-lg-4 px-0">
    <div class="<?php echo $card_class ?>">
        <a href='<?= $card_values["url"] ?>' class="card-group-text-nav__link">
            <h3 class="sr-only"><?= $card_title ?></h3>
            <div class="card-group-text-nav__body">
                <h3 class="tna-card__heading" aria-hidden="true"><?= $card_title ?></h3>
            </div>
        </a>
    </div>
</div>

<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link">
            <h3 class="sr-only"><?= $card_title ?></h3>
            <div class="card-group-secondary-nav__image">
                <picture>
                    <source media="(max-width: 768px)" srcset="<?= $card_values["src_under_768"] ?>">
                    <source media="(max-width: 991px)" srcset="<?= $card_values["src_768_to_991"] ?>">
                    <source media="(max-width: 1199px)" srcset="<?= $card_values["src_992_to_1199"] ?>">
                    <source media="(min-width: 1200px)" srcset="<?= $card_values["src_over_1199"] ?>">
                    <img src="<?= $card_values["src_under_768"] ?>" alt="<?= $card_values["image_alt"] ?>">
                </picture>
            </div>
            <div class="card-group-secondary-nav__body">
                <h3 class="tna-card__heading" aria-hidden="true"><?= $card_title ?></h3>
                <p><?= $card_values["description"] ?></p>
            </div>
        </a>
    </div>
</div>

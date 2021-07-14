<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card-group-record-summary">
        <a href='<?= $card_values["url"] ?>' class="card-group-record-summary__link">
            <h4 class="card-group-record-summary__heading"><?= $card_title ?></h4>
            <figure>
                <div class="card-group-record-summary__image">
                    <picture>
                        <source media="(max-width: 768px)" srcset="<?= $card_values["src_under_768"] ?>">
                        <source media="(max-width: 991px)" srcset="<?= $card_values["src_768_to_991"] ?>">
                        <source media="(max-width: 1199px)" srcset="<?= $card_values["src_992_to_1199"] ?>">
                        <source media="(min-width: 1200px)" srcset="<?= $card_values["src_over_1199"] ?>">
                        <img src="<?= $card_values["src_under_768"] ?>" alt="<?= $card_values["image_alt"] ?>" class="card-group-record-summary__image-fallback">
                    </picture>
                </div>
                <div class="card-group-record-summary__body">
                    <figcaption><?= $card_values["description"] ?></figcaption>
                </div>
            </figure>
        </a>
    </div>
</div>

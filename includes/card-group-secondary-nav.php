<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link"
        data-card-type="card-group-secondary-nav"
        data-card-position="0"
        data-card-title="<?= $card_title ?>"
        >
            <h3 class="sr-only"><?= $card_title ?></h3>
            <div class="card-group-secondary-nav__image">
                <picture>
                    <source media="(max-width: 768px)" srcset="https://via.placeholder.com/508x304">
                    <source media="(max-width: 991px)" srcset="https://via.placeholder.com/328x196">
                    <source media="(max-width: 1199px)" srcset="https://via.placeholder.com/288x172">
                    <source media="(min-width: 1200px)" srcset="https://via.placeholder.com/348x208">
                    <img src="https://via.placeholder.com/508x304" alt="<?= $card_values["image_alt"] ?>" class="card-group-secondary-nav__image-fallback">
                </picture>
            </div>
            <div class="card-group-secondary-nav__body">
                <h3 class="tna-card__heading" aria-hidden="true"><?= $card_title ?></h3>
                <p><?= $card_values["description"] ?></p>
            </div>
        </a>
    </div>
</div>

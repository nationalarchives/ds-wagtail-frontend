<li class="col-sm-12 col-md-6 col-lg-4 mb-3">
    <div class="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link">
            <div class="card-group-secondary-nav__body">
                <h3 class="card-group-secondary-nav__heading"><?= $card_title ?></h3>
                <p class="card-group-secondary-nav__paragraph"><?= $card_values["description"] ?></p>
            </div>
            <div class="card-group-secondary-nav__image">
            <picture>
                    <source media="(max-width: 768px)" srcset="https://via.placeholder.com/508x304">
                    <source media="(max-width: 991px)" srcset="https://via.placeholder.com/328x196">
                    <source media="(max-width: 1199px)" srcset="https://via.placeholder.com/288x172">
                    <source media="(min-width: 1200px)" srcset="https://via.placeholder.com/348x208">
                    <img src="https://via.placeholder.com/508x304" alt="<?= $card_values["image_alt"] ?>" class="card-group-secondary-nav__image-fallback">
                </picture>
            </div>
        </a>
    </div>
</li>
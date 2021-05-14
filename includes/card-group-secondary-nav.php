<div class="col-sm-12 col-md-6 col-lg-4">
    <article class="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link">
            <div class="card-group-secondary-nav__image">
                <picture>
                    <source media="(min-width: 48rem)" srcset="<?= $card_values["src_small"] ?>">
                    <source srcset="<?= $card_values["src_large"] ?>">
                    <img src="<?= $card_values["src"] ?>" alt="<?= $card_values["image_alt"] ?>">
                </picture>
            </div>
            <div class="card-group-secondary-nav__body">
                <h3 class="tna-card__heading"><?= $card_title ?></h3>
                <p><?= $card_values["description"] ?></p>
            </div>
        </a>
    </article>
</div>

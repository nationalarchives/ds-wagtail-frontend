<div class="col-sm-12 col-md-6 col-lg-4">
    <article class="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link">
            <div class="card-group-secondary-nav__image">
                <img src='/images/collection-explorer/<?= $card_values["image"] ?>' alt='<?= $card_title ?>' />
            </div>
            <div class="card-group-secondary-nav__body">
                <h3 class="tna-card__heading"><?= $card_title ?></h3>
                <p><?= $card_values["description"] ?></p>
            </div>
        </a>
    </article>
</div>

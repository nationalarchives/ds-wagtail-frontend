<li class="col-sm-12 col-md-6 col-lg-4 mb-3">
    <div class="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link"
        data-card-type="card-group-secondary-nav"
        data-card-position="<?= $card_values['data-card-position'] ?>"
        data-card-title="<?= $card_title ?>"
        >
            <div class="card-group-secondary-nav__body">
                <h3 class="card-group-secondary-nav__heading">
                    
                
                <!-- {# Visible on screen but hidden from assistive technology #} -->
                    <span aria-hidden="true"><?= $card_title ?> (<?= $card_values['start_year'] ?> - <?= $card_values['end_year'] ?>)</span>
                    <!-- {# Available to assistive technology #} -->
                    <span class="sr-only"><?= $card_title ?>. Covering years <time datetime="<?= $card_values['start_year'] ?>"><?= $card_values['start_year'] ?></time> to <time datetime="<?= $card_values['end_year'] ?>"><?= $card_values['end_year'] ?></time>.</span>
            </h3>
                <p class="card-group-secondary-nav__paragraph"><?= $card_values["description"] ?></p>
            </div>
            <div class="card-group-secondary-nav__image">
            <picture>
                    <source media="(max-width: 768px)" srcset="https://via.placeholder.com/508x304">
                    <source media="(max-width: 991px)" srcset="https://via.placeholder.com/328x196">
                    <source media="(max-width: 1199px)" srcset="https://via.placeholder.com/288x172">
                    <source media="(min-width: 1200px)" srcset="https://via.placeholder.com/348x208">
                    <img src="https://via.placeholder.com/508x304" alt="" role="presentation" class="card-group-secondary-nav__image-fallback">
                </picture>
            </div>
        </a>
    </div>
</li>
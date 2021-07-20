<li class="col-sm-12 col-md-6 col-lg-4 mb-3">
    <div class="card-group-secondary-nav" data-container-name="card-group-secondary-nav">
        <a href='<?= $card_values["url"] ?>' class="card-group-secondary-nav__link" data-card-type="<?= $card_values['card-type'] ?>" data-card-position="<?= $card_values['index'] ?>" data-card-title="<?= $card_values['heading'] ?>">
            <div class="card-group-secondary-nav__image">
                <picture>
                    <source media="(max-width: 768px)" srcset="<?= $card_values["src_under_768"] ?>">
                    <source media="(max-width: 991px)" srcset="<?= $card_values["src_768_to_991"] ?>">
                    <source media="(max-width: 1199px)" srcset="<?= $card_values["src_992_to_1199"] ?>">
                    <source media="(min-width: 1200px)" srcset="<?= $card_values["src_over_1199"] ?>">
                    <img src="<?= $card_values["src_under_768"] ?>" alt="" role="presentation" class="card-group-secondary-nav__image-fallback">
                </picture>
            </div>
            <div class="card-group-secondary-nav__body">
                <h3 class="card-group-secondary-nav__heading"><?= $card_values['heading'] ?></h3>
                <p class="card-group-secondary-nav__paragraph"><time datetime="<?php echo $card_values["datetime"]?>"><?php echo $card_values["date"]?></time></p>
                <p class="card-group-secondary-nav__paragraph"><?php echo $card_values["description"]?></p>
                <?php
                if(!empty($card_values['price'])) { ?>
                    <p class="card-group-secondary-nav__paragraph"><?php echo $card_values['price'] ?></p>
                <?php } ?>
            </div>
        </a>
    </div>
</li>

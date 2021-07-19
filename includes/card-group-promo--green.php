
<li class="card-group-promo--green">

    <?php if(!empty($promo_heading)): ?>
        <div data-container-name="<?= $promo_heading ?>">
            <h2 class="card-group-promo__heading"><?= $promo_heading ?></h2>
    <?php endif; ?>

    <div class="card-group-promo__card">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-6">
                    <picture>
                    <source media="(max-width: 576px)" srcset="https://via.placeholder.com/481x294">
                    <source media="(max-width: 768px)" srcset="https://via.placeholder.com/446x272">
                    <source media="(max-width: 991px)" srcset="https://via.placeholder.com/626x383">
                    <source media="(max-width: 1199px)" srcset="https://via.placeholder.com/492x301">
                    <source media="(min-width: 1200px)"srcset="https://via.placeholder.com/508x311">
                    <img src="https://via.placeholder.com/508x311" alt="" role="presentation" class="card-group-promo__card-image">
                    </picture>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-6">
                <h3 class="card-group-promo__card-heading"><a href="<?= $card_values['link'] ?>" data-card-type="card-group-promo" data-card-position="<?= $card_values['data-card-position'] ?>" data-card-title="<?php echo $card_title?>"><?= $card_title ?></a></h3>
                <p class="card-group-promo__card-paragraph"><?= $card_values["description"] ?></p>
            </div>
        </div>
    </div>
    <?php if(!empty($promo_heading)): ?>
        </div>
    <?php endif; ?>
</li>

<div class="card-group-promo__card">
    <div class='row'>
        <div class='col-md-12 col-lg-7 col-xl-6'>
            <a href="<?php echo $card_values['link'] ?>" class="card-group-promo__card-link">
                <picture class="mt-auto">
                    <source media="(max-width: 576px)" srcset="<?= $card_values["src_under_576"] ?>">
                    <source media="(max-width: 768px)" srcset="<?= $card_values["src_576_to_767"] ?>">
                    <source media="(max-width: 991px)" srcset="<?= $card_values["src_768_to_991"] ?>">
                    <source media="(max-width: 1199px)" srcset="<?= $card_values["src_992_to_1199"] ?>">
                    <source media="(min-width: 1200px)" srcset="<?= $card_values["src_over_1199"] ?>">
                    <img src="<?= $card_values["src_under_576"] ?>" alt="<?= $card_values["image_alt"] ?>" class="card-group-promo__card-image">
                </picture>
            </a>
        </div>
        <div class='col-md-12 col-lg-5 col-xl-6'>
            <h3 class="card-group-promo__card-heading"><a href="<?php echo $card_values['link'] ?>"><?php echo $card_title?></a></h3>
            <p class="card-group-promo__card-paragraph"><?php echo $card_values["description"]?></p>
        </div>
    </div>
</div>

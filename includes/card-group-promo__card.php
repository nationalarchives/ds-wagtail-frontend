
<div class="card-group-promo__card">
    <div class='row'>
        <div class='col-md-12 col-lg-7 col-xl-6'>
            <a href="<?php echo $card_values['link'] ?>" class="">
                <picture class="mt-auto">
                    <source media="(max-width: 576px)" srcset="https://via.placeholder.com/481x294">
                    <source media="(max-width: 768px)" srcset="https://via.placeholder.com/446x272">
                    <source media="(max-width: 991px)" srcset="https://via.placeholder.com/626x383">
                    <source media="(max-width: 1199px)" srcset="https://via.placeholder.com/492x301">
                    <source media="(min-width: 1200px)"srcset="https://via.placeholder.com/508x311">
                    <img src="https://via.placeholder.com/508x311" alt="<?= $card_values["image_alt"] ?>" class="card-group-promo__card-image">
                </picture>
            </a>
        </div>
        <div class='col-md-12 col-lg-5 col-xl-6'>
            <h3 class="card-group-promo__card-heading"><a href="<?php echo $card_values['link'] ?>"><?php echo $card_title?></a></h3>
            <p class="card-group-promo__card-paragraph"><?php echo $card_values["description"]?></p>
        </div>
    </div>
</div>

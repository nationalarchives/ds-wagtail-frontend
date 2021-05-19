
<div class="card-group-promo__card">
    <div class='row'>
        <div class='col-md-6 col-lg-5 col-xl-4'>
            <a href="<?php echo $card_values['link'] ?>">
                <img src="<?php echo $card_values["image"]?>" alt="<?php echo $card_values["image_alt"]?>" class='card-group-promo__card-image'/>
            </a>
        </div>
        <div class='col-md-6 col-lg-7 col-xl-8'>
            <h3 class="card-group-promo__card-heading"><a href="<?php echo $card_values['link'] ?>"><?php echo $card_title?></a></h3>
            <p><?php echo $card_values["description"]?></p>
        </div>
    </div>
</div>
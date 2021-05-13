<div class="col-sm-12 col-md-6 col-lg-4">
    <article class="card-group-secondary-nav">
        <a href="$card_url" class="card-group-secondary-nav__link">
            <div class="card-group-secondary-nav__image">
                <img <?php echo "src='/images/collection-explorer/$card_image' alt='$card_title'"?> />
            </div>
            <div class="card-group-secondary-nav__body">
                <h3 class="tna-card__heading"><?= $card_title ?></h3>
                <p><?= $card_values["description"] ?></p>
            </div>
        </a>
    </article>
</div>

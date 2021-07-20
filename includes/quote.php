<div class="quote">
    <div class="container">
        <img class="quote__icon" src="<?= $quote_values['icon']?>" alt="" />
        <h3 class="sr-only"><?php echo $quote_values['heading'] ?></h3>
        <?php
        if(!empty($quote_values['citation'])) { ?>
            <figure>
                <blockquote class="quote__container">
                    <p class="quote__text">
                        <?php echo $quote_values['text'] ?>
                    </p>
                </blockquote>
                <figcaption class="quote__citation">
                    <cite>
                        <?php echo $quote_values['citation'] ?>
                    </cite>
                </figcaption>
            </figure>
        <?php }

        else { ?>
            <blockquote class="quote__container">
                <p class="quote__text">
                    <?php echo $quote_values['text'] ?>
                </p>
            </blockquote>
        <?php } ?>
    </div>
</div>

<div class="callout" data-container-name="box-out">
    <div class="container">
        <h3 class="sr-only"><?php echo $callout_values['heading'] ?></h3>
        <p class="callout__standfirst">
            <?php echo $callout_values['standfirst-text'] ?>
        </p>

        <?php
            if(!empty($callout_values['links'])){ ?>
                <dl class="callout__list">
                    <?php
                    foreach ($callout_values['links'] as $callout_links => $callout_link) { ?>
                        <div class="callout__list-item">
                            <dt>
                                <h4 class="callout__link-heading">
                                    <a class="callout__link" href="<?php echo $callout_link['link'] ?>" data-link="<?php echo $callout_link['index'] ?>">
                                        <?php echo $callout_link['heading'] ?>
                                    </a>
                                </h4>
                            </dt>
                            <dd class="callout__link-text">
                                <?php echo $callout_link['text'] ?>
                            </dd>
                        </div>
                    <?php } ?>
                </dl>
        <?php } ?>
    </div>
</div>

<div class="box-out" data-container-name="box-out">
    <div class="container">
        <h3 class="sr-only"><?php echo $box_out_values['heading'] ?></h3>
        <p class="box-out__standfirst">
            <?php echo $box_out_values['standfirst-text'] ?>
        </p>

        <?php
            if(!empty($box_out_values['links'])){ ?>
                <dl class="box-out__list">
                    <?php
                    foreach ($box_out_values['links'] as $box_out_links => $box_out_link) { ?>
                        <div class="box-out__list-item">
                            <dt>
                                <h4 class="box-out__link-heading">
                                    <a class="box-out__link" href="<?php echo $box_out_link['link'] ?>" data-link="<?php echo $box_out_link['index'] ?>">
                                        <?php echo $box_out_link['heading'] ?>
                                    </a>
                                </h4>
                            </dt>
                            <dd class="box-out__link-text">
                                <?php echo $box_out_link['text'] ?>
                            </dd>
                        </div>
                    <?php } ?>
                </dl>
        <?php } ?>
    </div>
</div>

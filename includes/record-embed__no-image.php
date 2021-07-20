<div class="record-embed-no-image" data-container-name="record-embed-no-image">
    <img class="record-embed-no-image__icon" src="<?php echo $record_embed_no_image_values['icon'] ?>" alt="" />
    <p class="record-embed-no-image__icon-label" role="presentation" aria-hidden="true">
        <?php echo $record_embed_no_image_values['icon-label'] ?>
    </p>

    <h3 class="record-embed-no-image__heading">
        <?php echo $record_embed_no_image_values['heading'] ?>
        <span class="sr-only">
            <?php echo $record_embed_no_image_values['icon-label'] ?>
        </span>
    </h3>

    <p class="record-embed-no-image__text--inline">
        Reference: <?php echo $record_embed_no_image_values['reference'] ?>
    </p>

    <p class="record-embed-no-image__text--inline">
        Date created: <time datetime="<?php echo $record_embed_no_image_values['datetime'] ?>"><?php echo $record_embed_no_image_values['date-created'] ?></time>
    </p>

    <?php
    foreach ($record_embed_no_image_values['text'] as $record_embed_no_image_paragraphs => $record_embed_no_image_paragraph) { ?>
        <p class="record-embed-no-image__text">
            <?php echo $record_embed_no_image_paragraph ?>
        </p>
    <?php } ?>

    <?php
    foreach ($record_embed_no_image_values['buttons'] as $record_embed_buttons => $record_embed_button) { ?>
        <a class="tna-button--dark" href="<?php echo $record_embed_button['link'] ?>" data-link="<?php echo $record_embed_button['button-text'] ?>"><?php echo $record_embed_button['button-text'] ?></a>
    <?php } ?>

</div>

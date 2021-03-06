<article class="record-embed" data-container-name="record-embed">
    <div class="record-embed__image-container">
        <div class="container">
            <h3 class="record-embed__heading no-margin-top"><?php echo $record_embed_values['heading'] ?></h3>
        </div>
        <figure>
            <img class="record-embed__image" src="<?php echo $record_embed_values['image'] ?>" alt="<?php echo $record_embed_values['image-alt'] ?>">
            <figcaption>
                <a class="record-embed__image-viewer-link" href="<?php echo$record_embed_values['image-viewer-link'] ?>" data-link="<?php echo $record_embed_values['image-viewer-button-text'] ?>">
                    <?php echo $record_embed_values['image-viewer-button-text'] ?>
                </a>
            </figcaption>
        </figure>
    </div>
    <div class="record-embed__description">
        <div class="container">
            <p class="record-embed__text">Reference: <?php echo $record_embed_values['reference'] ?></p>
            <p class="record-embed__text">
                Date created: <time datetime="<?php echo $record_embed_values['datetime'] ?>"><?php echo $record_embed_values['date-created'] ?></time>
            </p>

            <div class="record-embed__text">
            <?php
            foreach ($record_embed_values['text'] as $record_embed_paragraphs => $record_embed_paragraph) { ?>
                <p><?php echo $record_embed_paragraph ?></p>
            <?php } ?>
            </div>

            <?php
            foreach ($record_embed_values['buttons'] as $record_embed_buttons => $record_embed_button) { ?>
                <span class="record-embed__button"><a class="tna-button-secondary--no-underline" href="<?php echo $record_embed_button["link"] ?>" data-link="<?php echo $record_embed_button["button-text"] ?>"><?php echo $record_embed_button["button-text"] ?></a></span>
            <?php } ?>
        </div>
    </div>
</article>

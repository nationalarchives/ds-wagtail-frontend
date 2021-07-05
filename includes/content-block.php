<div class="content-block">
    <h2 class="content-block__heading">
        <?php echo $content_block_values['heading'] ?>
    </h2>
    <div class="content-block__text">
    <?php
    foreach ($content_block_values['text'] as $content_paragraphs => $content_paragraph) { ?>
        <p>
            <?php echo $content_paragraph ?>
        </p>
    <?php } ?>
    </div>
</div>

<div class="content-block">
    <h2 class="content-block__heading">
        <?php echo $content_block_values['heading'] ?>
    </h2>
    <?php
    foreach ($content_block_values['text'] as $content_paragraphs => $content_paragraph) { ?>
        <p class="content-block__text">
            <?php echo $content_paragraph ?>
        </p>
    <?php } ?>
</div>

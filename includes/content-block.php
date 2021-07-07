<?php
    if(!empty($content_block_values['heading'])) { ?>
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
<?php }

    else { ?>
        <div class="content-block__bordered">
            <div class="container">
                <div class="content-block__text">
                    <?php
                    foreach ($content_block_values['text'] as $content_paragraphs => $content_paragraph) { ?>
                        <p class="mb-0">
                            <?php echo $content_paragraph ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php } ?>

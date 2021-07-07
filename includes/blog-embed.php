<div class="blog-embed">
    <img class="blog-embed__icon" src="<?php echo $blog_embed_values['icon'] ?>" alt="" />
    <p class="blog-embed__icon-label" role="presentation">
        <?php echo $blog_embed_values['icon-label'] ?>
    </p>

    <h2 class="blog-embed__heading">
        <?php echo $blog_embed_values['heading'] ?>
    </h2>

    <p class="blog-embed__date" >
        Published on <time datetime="<?php echo $blog_embed_values['datetime'] ?>"><?php echo $blog_embed_values['date'] ?></time>
    </p>

    <div class="blog-embed__image-container">
        <img class="blog-embed__image" src="<?php echo $blog_embed_values['image'] ?>" alt="<?php echo $blog_embed_values['image-alt'] ?>" />
    </div>

    <p class="blog-embed__icon-label sr-only" >
        <?php echo $blog_embed_values['icon-label'] ?>
    </p>

    <?php
    foreach ($blog_embed_values['text'] as $blog_embed_paragraphs => $blog_embed_paragraph) { ?>
        <p class="blog-embed__text">
            <?php echo $blog_embed_paragraph ?>
        </p>
    <?php } ?>

    <?php
    foreach ($blog_embed_values['buttons'] as $blog_embed_buttons => $blog_embed_button) { ?>
        <a class="tna-button--no-underline" href="<?php echo $blog_embed_button['link'] ?>"><?php echo $blog_embed_button['button-text'] ?></a>
    <?php } ?>

</div>

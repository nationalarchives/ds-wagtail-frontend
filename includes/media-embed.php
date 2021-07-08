<div class="media-embed">
    <div class="media-embed__overlay"></div>
    <div class="media-embed__content-panel">
        <img class="media-embed__icon" src="<?php echo $media_embed_values['icon'] ?>" alt="" />
        <p class="media-embed__icon-label" role="presentation">
            <?php echo $media_embed_values['icon-label'] ?>
        </p>

        <h2 class="media-embed__heading">
            <?php echo $media_embed_values['heading'] ?>
        </h2>
        <p class="media-embed__icon-label sr-only" >
            <?php echo $media_embed_values['icon-label'] ?>
        </p>
        <p class="media-embed__date">
            <time datetime="<?php echo $media_embed_values['datetime'] ?>"><?php echo $media_embed_values['date'] ?></time>
        </p>

        <p class="media-embed__description">
            <?php echo $media_embed_values['text'] ?>
        </p>

        <div class="media-embed__audio-container">
            <audio controls>
                <source src="<?php echo $media_embed_values['podcast-source'] ?>" type="audio/mp3">
                <p>Your browser doesn't support HTML5 audio. Here is a <a href="<?php echo $media_embed_values['podcast-source'] ?>">link to the audio</a>
                    instead.</p>
            </audio>
        </div>

        <div class="media-embed__transcript">
            <h3 class="media-embed__transcript-heading">Transcript</h3>
            <p class="media-embed__transcript-text"><?php echo $media_embed_values['transcript'] ?></p>
        </div>
    </div>
</div>

<div class="media-embed" style="background: url(<?php echo $audio_embed_values['image-background'] ?>)">
    <div class="media-embed__overlay"></div>
    <div class="media-embed__content-panel">
        <img class="media-embed__icon" src="<?php echo $audio_embed_values['icon'] ?>" alt="" />
        <p class="media-embed__icon-label" role="presentation" aria-hidden="true">
            <?php echo $audio_embed_values['icon-label'] ?>
        </p>

        <h3 class="media-embed__heading">
            <?php echo $audio_embed_values['heading'] ?>
            <span class="sr-only" >
                <?php echo $audio_embed_values['icon-label'] ?>
            </span>
        </h3>

        <p class="media-embed__date">
            <time datetime="<?php echo $audio_embed_values['datetime'] ?>"><?php echo $audio_embed_values['date'] ?></time>
        </p>

        <p class="media-embed__description">
            <?php echo $audio_embed_values['text'] ?>
        </p>

        <div class="media-embed__audio-container">
            <audio controls>
                <source src="<?php echo $audio_embed_values['podcast-source'] ?>" type="audio/mp3">
                <p>Your browser doesn't support HTML5 audio. Here is a <a href="<?php echo $audio_embed_values['podcast-source'] ?>">link to the audio</a>
                    instead.</p>
            </audio>
        </div>

        <div class="media-embed__transcript">
            <h4 class="media-embed__transcript-heading">Transcript</h4>
            <div class="media-embed__transcript-text">
                <?php
                foreach ($audio_embed_values['transcript'] as $transcript_paragraphs => $transcript_paragraph) { ?>
                    <p>
                        <?php echo $transcript_paragraph ?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

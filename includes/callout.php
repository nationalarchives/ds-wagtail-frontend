<div class="callout">
    <p class="callout__heading">
        <?php echo $callout_values['text'] ?>
    </p>

    <ul class="callout__list">
        <?php
        foreach ($callout_values['links'] as $callout_links => $callout_link) { ?>
            <li class="callout__list-item">
                <a class="callout__link" href="/">
                    <span class="callout__link-heading">
                        <?php echo $callout_link['title'] ?>
                    </span>
                    <p class="callout__link-text">
                        <?php echo $callout_link['summary'] ?>
                    </p>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

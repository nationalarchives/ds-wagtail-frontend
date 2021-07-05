<div class="callout">
    <div class="container">
        <p class="callout__standfirst">
            <?php echo $callout_values['standfirst-text'] ?>
        </p>

        <dl class="callout__list">
            <?php
            foreach ($callout_values['links'] as $callout_links => $callout_link) { ?>
                <div class="callout__list-item">
                    <dt>
                        <a class="callout__link" href="/">
                            <span class="callout__link-heading">
                                <?php echo $callout_link['heading'] ?>
                            </span>
                        </a>
                    </dt>
                    <dd class="callout__link-text">
                        <?php echo $callout_link['text'] ?>
                    </dd>
                </div>
            <?php } ?>
        </dl>
    </div>
</div>

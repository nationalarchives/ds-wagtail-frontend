<div class="research-resources" data-container-name="research-resources">
    <img class="research-resources__icon" src="<?php echo $research_resources_values['icon'] ?>" alt="" />
    <p class="research-resources__icon-label" role="presentation" aria-hidden="true">
        <?php echo $research_resources_values['icon-label'] ?>
    </p>

    <h3 class="research-resources__heading">
        <?php echo $research_resources_values['heading'] ?>
        <span class="sr-only" >
            <?php echo $research_resources_values['icon-label'] ?>
        </span>
    </h3>

    <p class="research-resources__description">
        <?php echo $research_resources_values['description'] ?>
    </p>

    <dl class="research-resources__list">
        <?php
        foreach ($research_resources_values['links'] as $research_resources_links => $research_resources_link) { ?>
            <div class="research-resources__list-item">
                <dt>
                    <h4 class="research-resources__link-heading">
                        <a class="research-resources__link" href="<?php echo $research_resources_link['link'] ?>" data-link="<?php echo $research_resources_link['index'] . " : " . $research_resources_link['heading'] ?>">
                            <?php echo $research_resources_link['heading'] ?>
                        </a>
                    </h4>
                </dt>
                <dd class="research-resources__link-text">
                    <?php echo $research_resources_link['text'] ?>
                </dd>
            </div>
        <?php } ?>
    </dl>
</div>

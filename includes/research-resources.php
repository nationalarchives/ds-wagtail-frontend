<div class="research-resources">
    <img class="research-resources__icon" src="<?php echo $research_resources_values['icon'] ?>" alt="" />
    <p class="research-resources__icon-label" role="presentation">
        <?php echo $research_resources_values['icon-label'] ?>
    </p>

    <h2 class="research-resources__heading">
        <?php echo $research_resources_values['heading'] ?>
    </h2>

    <p class="research-resources__icon-label sr-only" >
        <?php echo $research_resources_values['icon-label'] ?>
    </p>

    <p class="research-resources__description">
        <?php echo $research_resources_values['description'] ?>
    </p>

    <ul class="research-resources__list">
        <?php
        foreach ($research_resources_values['links'] as $research_resources_links => $research_resources_link) { ?>
            <li class="research-resources__list-item">
                <a class="research-resources__link" href="<?php echo $research_resources_link['link'] ?>">
                    <span class="research-resources__link-heading">
                        <?php echo $research_resources_link['heading'] ?>
                    </span>
                </a>
                <p class="research-resources__link-text">
                    <?php echo $research_resources_link['text'] ?>
                </p>
            </li>
        <?php } ?>
    </ul>
</div>

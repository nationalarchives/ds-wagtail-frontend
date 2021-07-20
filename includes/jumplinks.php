<nav class="jumplinks" data-container-name="jumplinks">
    <div class="container">
        <h2 class="jumplinks__heading">On this page</h2>
        <ol class="jumplinks__list">
            <?php
            foreach ($jumplinks as $jumplink) { ?>
                <li class="jumplinks__list-item">
                    <a class="jumplink" href="#<?php echo $jumplink['id'] ?>" data-link="<?php echo $jumplink['index'] . " : " . $jumplink['heading'] ?>">
                            <?php echo $jumplink['heading'] ?>
                    </a>
                </li>
            <?php } ?>
        </ol>
    </div>
</nav>

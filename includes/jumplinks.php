<div class="jumplinks">
    <div class="container">
        <h2 class="jumplinks__heading">On this page</h2>
        <ol class="jumplinks__list">
            <?php
            foreach ($jumplinks as $jumplink) { ?>
                <li class="jumplink__list-item">
                    <a class="jumplink" href="/">
                            <?php echo $jumplink ?>
                    </a>
                </li>
            <?php } ?>
        </ol>
    </div>
</div>

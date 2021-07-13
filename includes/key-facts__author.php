<div class="key-facts__author">
    <div class="container">
        <div class="row">
            <?php
            if(!empty($author['image'])) { ?>
                <div class="col-md-4 col-sm-12">
                    <div class="key-facts__author-image-container">
                        <?php require '../includes/insights-badge.php' ?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="key-facts__author-info">
                        <h3 class="key-facts__author-info-heading"><?php echo $author['author'] ?></h3>
                        <p class="key-facts__author-info-text"><?php echo $author['author-info'] ?></p>
                    </div>
                </div>
            <?php }

            else { ?>
                <div class="col-md-12">
                    <div class="key-facts__author-info--no-margin-left">
                        <h3 class="key-facts__author-info-heading"><?php echo $author['author'] ?></h3>
                        <p class="key-facts__author-info-text"><?php echo $author['author-info'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


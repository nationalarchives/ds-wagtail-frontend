<div class="key-facts__author">
    <div class="container">
        <div class="row">
            <?php
            if(!empty($author['image'])) { ?>
                <div class="col-md-4 col-sm-12">
                    <div class="key-facts__author-image-container">
                        <img class="key-facts__author-image" src="<?= $author['image']?>" alt="" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="key-facts__author-info">
                        <h3><?php echo $author['author'] ?></h3>
                        <p><?php echo $author['author-info'] ?></p>
                    </div>
                </div>
            <?php }

            else { ?>
                <div class="col-md-12">
                    <div class="key-facts__author-info">
                        <h3><?php echo $author['author'] ?></h3>
                        <p><?php echo $author['author-info'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


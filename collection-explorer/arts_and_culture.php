<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <h2><?php echo $page['collection_highlights_heading'] ?></h2>
                <p><?php echo $page['collection_highlights_description'] ?></p>
                <div class="row">
                    <?php render_secondary_nav_cards($collection_highlights_cards); ?>
                </div>
                <?php require '../includes/card-group-promo.php' ?>
                <h2><?php echo $page['more_arts_and_culture_heading'] ?></h2>
                <p><?php echo $page['more_arts_and_culture_description'] ?></p>
                <div class="row">
                    <?php render_secondary_nav_cards($more_arts_and_culture_cards) ?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



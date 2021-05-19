<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../data/arts_and_culture_data.php' ?>
<?php require '../functions.php' ?>

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main>
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <h1><?php echo $page['collection_highlights_heading'] ?></h1>
                <p><?php echo $page['collection_highlights_description'] ?></p>
                <div class="row">
                    <?php render_nav_cards($collection_highlights_cards); ?>
                </div>
                <?php require '../includes/card-group-promo.php' ?>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



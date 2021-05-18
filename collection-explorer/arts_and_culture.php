<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../data/arts_and_culture_data.php' ?>

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main>
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <h1><?php echo $page['collection_highlights_heading'] ?></h1>
                <h2><?php echo $page['arts_and_culture_topics_heading'] ?></h2>
                <p><?php echo $page['arts_and_culture_topics_desc'] ?></p>
                <?php require '../includes/card-group-promo.php' ?>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



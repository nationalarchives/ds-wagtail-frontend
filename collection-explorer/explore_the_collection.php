<?php require '../data/explore_the_collection_data.php' ?>
<?php require '../functions.php' ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10" id="content">
                <h2><?php echo $page["topic_heading"] ?></h2>
                <p><?php echo $page["topic_description"] ?></p>
                <div class="row">
                    <?php render_nav_cards($topic_card_data); ?>
                </div>

                <h2><?php echo $page["time_heading"] ?></h2>
                <p><?php echo $page["time_description"] ?></p>
                <div class="row">
                    <?php render_nav_cards($time_card_data); ?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



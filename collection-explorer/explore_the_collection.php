<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../data/explore_the_collection_data.php' ?>

<?php require '../includes/head.php' ?>

<?php require '../includes/functions.php' ?>


<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10" id="content">
                <h2>Explore by topic</h2>
                <p>Discover highlights of The National Archives collections.</p>
                <?php render_nav_cards($topic_card_data); ?>

                <h2>Explore by time</h2>
                <p>Discover highlights of The National Archives collections.</p>
                <?php render_nav_cards($time_card_data); ?>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



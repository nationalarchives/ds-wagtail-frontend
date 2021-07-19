<?php require '../data/explore_by_time_period_data.php' ?>
<?php require '../functions.php' ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>

    <div class="container mt-4">
        <div class="row">
            <h2 class="sr-only"><?php echo $page['screen_reader_h2'] ?></h2>
            <ul class="card-group--list-style-none">
                <?php foreach ($time_card_data as $card_title => $card_values) {
                 include "../includes/card-group-secondary-nav-time-period.php";
                }?>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12" id="content">
                <h2><?php echo $page['other_filter_heading'] ?></h2>
                <ul class="card-group--no-flex">
                    <?php foreach ($promos as $card_title => $card_values) {
                     include "../includes/card-group-promo--green.php";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php require '../includes/footer.php' ?>

</body>
</html>



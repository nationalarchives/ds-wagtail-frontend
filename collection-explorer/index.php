<?php require '../data/explorer_index_data.php' ?>
<?php require '../functions.php' ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../includes/head.php' ?>
<?php require '../includes/explorer-analytics-json.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <div class="mt-4">
                <h2 class="sr-only"><?php echo $page['promo_card_screen_reader_heading'] ?></h2>
                    <?php include "../includes/card-group-promo.php"; ?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>


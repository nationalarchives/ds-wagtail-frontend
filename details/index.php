<?php require '../data/details_sample_data.php' ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">

    <?php require '../includes/hierarchy__local.php' ?>

    <div class="row no-gutters">

        <div class="col-xl-3 order-xl-2 specific-border-bottom-lg specific-sticky specific-bg-grey-5">
            <?php require '../includes/hierarchy__global.php' ?>
        </div>

        <div class="col-xl-9 order-xl-1 specific-padding-bottom-lg">
            <?php require '../includes/record_title.php' ?>
            <div class="container">
                <?php require '../includes/key-facts.php' ?>

                <h2>How to view this record</h2>

                <?php require '../includes/image-viewer-panel.php' ?>

                <?php require '../includes/record-access-options.php' ?>

                <h2>Description and record details</h2>

                <?php require '../includes/record-details.php' ?>

                <h2>Topics covered in this record</h2>

                <?php require '../includes/taxonomy-tags.php' ?>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../data/results_data.php' ?>
<?php require '../functions.php' ?>

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <div class="generic-intro">
                <p><?php echo $page['design_registers_description'] ?></p>
                </div>
                <div class="results">
                    <h2 class="sr-only">Results</h2>
                    <h3 class="sr-only">Options</h3>
                    <?php require '../includes/results-options.php' ?>
                    <div class="row">
                    <h3 class="sr-only">Items</h3>
                    <ul class="card-group--list-style-none">
                        <?php render_record_summary_cards($results_cards) ?>
                    </ul>
                    </div>
                </div>
                <h3 class="sr-only">Pagination</h3>
                <?php require '../includes/pagination.php' ?>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

<script src="/scripts/explorer-results.js"></script>

</body>
</html>



<!DOCTYPE html>
<html class="no-js" lang="en">

<?php $page_title = "Explore the collection" ?>

<?php require '../includes/head.php' ?>

<body class="template-homepage">

<?php require '../includes/header.php' ?>
<?php require '../includes/functions.php' ?>


<main>
    <div class="explorer-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php render_breadcrumbs([["Home", "/"], [$page_title, null]], "--white") ?>
                    <h1 class="explorer-header__title"><?php echo $page_title ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10" id="content">
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

<script type="text/javascript" src="/static/js/etna.js"></script>

</body>
</html>



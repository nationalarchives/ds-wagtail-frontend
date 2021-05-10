<!DOCTYPE html>
<html class="no-js" lang="en">

<?php

$content = array(
    "page_title" => "Explore the collection",
    "generic_intro_text" => "The National Archives holds over 24 million records relating to Britain and British history."
);

?>

<?php require '../includes/head.php' ?>

<body class="template-homepage">

<?php require '../includes/header.php' ?>
<?php require '../includes/functions.php' ?>


<main>
<<<<<<< HEAD
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

=======
    <?php require '../includes/generic_intro.php' ?>
>>>>>>> 10a5ba2e8f3aa13568e261d71f5242bb81fde0c6
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



<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../data/insights_shakespeare_data.php' ?>
<?php require '../functions.php' ?>

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <?php require '../includes/jumplinks.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <?php render_content_blocks($content_block_list); ?>
                <?php render_quotes($quote_list); ?>
                <?php render_callouts($callout_list); ?>
                <?php render_media_embeds($media_embed_list); ?>
                <?php  render_record_embeds($record_embed_list); ?>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



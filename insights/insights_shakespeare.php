<!DOCTYPE html>
<html class="no-js" lang="en">
<?php require '../includes/insights-analytics-json.php' ?>
<?php require '../data/insights_shakespeare_data.php' ?>
<?php require '../functions.php' ?>

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <?php require '../includes/hero-image.php' ?>
    <?php require '../includes/jumplinks.php' ?>
                <?php render_section_separator("Section 1: Lorem ipsum dolor sit amet", "section-1"); ?>
                <?php render_content_blocks($content_block_list); ?>
                <?php render_quotes($quote_list); ?>
                <?php render_box_outs($box_out_list); ?>
                <?php render_section_separator("Section 2: Lorem ipsum dolor sit amet", "section-2"); ?>
                <?php render_record_embeds_no_image($record_embed_no_image_list); ?>
                <?php render_audio_embeds($audio_embed_list); ?>
                <?php render_research_resources($research_resources_list) ?>
                <?php render_record_embeds($record_embed_list); ?>
                <?php render_section_separator("Section 3: Lorem ipsum dolor sit amet", "section-3"); ?>
                <?php render_blog_embeds($blog_embed_list) ?>
                <?php render_video_embeds($video_embed_list); ?>
                <div class="container">
                    <h3 class="related-content__heading"><?php echo $page['related_content_heading'] ?></h3>
                    <p><?php echo $page['related_content_description'] ?></p>
                    <div class="row">
                        <ul class="card-group--list-style-none">
                            <?php  render_related_content($related_content_list); ?>
                        </ul>
                    </div>
                </div>
                <?php require '../includes/key-facts__author.php' ?>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



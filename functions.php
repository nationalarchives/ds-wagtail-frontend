<?php

function render_secondary_nav_cards($card_list)
{
    $secondary_nav_index = 0;
    foreach ($card_list as $card_title => $card_values) {
        $card_values['data-card-position'] = $secondary_nav_index;
        $secondary_nav_index++;
        include "../includes/card-group-secondary-nav.php";
    }
}

function render_record_summary_cards($card_list)
{
    $summary_cards_index = 1; // There is an record with no image hardcoded at position 0 so this starts from index 1
    foreach ($card_list as $card_title => $card_values) {
        $card_values['data-card-position'] = $summary_cards_index;
        $summary_cards_index++;
        include "../includes/card-group-record-summary.php";
    }
}

function render_quotes($quotes)
{
    foreach ($quotes as $quote => $quote_values) {
        include "../includes/quote.php";
    }
}

function render_callouts($callout_list)
{
    foreach ($callout_list as $callout_title => $callout_values) {
        include "../includes/callout.php";
    }
}

function render_audio_embeds($audio_embed_list)
{
    foreach ($audio_embed_list as $audio_embed_title => $audio_embed_values) {
        include "../includes/media-embed__audio.php";
    }
}

function render_video_embeds($video_embed_list)
{
    foreach ($video_embed_list as $video_embed_title => $video_embed_values) {
        include "../includes/media-embed__video.php";
    }
}

function render_content_blocks($content_block_list)
{
    foreach ($content_block_list as $content_block_title => $content_block_values) {
        include "../includes/content-block.php";
    }
}

function render_record_embeds($record_embed_list)
{
    foreach ($record_embed_list as $record_embed_title => $record_embed_values) {
        include "../includes/record-embed.php";
    }
}

function render_record_embeds_no_image($record_embed_no_image_list)
{
    foreach ($record_embed_no_image_list as $record_embed_no_image_title => $record_embed_no_image_values) {
        include "../includes/record-embed__no-image.php";
    }
}

function render_research_resources($research_resources_list)
{
    foreach ($research_resources_list as $research_resources_title => $research_resources_values) {
        include "../includes/research-resources.php";
    }
}

function render_related_content($related_content_list)
{
    foreach ($related_content_list as $related_content_card => $card_values) {
        include "../includes/related-content.php";
    }
}

function render_blog_embeds($blog_embed_list)
{
    foreach ($blog_embed_list as $blog_embed_title => $blog_embed_values) {
        include "../includes/blog-embed.php";
    }
}

function render_section_separator($section_heading, $section_id){
    include "../includes/section-separator.php";
}

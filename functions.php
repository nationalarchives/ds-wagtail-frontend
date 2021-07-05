<?php

function render_secondary_nav_cards($card_list)
{
    foreach ($card_list as $card_title => $card_values) {
        include "../includes/card-group-secondary-nav.php";
    }
}

function render_record_summary_cards($card_list)
{
    foreach ($card_list as $card_title => $card_values) {
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

function render_media_embeds($media_embed_list)
{
    foreach ($media_embed_list as $media_embed_title => $media_embed_values) {
        include "../includes/media-embed.php";
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

function render_related_content($related_content_list)
{
    foreach ($related_content_list as $related_content_card => $card_values) {
        include "../includes/related-content.php";
    }
}

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

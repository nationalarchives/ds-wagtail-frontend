<?php

function render_secondary_nav_cards($card_list)
{
    foreach ($card_list as $card_title => $card_values) {
        include "../includes/card-group-secondary-nav.php";
    }
}

function render_text_nav_cards($card_list, $bem_modifier = '')
{
    foreach ($card_list as $card_title => $card_values) {
        $card_values['bem_modifier'] = $bem_modifier;
        include "../includes/card-group-text-nav.php";
    }
}

function render_record_summary_cards($card_list)
{
    foreach ($card_list as $card_title => $card_values) {
        include "../includes/card-group-record-summary.php";
    }
}

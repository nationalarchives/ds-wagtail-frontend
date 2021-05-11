<?php

function render_nav_cards($card_list) {
    $amount_of_cards = count($card_list);
    $card_number = 0;
    $output = "";

    $row_start_html = "<div class='row'>";
    $row_end_html = "</div>";

    foreach ($card_list as $card_title => $card_values) {

        $card_description = $card_values["description"];
        $card_url = $card_values["url"];
        $card_image = $card_values["image"];

        $card_number++;
        
        if($card_number == 1) {
            $output = $output . $row_start_html;
        }

        $output = $output . <<<HTML
                            <div class="col-md-12 col-lg-4">
                                <article class="card-group-secondary-nav">
                                    <a href="$card_url" class="card-group-secondary-nav__link">
                                        <div class="card-group-secondary-nav__image">
                                            <img src="/images/collection-explorer/$card_image"/>
                                        </div>
                                        <div class="card-group-secondary-nav__body">
                                            <h3>$card_title</h3>
                                            <p>$card_description</p>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            HTML;



        // End the row every 3 cards, or on the last card.                    
        if($card_number % 3 == 0 || $card_number == $amount_of_cards) {
            $output = $output . $row_end_html ;
        }

        // If not the last card, start a new row.
        if($card_number % 3 == 0 && $card_number != $amount_of_cards)  {
            $output = $output . $row_start_html ;
        }


    }

    echo $output;
}


?>
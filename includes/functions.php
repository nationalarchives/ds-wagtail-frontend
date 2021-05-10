<?php

function render_breadcrumbs(array $breadcrumbs = [["Home", "/"], ["Example", null]], string $color_modifier = "") {
    

    $link_class = "breadcrumbs__link" . $color_modifier;
    $current_page_class = "breadcrumbs__current" . $color_modifier;

    $output = <<<HTML
                    <div class="breadcrumbs">
                        <ol class="breadcrumbs__list">
                HTML;


    foreach ($breadcrumbs as $index => $breadcrumb) {
        $text = $breadcrumb[0];
        $url = $breadcrumb[1];
        
        if(is_null($url)) {
            $output = $output . <<<HTML
                            <li class="breadcrumbs__list-item">
                                <span class="$current_page_class">$text</span>
                            </li>
                        HTML;
        }
        else {
            $output = $output . <<<HTML
                            <li class="breadcrumbs__list-item">
                                <a class="$link_class" href="$url">$text</a>
                            </li>
                        HTML;
        }
    }
    

    $output = $output . <<<HTML
                        </ol>
                    </div>
                HTML;

    echo $output;
}
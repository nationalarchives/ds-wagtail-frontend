<?php

$page = [
    "title" => "Explore by time period",
    "other_filter_heading" => "More ways to explore"
];

$generic_intro = [
    'heading' => $page['title'],
    'text' => "Explore highlights from the collection by topics or time periods. Expertly hand-picked, a selection of the most important, unusual and interesting records held within The National Archives' 24 million records on Britain and British history."
];

$breadcrumbs = [
    "Home" => "/"
];

$time_card_data = [
    "Medieval (974 - 1485)" => [
        "description" => "Domesday Book, Magna Carta and the first printed document in England.",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/medieval.png",
        "src_under_768" => "/images/collection-explorer/cards/543/medieval.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/medieval.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/medieval.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/medieval.png",
        "image_alt" => "Part of a medieval painting several figures with their arms raised in prayer. One figure is a king. Another is a monk"
    ],
    "Early Modern (1485 - 1714)" => [
        "description" => "Elizabeth 1st’s seal, Drake’s letters and Shakespeare’s Will  ",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/early-modern.png",
        "src_under_768" => "/images/collection-explorer/cards/543/early-modern.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/early-modern.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/early-modern.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/early-modern.png",
        "image_alt" => "Photograph of golden carving depicting a person upon a throne"
    ],
    "Georgians (1714 - 1837)" => [
        "description" => "Dick Turpin’s indictment, Captain Cook’s journal and the US declaration of Independance ",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/empire-and-industry.png",
        "src_under_768" => "/images/collection-explorer/cards/543/empire-and-industry.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/empire-and-industry.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/empire-and-industry.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/empire-and-industry.png",
        "image_alt" => "Paining of a sail ship in good weather. Full sails and bow wave suggest it is moving at good pace."
    ],
    "Victorians (1837 - 1901)" => [
        "description" => "The Great Exhibition, Nelson’s funeral  and the trials of Oscar Wilde. ",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/victorians.png",
        "src_under_768" => "/images/collection-explorer/cards/543/victorians.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/victorians.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/victorians.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/victorians.png",
        "image_alt" => "Colourful painting of the Great Exhibition. Several figures can be seen including a number of performers."
    ],

    "Early 20th Century (1901 - 1918)" => [
        "description" => "SOS from the Titanic, Hitler’s passport and Windrush passenger lists.",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/20th-century.png",
        "src_under_768" => "/images/collection-explorer/cards/543/20th-century.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/20th-century.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/20th-century.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/20th-century.png",
        "image_alt" => "Drawn portrait of a young woman wearing a elegant hat"
    ],
    "Interwar (1918 - 1939)" => [
        "description" => "Eden’s resignation, railway timetables and the home front.",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/interwar.png",
        "src_under_768" => "/images/collection-explorer/cards/543/interwar.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/interwar.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/interwar.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/interwar.png",
        "image_alt" => "Photograph of several women at work in a factory. Two are looking at the camera."
    ],
    "Second World War (1939 - 1945)" => [
        "description" => "Dambusters operational records, Enigma engine and peace treaties. ",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/wwii.png",
        "src_under_768" => "/images/collection-explorer/cards/543/wwii.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/wwii.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/wwii.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/wwii.png",
        "image_alt" => "A concerned looking woman walks through rubble and destruction. She is holding a small child and followed by two more."
    ],
    "Postwar (1945 - 2000)" => [
        "description" => "Cold war espionage, Poll tax riots and Brexit.",
        "url" => "/",
        "src" => "/images/collection-explorer/cards/postwar.png",
        "src_under_768" => "/images/collection-explorer/cards/543/postwar.png",
        "src_768_to_991" => "/images/collection-explorer/cards/328/postwar.png",
        "src_992_to_1199" => "/images/collection-explorer/cards/288/postwar.png",
        "src_over_1199" => "/images/collection-explorer/cards/348/postwar.png",
        "image_alt" => "Colourful photograph of a group of fashionable young people on a high street in the 1960s"
    ],
];


$promos =

[
    [
        "modifier" => "--dark",
        "cards" => [
            "Explorer highlights by topic" => [
                "description" => "Browse highlights of the collection through topics including:
                
                <ul>
                    <li><a href='#'>Military and war</a></li>
                    <li><a href='#'>Family and identity</a></li>
                    <li><a href='#'>Crime, courts and justice</a></li>
                </ul>
                
                <a href='/collection-explorer/explore_by_topic.php'>View all topics</a>
                ",
                "link" => "/collection-explorer/explore_by_topic.php",
                "src_over_1199" => "https://via.placeholder.com/340x274",
                "src_992_to_1199" => "https://via.placeholder.com/357x288",
                "src_768_to_991" => "https://via.placeholder.com/314x253",
                "src_576_to_767" => "https://via.placeholder.com/478x385",
                "src_under_576" => "https://via.placeholder.com/478x385",
                "image_alt" => "Placeholder alt tag"
                ]
            ]
    ],
            ];
<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../data/explore_the_collection_data.php' ?>

<?php require '../includes/head.php' ?>

<?php
function render_nav_cards($card_list) {
    $amount_of_cards = count($card_list);
    $card_number = 0;

    foreach ($card_list as $card_title => $card_values) {

        // These are used by the include below.
        $card_description = $card_values["description"];
        $card_url = $card_values["url"];
        $card_image = $card_values["image"];

        $card_number++;

        // Open row on first card
        if($card_number == 1) {
            echo "<div class='row'>";
        }

        include "../includes/card-group-secondary-nav.php";

        // End the row on the last card.
        if($card_number == $amount_of_cards) {
            echo"</div>" ;
        }

    }
}

?>

<body>

<?php require '../includes/header.php' ?>

<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10" id="content">
                <h2><?php echo $page["topic_heading"] ?></h2>
                <p><?php echo $page["topic_description"] ?></p>
                <?php render_nav_cards($topic_card_data); ?>

                <h2><?php echo $page["time_heading"] ?></h2>
                <p><?php echo $page["time_description"] ?></p>
                <?php render_nav_cards($time_card_data); ?>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



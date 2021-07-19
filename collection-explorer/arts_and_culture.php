<!DOCTYPE html>
<html class="no-js" lang="en">
<?php require '../data/arts_and_culture_data.php' ?>
<?php require '../functions.php' ?>


<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>
<?php require '../includes/explorer-analytics-json.php' ?>
<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="content">
                <div data-container-name="<?php echo $page['collection_highlights_heading'] ?>">
                    <h2><?php echo $page['collection_highlights_heading'] ?></h2>
                    <p><?php echo $page['collection_highlights_description'] ?></p>
                    <div class="row">
                        <ul class="card-group--list-style-none">
                            <?php render_secondary_nav_cards($collection_highlights_cards); ?>
                        </ul>
                    </div>
                </div>
                <?php 
                 $promo_index = 0;
            
                foreach ($promos as $card_title => $card_values) {
                    $card_values['data-card-position'] = $promo_index;
                    $promo_index++;
                     include "../includes/card-group-promo--dark.php";
                    }
                    ?>

                <div data-container-name="<?php echo $page['more_arts_and_culture_heading'] ?>">    
                    <h2><?php echo $page['more_arts_and_culture_heading'] ?></h2>
                    <p><?php echo $page['more_arts_and_culture_description'] ?></p>
                    <div class="row">
                        <ul class="card-group--list-style-none">
                            <?php render_secondary_nav_cards($more_arts_and_culture_cards) ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require '../includes/footer.php' ?>

</body>
</html>



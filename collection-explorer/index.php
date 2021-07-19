<?php require '../data/explorer_index_data.php' ?>
<?php require '../functions.php' ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php require '../includes/head.php' ?>

<body>

<?php require '../includes/header.php' ?>
<?php require '../includes/explorer-analytics-json.php' ?>
<main id="maincontent">
    <?php require '../includes/generic_intro.php' ?>

    <div class="container mt-4">
       <div class="row">
        <h2 class="sr-only"><?php echo $page['promo_card_screen_reader_heading'] ?></h2>
            <ul class="card-group--no-flex">
            <?php 
            $promo_index = 0;
            
            foreach ($promos as $card_title => $card_values) {
                $card_values['data-card-position'] = $promo_index;
                $promo_index++;
                     include "../includes/card-group-promo--green.php";
                    }
                    ?>
            </ul>
       </div>
    </div>

</main>


<?php require '../includes/footer.php' ?>

</body>
</html>


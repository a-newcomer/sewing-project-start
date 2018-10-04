<?php
/**
 * Created by PhpStorm.
 * User: Ann
 * Date: 1/26/2017
 * Time: 5:27 PM
 * pricePerPiece = pricePerMeter*yardage-((pricePerMeter*yardage*discount)/100);
 * */
setlocale(LC_MONETARY, 'en_US');
$item_name = ( isset($_POST['kind']) ) ? $_POST['kind'] : '';
$price_per_meter = ( isset($_POST['price']) ) ? $_POST['price'] : '';
$metrage = ( isset($_POST['amount']) ) ? $_POST['amount'] : '';
$discount = ( isset($_POST['sales_percent']) ) ? $_POST['sales_percent'] : '';

(float)$price_per_piece = (float)$price_per_meter * (float)$metrage - (((float)$price_per_meter * (float)$metrage * (float)$discount)/100);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fabric Caculator Results</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Fabric Calculator</h1>
    <div>
    <p>You needed: <strong><?php echo $metrage; ?></strong> meters of <strong><?php echo $item_name; ?></strong>
        at: <strong>$<?php echo number_format((float)$price_per_meter, 2); ?></strong> per meter,
        discounted by <strong><?php echo $discount; ?></strong> percent.</p>
        <h4><p>This element of your project will cost:</p></h4><h2><p> $<?php echo number_format($price_per_piece,2); ?>.</p></h2>
    </div>
    </body>
</html>

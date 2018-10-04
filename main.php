<!DOCTYPE html>
<html>
<head>
    <title>Fabric Caculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <style>

    </style>
</head>
<body>

<h1>Fabric Calculator</h1>
<div style="width:65%; margin-bottom:30px;"><p>This is a calculator for sewing projects - For the moment, you enter the name of the fabric
        (like 'green flowery cotton') then the price per meter, the amount you need and the possible
        discount, and the program calculates the price of the element for you.
        </p>
    <p>When I know how to manipulate arrays and data bases, this will only be part of a program/script that should take a budget and calculate
        whether all the individual elements will fit in.</p>
</div>
<div id="main_table_div" style="border: 0px;">
<form method="POST" action="calculate.php">
    <table>
        <tr><td>Fabric Type:</td><td><input name="kind" type="text" width="70%"></td></tr>
        <tr><td>Fabric Price:</td><td><input name="price" type="text" width="35%"> dollars</td></tr>
        <tr><td>Fabric Metrage:</td><td><input name="amount" type="text" width="35%"> meters</td></tr>
        <tr><td>Discount Percentage:</td><td><input name="sales_percent" type="text" width="50"> %</td></tr>
        <tr><td> </td><td><input type="submit" value="Submit"></td></tr>
    </table>
</form>
</div>
</body>
</html>
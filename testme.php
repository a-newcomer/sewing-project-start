<?php

/*
 * By: Ann Newcomer
 * Date: 1/25/2017
 */

$this_is = 'variable name';
$radius = 5;
$volume = 23.54;
$are_you_looking = TRUE;
include_once "form.php";

echo "The radius is $radius, and the volume is $volume.<br>";

$first_name = $_POST['first'];
$last_name = $_POST['last'];

echo "This page was coded by $first_name $last_name.";
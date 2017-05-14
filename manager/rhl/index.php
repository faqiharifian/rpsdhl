<?php
require "../../env.php";

require(ROOTPATH."/models/rhl.php");

$rule = "manager";
$page = "rhl";

$rhl_cities = array();
$rhl_larges = array();
$rhl_cities_sum = array();
$rhl_larges_sum = array();

$color_larges = array();

if(empty($_POST['year'])){
    //last year
    $year = date("Y",strtotime("-1  year"));
}else{
    $year = $_POST['year'];
}
$rhl_per_year = get_rhl_per_year($year);

foreach ($rhl_per_year as $cities){
    $rhl_cities[] = $cities['name'];
}

foreach ($rhl_per_year as $larges){
    $rhl_larges[] = $larges['large'];
    $color_larges[] = "rgba(255, 99, 12, 1)";
}

$rhl_sum = get_rhl_sum();
foreach ($rhl_sum as $cities){
    $rhl_cities_sum[] = $cities['name'];
}

foreach ($rhl_sum as $larges){
    $rhl_larges_sum[] = $larges['large'];
    $color_larges[] = "rgba(255, 99, 12, 1)";
}

include(ROOTPATH."/view/template.php");
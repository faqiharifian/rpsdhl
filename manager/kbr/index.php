<?php
require "../../env.php";

require(ROOTPATH."/models/kbr.php");

$rule = "manager";
$page = "kbr";

$kbr_cities = array();
$kbr_units = array();
$kbr_larges = array();

$kbr_cities_sum = array();
$kbr_units_sum = array();
$kbr_larges_sum = array();

$color_units = array();
$color_larges = array();

if(empty($_POST['year'])){
    //last year
    $year = date("Y",strtotime("-1  year"));
}else{
    $year = $_POST['year'];
}
$kbr_per_year = get_kbr_per_year($year);

foreach ($kbr_per_year as $cities){
    $kbr_cities[] = $cities['name'];
}

foreach ($kbr_per_year as $units){
    $kbr_units[] = $units['unit'];
    $color_units[] = "rgba(255, 99, 132, 1)";
}

foreach ($kbr_per_year as $larges){
    $kbr_larges[] = $larges['large'];
    $color_larges[] = "rgba(255, 99, 12, 1)";
}

$kbr_sum = get_kbr_sum();

foreach ($kbr_sum as $cities){
    $kbr_cities_sum[] = $cities['name'];
}

foreach ($kbr_sum as $units){
    $kbr_units_sum[] = $units['unit'];
    $color_units[] = "rgba(255, 99, 132, 1)";
}

foreach ($kbr_sum as $larges){
    $kbr_larges_sum[] = $larges['large'];
    $color_larges[] = "rgba(255, 99, 12, 1)";
}

include(ROOTPATH."/view/template.php");
<?php
require "../../env.php";
require "../../models/kbr.php";

$rule = "manager";
$page = "kbr";


$kbr_cities = array();
$kbr_units = array();
$kbr_larges = array();

$color_units = array();
$color_larges = array();

if(empty($_POST['year'])){
    $year = 2015;
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


include(ROOTPATH."/view/template.php");

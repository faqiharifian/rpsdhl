<?php
require "../../env.php";

$page = "obit";
require(ROOTPATH."/models/obit.php");
require(ROOTPATH."/models/event.php");

$tmp_forestries = array();
$tmp_nonforestries = array();
foreach(get_average_per_sector_per_year() as $d){
    if($d['sector'] == 'forestry')
        $tmp_forestries[$d['year']] = $d['count'];
    else
        $tmp_nonforestries[$d['year']] = $d['count'];
}

$years = array();
$forestries = array();
$nonforestries = array();
$color_units = array();
$color_larges = array();
foreach(get_years() as $y){
    $years[] = $y['year'];
    $color_units[] = "rgba(255, 99, 132, 1)";
    $color_larges[] = "rgba(255, 99, 12, 1)";
    if(!isset($tmp_forestries[$y['year']]))
        $forestries[] = 0;
    else
        $forestries[] = $tmp_forestries[$y['year']];
    if(!isset($tmp_nonforestries[$y['year']]))
        $nonforestries[] = 0;
    else
        $nonforestries[] = $tmp_nonforestries[$y['year']];
}

$events = get_events();
$year = isset($_GET['year']) ? $_GET['year'] : $years[sizeof($years)-1];
$id_event = isset($_GET['id_event']) ? $_GET['id_event'] : 3;
$event = "";
foreach($events as $e){
    if($e['id_event'] == $id_event){
        $event = $e['name'];
        break;
    }
}

$avg_per_sector_per_year = get_average_per_sector_per_year();
$avg_per_event = get_average_per_event();
$avg_per_event_by_year = get_average_per_event_by_year($year);
$avg_per_year_by_event = get_average_per_year_by_event($id_event);
include(ROOTPATH."/view/template.php");
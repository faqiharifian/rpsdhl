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
foreach(get_years() as $y){
    $years[] = $y['year'];
    if(!isset($tmp_forestries[$y['year']]))
        $forestries[] = 0;
    else
        $forestries[] = $tmp_forestries[$y['year']];
    if(!isset($tmp_nonforestries[$y['year']]))
        $nonforestries[] = 0;
    else
        $nonforestries[] = $tmp_nonforestries[$y['year']];
}

$events = get_average_per_event();
$chart2_label = array();
$chart2_data = array();
foreach(get_average_per_event() as $e){
    $chart2_label[] = $e['id_event'];
    $chart2_data[] = $e['count'];
}

$year = isset($_GET['year']) ? $_GET['year'] : $years[sizeof($years)-1];
$chart3_label = array();
$chart3_data = array();
foreach(get_average_per_event_by_year($year) as $d){
    $chart3_label[] = $d['id_event'];
    $chart3_data[] = $d['count'];
}

$id_event = isset($_GET['event']) ? $_GET['event'] : 3;
$chart4_label = array();
$chart4_data = array();
foreach(get_average_per_year_by_event($id_event) as $d){
    $chart4_label[] = $d['year'];
    $chart4_data[] = $d['count'];
}

$event = "";
foreach($events as $e){
    if($e['id_event'] == $id_event){
        $event = $e['name'];
        break;
    }
}

$event_information = get_events();
include(ROOTPATH."/view/template.php");
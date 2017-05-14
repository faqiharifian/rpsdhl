<?php
require "../../env.php";
require "../must_admin.php";

require(ROOTPATH."/models/obit.php");
require(ROOTPATH."/models/event.php");
$page = "obit";

$data_obit = get_obit();
$data_event = get_events();
include(ROOTPATH."/view/template.php");

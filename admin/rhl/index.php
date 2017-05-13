<?php
require "../../env.php";
require "../must_admin.php";

require(ROOTPATH."/models/rhl.php");
require(ROOTPATH."/models/city.php");
$page = "rhl";

$data_rhl = get_rhl();
$data_city = get_cities();
include(ROOTPATH."/view/template.php");

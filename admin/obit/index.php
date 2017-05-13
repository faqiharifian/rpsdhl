<?php
require "../../env.php";
require "../must_admin.php";

require(ROOTPATH."/models/obit.php");
$page = "obit";

$data_obit = get_obit();
include(ROOTPATH."/view/template.php");

<?php
require "../../env.php";
require "../must_admin.php";

require(ROOTPATH."/models/kbr.php");
require "../../models/city.php";

$page = "kbr";

$data_kbr = get_kbr();
$data_cities = get_cities();

include(ROOTPATH."/view/template.php");

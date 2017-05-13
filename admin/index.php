<?php
require "../env.php";
require "must_admin.php";

var_dump(password_hash("qwerty", PASSWORD_DEFAULT));die();
$page = "welcome";
include(ROOTPATH."/view/template.php");
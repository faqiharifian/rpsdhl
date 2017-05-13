<?php
require "../env.php";
require "must_guest.php";

header("Location: ".ROOT."/auth/login.php");
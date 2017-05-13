<?php
require "../env.php";
require (ROOTPATH."/models/users.php");
logout();
header('Location: '.ROOT);
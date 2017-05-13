<?php
require(ROOTPATH."/models/users.php");
$user = getUserLogin();
if($user == null || $user['rule'] != "manager")
    header("Location: ".ROOT);
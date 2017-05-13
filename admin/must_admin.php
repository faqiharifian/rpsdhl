<?php
require(ROOTPATH."/models/users.php");
$user = getUserLogin();
if($user == null || $user['rule'] != "admin")
    header("Location: ".ROOT);
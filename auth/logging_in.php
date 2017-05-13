<?php
require "../env.php";
require (ROOTPATH."/models/users.php");

if(login($_POST['email'], $_POST['password'])){
    $user = getUserLogin();
    if($user['rule'] == "admin")
        header("Location: ".ROOT."/admin");
    else if($user['rule'] == "manager")
        header("Location: ".ROOT."/manager");
}else{
    header("Location: ".ROOT);
}

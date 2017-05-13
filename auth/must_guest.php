<?php
require(ROOTPATH."/models/users.php");
if(isLoggedIn())
    if(getUserLogin()['rule'] == 'admin')
        header("Location: ".ROOT."/admin");
    else
        header("Location: ".ROOT."/manager");
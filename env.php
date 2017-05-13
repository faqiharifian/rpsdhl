<?php

// menentukan root folder
$root = $_SERVER['REQUEST_SCHEME'].'://'. $_SERVER['HTTP_HOST'] ;
define ("ROOT",  $root);
define('ROOTPATH', __DIR__);

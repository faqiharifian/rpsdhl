<?php
require "../../env.php";
require "../must_admin.php";
require "../../models/kbr.php";

if(!isset($_POST['SUBMIT'])){
    header("Location: index.php");
}else{

    store();
    header("Location: index.php");

}
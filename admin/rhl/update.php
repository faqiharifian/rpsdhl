<?php
require "../../env.php";
require "../must_admin.php";
require "../../models/rhl.php";

if(!isset($_POST['SUBMIT'])){
    header("Location: index.php");
}else{
    update_rhl();
    header("Location: index.php");
}
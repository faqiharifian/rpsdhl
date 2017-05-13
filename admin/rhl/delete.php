<?php
require "../../env.php";
require "../must_admin.php";
require "../../models/rhl.php";

if(!isset($_POST['SUBMIT'])){
    header("Location: index.php");
}else{
    delete_rhl();
    header("Location: index.php");
}
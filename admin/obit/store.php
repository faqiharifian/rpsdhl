<?php
require "../../env.php";
require "../must_admin.php";
require "../../models/obit.php";

if(!isset($_POST['SUBMIT'])){
    header("Location: index.php");
}else{
    store_obit();
    header("Location: index.php");

}
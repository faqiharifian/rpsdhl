<?php
/**
 * Created by PhpStorm.
 * User: ADIK
 * Date: 13/05/2017
 * Time: 16:19
 */

$kabupaten = $_POST['kabupaten'];
$tahun = $_POST['tahun'];
$unit = $_POST['unit'];
$luas = $_POST['luas'];

if(empty($kabupaten)||empty($tahun)||empty($unit)||$luas){
    $message = false;
}else{
    $message = true;
}
$rule = "manager";
$page = "kbr";
require "../view/template.php";
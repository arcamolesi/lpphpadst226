<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/DAL/agricultor.php";

$id = $_GET['id'];

$dalAgricultor = new DAL\Agricultor(); 
$dalAgricultor->Delete($id);

header("location: lstAgricultor.php");
?>

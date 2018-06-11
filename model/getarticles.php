<?php

$result_list = array();


$sql ="SELECT * FROM articles";
$result = $mysqli->query($sql);

$result_list = array();
while($item = $result->fetch_assoc()){
    $result_list[] = $item;}
//add model for articles
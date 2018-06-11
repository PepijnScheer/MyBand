<?php
$sql = "SELECT * FROM about";
$result = $mysqli->query($sql);


$result_list = array();
while($item = $result->fetch_assoc()){
    $result_list[] = $item;}
?>
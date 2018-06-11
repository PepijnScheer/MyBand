<?php
$sql = "SELECT * FROM header";
$result = $mysqli->query($sql);


$result_list = array();
while($item = $result->fetch_assoc()){
    $result_list[] = $item;}

<?php
include_once "connect.php";
include_once "hall.php";
function GethallByDate($date)
{
    $halls = array();
    $query = "SELECT place FROM `event` WHERE `date` = '$date' GROUP BY `place`";
    $conn = connection();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->bind_result($place);
    $stmt->store_result();
    while ($stmt->fetch()) {
        $hall = new hall($place);
        array_push($halls,$hall);
    }
    return $halls;
}
?>
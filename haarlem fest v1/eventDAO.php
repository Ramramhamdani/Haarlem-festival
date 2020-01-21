<?php
require "connect.php";
require "event.php";
private $events[];
private $event;
public function GetEventByDate($date)
{
    $query = "SELECT event,image,startTime,endTime,price,date FROM `event` WHERE `date` = '$date'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->bind_result($id,$title, $poster, $startTime, $endTime, $price, $date)
    $event = new event($id,$title, $poster, $startTime, $endTime, $price, $date);
    while ($stmt->fetch()) {
        array_push($events, $event);
    }
    return $events;
}
?>
<?php
include_once "connect.php";
include_once "event.php";
function GetEventByDate($date)
{
    $events = array();
    
    $query = "SELECT id,DATE_FORMAT(startTime, '%H:%i'), DATE_FORMAT(endTime, '%H:%i'), date, name, price, numTickets, img, place FROM `event` WHERE `date` = '$date' AND type = 'Jazz' ORDER BY `startTime`";
    $conn = connection();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->bind_result($id,$startTime, $endTime, $date, $name, $price, $numTickets, $img,$place);
    $stmt->store_result();
    while ($stmt->fetch()) {
        $event = new event($id,$startTime, $endTime, $date, $name, $price, $numTickets, $img, $place);
        array_push($events, $event);
    }
    return $events;
}
?>
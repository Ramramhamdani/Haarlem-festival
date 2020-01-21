<?php
require_once "eventDAO";

private $events[];

public function GetEventByDate($date)
{
    $events = GetEventByDate($date);
    return $events;
}
?>
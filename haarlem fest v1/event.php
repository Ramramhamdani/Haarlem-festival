<?php
class event
{
private $id;
private $title;
private $poster;
private $startTime;
private $endTime;
private $price;
private $date;

public function __construct($id, $title, $poster, $startTime, $endTime, $price, $date)
{
    $this->id = $id;
    $this->title = $title;
    $this->poster = $poster;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->price = $price;
    $this->date = $date;
}
}
?>
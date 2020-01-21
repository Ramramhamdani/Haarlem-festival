<?php
class event
{
    private $id;
    private $startTime;
    private $endTime;
    private $date;
    private $name;
    private $price;
    private $numTickets;
    private $img;
    private $place;

public function __construct($id,$startTime, $endTime, $date, $name, $price, $numTickets, $img, $place)
{
    $this->id = $id;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->date = $date;
    $this->name = $name;
    $this->price = $price;
    $this->numTickets = $numTickets;
    $this->img = $img;
    $this->place = $place;
}
public function GetID()
{
    return $this->id;
}
public function GetstartTime()
{
    return $this->startTime;
}public function GetendTime()
{
    return $this->endTime;
}public function Getdate()
{
    return $this->date;
}public function Getname()
{
    return $this->name;
}public function Getprice()
{
    return $this->price;
}public function GetnumTickets()
{
    return $this->numTickets;
}public function Getimg()
{
    return $this->img;
}
public function GetPlace()
{
    return $this->place;
}
}
?>
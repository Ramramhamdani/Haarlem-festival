<?php
class hall
{
    private $hall;

    public function __construct($hall)
    {
        $this->hall= $hall;
    }
    public function GetHall()
    {
        return $this->hall;
    }
}
?>
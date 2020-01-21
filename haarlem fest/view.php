<?php
include_once "eventDAO.php";
include_once "hallDAO.php";
$eventsView = array();
$date;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Sunday'])) {
        $date = '2020-07-26';
        viewContent($date);
    }
    elseif (isset($_POST['Monday'])) {
        $date = '2020-07-27';
        viewContent($date);
    }
    elseif (isset($_POST['Tuesday'])) {
        $date = '2020-07-28';
        viewContent($date);
    }
    elseif (isset($_POST['Wednsday'])) {
        $date = '2020-07-29';
        viewContent($date);
    }
    elseif(isset($_POST['checkoutBtn'])){
        //print("set");
        //print_r($_SESSION['tickets']);
        $id = $_POST['hiddenSe'];

        if(isset($_SESSION['tickets'])){
            //session_destroy();
            //print_r($id_array);
            $repeatedId = array_search($id, $_SESSION['tickets']);
            //print($repeatedId);
            $checkId = $_SESSION['tickets'][$repeatedId];
            //print($checkId);
            //print_r($_SESSION['tickets']);
            if($checkId == $id){ 
                print("you already booked this tickets");
                //unset($_SESSION['tickets'][$repeatedId]);
                exit();
            }
            else{
                array_push($_SESSION['tickets'], $id); 
                print("your ticket is booked");
                //print_r($_SESSION['tickets']);
            }
        } 
        else{
            $_SESSION['tickets'][0]=$id;
            //print_r($_SESSION['tickets']);
        }
    }
}
    
function GetEventByDateView($date)
{
    $eventsView = GetEventByDate($date);
    return $eventsView;
}
function GetHallByDateView($date)
{
    $hall = GetHallByDate($date);
    return $hall;
}
function viewContent($date)
{
    $eventsView = GetEventByDateView($date);
    foreach ($eventsView as $value) {
        $id = $value->GetID();
        $startTime = $value->GetstartTime();
        $endTime = $value->GetendTime();
        $date = $value->Getdate();
        $name = $value->Getname();
        $price = $value->Getprice();
        $numTickets = $value->GetnumTickets();
        $img = $value->Getimg();
        $place = $value->GetPlace();
        
        echo "<script>
        generateData('$id', '$startTime', '$endTime', '$date', '$name', '$price', '$numTickets', '$img', '$place');
        </script>";
    }
    $halls = GetHallByDateView($date);
    foreach ($halls as $value) {
        $hall = $value->GetHall();
        echo "<script>
        generatePlace('$hall');
        </script>";
    }
    echo "<script>
            viewPageContent();
        </script>";
}
?>
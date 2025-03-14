<?php
include('../forms/connection/connection.php');

$pack = $_GET['pack'];
$subscription_date = date("Y-M-d");
$one_month ="one_month";
$three_month ="three_month";
$one_year ="one_year";

switch ($pack) {
    case "$one_month":

        $valid_date= date('Y-m-d', strtotime($subscription_date. ' + 30 days'));

        $pack_validity ="one_month";
break;



case "$three_month":

    $valid_date= date('Y-m-d', strtotime($subscription_date. ' + 90 days'));
    $pack_validity ="three_month";

break;



case "$one_year":

    $valid_date= date('Y-m-d', strtotime($subscription_date. ' + 365 days'));
    $pack_validity ="one_year";

break;}
    



    $sql ="INSERT INTO `subscription` (`subscription_date`, `pack`, `validity`) VALUES (current_timestamp(), '$pack_validity', '$valid_date')";

    $result = mysqli_query($con, $sql);

    if($result){
       echo "successfully Activated";
       echo "<br>";    
       echo $pack_validity;
       echo "<br>"; 
       echo "Validity : ";   
       echo $valid_date;
    }

    else{
        echo "Sorry For Error Please contact shubham 91-9146268710 (shubham dighe)";
        echo "<br>this pack is already  exist";
    }

?>
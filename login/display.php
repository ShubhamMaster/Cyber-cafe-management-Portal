 <?php
 echo "<section>";

    include('displaynav.php');
   
 echo "</section>";
 include('../forms/connection/connection.php');
session_start();


    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!----------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
<!------------------------------------------------------------------>
</head>
<style>
  .table th,td{
    background-color: white;
   
  
   text-align: center;
   padding: 10px;
  }
  table{
    width: 98%;
    margin-left: auto;
  margin-right: auto;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  margin-top: 50px;
  }
  .btn{
    background-color: #009f02;
    width: 49px;
    padding: 5px;
    border-radius: 3px;
  }
  .btn:hover{
    background-color: #009f02;
    width: 49px;
    padding: 6px;
    border-radius: 2px;
  }
  .table th{
    font-weight: 800px;
    font-family: 'PT Serif', serif;
  }

  .ref{
    padding: 6px;
    float: left;
margin-right: 125px;
margin-bottom: 10px;
  }
  .ref:hover{
    background-color: green;
    padding: 5px;
  }
  .nrec{
color: red;
font-size: 20px;
text-align: center;
  }


  


</style>
<body>



<div class="content">
  <h1 align='center' style="padding:10px" class="well">Wellcome to our database</h1>
<?php
  

include('../forms/connection/connection.php');

// validation


$user_profile = $_SESSION['user_name'];
if($user_profile == true)
{

}

else{
  header('location:login_index.php');
}


$sql = "SELECT id, subscription_date, pack  FROM subscription ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($con, $sql);

            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
            
            
                     $subscription_date =  $row["subscription_date"];
                     $pack =  $row["pack"];
                    $one_month ="one_month";
                    $three_month ="three_month";
                    $one_year ="one_year";
             
                    switch ($pack) {
                        case "$one_month":


                            $today_date = date("Y-M-d");
                   
                            $valid_date= date('Y-M-d', strtotime($subscription_date. ' + 30 days'));
         
        
                            if($valid_date  >= $today_date)
                            {
                               
                              echo '<button onClick="window.location.reload();" class="ref">Refresh </button>
 <table  class="table" style="border-collapse: collapse; float:left;" border="1">
<tr>
<th>ID</th>
<th>Date</th>
<th>Form Type </th>
<th>Name</th>
<th>Open</th>
</tr>';
$type ="Income certificate";
$sql = "SELECT id,date, first_name, Form_type,middel_name, last_name  FROM data";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo"<tr> <td>". $row["id"];
    echo" <td>". $row["date"];
   echo "<td>" .$row["Form_type"];
    echo "<td>" .$row["first_name"]." ".$row["middel_name"]." ".$row["last_name"];
    echo "<td> <a href='view.php?id=$row[id]'><input type='button' value='View'' class='btn'></a></td> </tr>" ;
  }
} else {
  echo "<p class='nrec'>No record found !</p>";
}
mysqli_close($con);
        
                            }
                            
                            
                            else{
                                echo "<h2  style='color:green;text-align:center;'>Activation Date is : ".$subscription_date." </h2>";  
                                
                                echo "<h1 class='text' style='color:red'> Your Subscription Expired on </h1>";
                                echo "<h2  style='color:red;text-align:center;'> Date : ".$valid_date." </h2>";
                                include('sub/expire.php');
                                echo "<h2  style='color:green;text-align:center;'>Todays Date : ".$today_date." </h2>";  
                    
                    
                    
             
                    
                    
                    
                            }
                    

                            break;



                            case "$three_month":

                                $today_date = date("Y-M-d");
                   
                                $valid_date= date('Y-M-d', strtotime($subscription_date. ' + 90 days'));
             
            
                                if($valid_date  >= $today_date)
                                {
                                  echo '<button onClick="window.location.reload();" class="ref">Refresh </button>
                                  <table  class="table" style="border-collapse: collapse;" border="1">
                                 <tr>
                                 <th>ID</th>
                                 <th>Date</th>
                                 <th>Form Type </th>
                                 <th>Name</th>
                                 <th>Open</th>
                                 </tr>';
                                 $type ="Income certificate";
                                 $sql = "SELECT id,date, first_name, Form_type,middel_name, last_name  FROM data";
                                 $result = mysqli_query($con, $sql);
                                 if (mysqli_num_rows($result) > 0) {
                                   // output data of each row
                                   while($row = mysqli_fetch_assoc($result)) {
                                      echo"<tr> <td>". $row["id"];
                                     echo" <td>". $row["date"];
                                    echo "<td>" .$row["Form_type"];
                                     echo "<td>" .$row["first_name"]." ".$row["middel_name"]." ".$row["last_name"];
                                     echo "<td> <a href='view.php?id=$row[id]'><input type='button' value='View'' class='btn'></a></td> </tr>" ;

                                    
                                   }
                                 } else {
                                   echo "<p class='nrec'>No record found !</p>";
                                 }
                                 mysqli_close($con);
                                   
                                     
            
                                }
                                
                                
                                else{
                                    echo "<h2  style='color:green;text-align:center;'>Activation Date is : ".$subscription_date." </h2>";  
                                    
                                    echo "<h1 class='text' style='color:red'> Your Subscription Expired on </h1>";
                                    echo "<h2  style='color:red;text-align:center;'> Date : ".$valid_date." </h2>";
                                    include('sub/expire.php');
                                    echo "<h2  style='color:green;text-align:center;'>Todays Date : ".$today_date." </h2>";  
                        
                        
                        
                 
                        
                        
                        
                                }
                        
                                break;

                                

                                case "$one_year":


                                    $today_date = date("Y-M-d");
                   
                                    $valid_date= date('Y-M-d', strtotime($subscription_date. ' + 365 days'));
                 
                
                                    if($valid_date  >= $today_date)
                                    {
                                       
                                      echo '<button onClick="window.location.reload();" class="ref">Refresh </button>
                                      <table  class="table" style="border-collapse: collapse;" border="1">
                                     <tr>
                                     <th>ID</th>
                                     <th>Date</th>
                                     <th>Form Type </th>
                                     <th>Name</th>
                                     <th>Open</th>
                                     </tr>';
                                     $type ="Income certificate";
                                     $sql = "SELECT id,date, first_name, Form_type,middel_name, last_name  FROM data";
                                     $result = mysqli_query($con, $sql);
                                     if (mysqli_num_rows($result) > 0) {
                                       // output data of each row
                                       while($row = mysqli_fetch_assoc($result)) {
                                          echo"<tr> <td>". $row["id"];
                                         echo" <td>". $row["date"];
                                        echo "<td>" .$row["Form_type"];
                                         echo "<td>" .$row["first_name"]." ".$row["middel_name"]." ".$row["last_name"];
                                         echo "<td> <a href='view.php?id=$row[id]'><input type='button' value='View'' class='btn'></a></td> </tr>" ;
                                       }
                                     } else {
                                       echo "<p class='nrec'>No record found !</p>";
                                     }
                                     mysqli_close($con);     
                
                                    }
                                    
                                    
                                    else{
                                        echo "<h2  style='color:green;text-align:center;'>Activation Date is : ".$subscription_date." </h2>";  
                                        
                                        echo "<h1 class='text' style='color:red'> Your Subscription Expired on </h1>";
                                        echo "<h2  style='color:red;text-align:center;'> Date : ".$valid_date." </h2>";
                                        include('sub/expire.php');
                                        echo "<h2  style='color:green;text-align:center;'>Todays Date : ".$today_date." </h2>";  
                            
                            
                            
                     
                            
                            
                            
                                    }
                            


                                    break;


            
                        }
                }
            
                
            }
            else{
                echo "Error!";    
            }




















              

            
                

?>

</table>

          </div >
</body>
</html>
<html>
    <body >
   
    
<?php
session_start();

$user_profile = $_SESSION['user_name'];
if($user_profile == true)
{

}

else{
  header('location:login_index.php');
}

include('../forms/connection/connection.php');
include('displaynav.php');
echo " <div class='content' >";
echo " <div class='con' style='  margin-top: 100px;'>";
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
                               
                                echo "<h2  style='color:green;text-align:center;'>Activation Date is : ".$subscription_date." </h2>";  
        
                            echo "<h1 class='text' style='color:green'> Your Subscription is Valid until </h1>";
                            echo "<h2  style='color:red;text-align:center;'> Date : ".$valid_date." </h2>";

                            
                            include('sub/valid.php');
                            echo "<h2  style='color:green; padding-top: 10px;text-align:center;'>Todays Date : ".$today_date." </h2>";  
        
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
                                   
                                   
                                    echo "<h2  style='color:green;text-align:center;'>Activation Date is : ".$subscription_date." </h2>";  
                                echo "<h1 class='text' style='color:green'> Your Subscription is Valid until </h1>";
                                echo "<h2  style='color:red;text-align:center;'> Date : ".$valid_date." </h2>";
                                
                                include('sub/valid.php');
                                echo "<h2  style='color:green;text-align:center;'>Todays Date : ".$today_date." </h2>";  
            
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
                                       
                                        echo "<h2  style='color:green;text-align:center;'>Activation Date is : ".$subscription_date." </h2>";  
                
                                    echo "<h1 class='text' style='color:green'> Your Subscription is Valid until </h1>";
                                    echo "<h2  style='color:red;text-align:center;'> Date : ".$valid_date." </h2>";
                                    include('sub/valid.php');
                                    echo "<h2  style='color:green;text-align:center;'>Todays Date : ".$today_date." </h2>";             
                
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
</div>
    </div>
        </body>
        </html>

<?php
include('../../connection/connection.php');


// Variables to be inserted into the table
$type = "Non-creamy_layer_certificate";
$first_name = $_POST['first_name'];
$middel_name = $_POST['middel_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$vilage = $_POST['vilage'];
$pincode = $_POST['pincode'];



// img uplode




 
            $filename = $_FILES["adhar_front"]["name"];
            $filesize =$_FILES["adhar_front"]["size"];
            $tmpname =$_FILES["adhar_front"]["tmp_name"];
            $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
            $imageExtension = explode('.',$filename);
            $imageExtension = strtolower(end($imageExtension));
            
                $adhar_front = uniqid();
                $adhar_front .= '.'.$imageExtension;
                move_uploaded_file($tmpname, '../../../login/database/'.$adhar_front);


                $filename = $_FILES["adhar_back"]["name"];
                $filesize =$_FILES["adhar_back"]["size"];
                $tmpname =$_FILES["adhar_back"]["tmp_name"];
                $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                $imageExtension = explode('.',$filename);
                $imageExtension = strtolower(end($imageExtension));
                
                    $adhar_back = uniqid();
                    $adhar_back .= '.'.$imageExtension;
                    move_uploaded_file($tmpname, '../../../login/database/'.$adhar_back);
    
                    $filename = $_FILES["ration_card"]["name"];
                    $filesize =$_FILES["ration_card"]["size"];
                    $tmpname =$_FILES["ration_card"]["tmp_name"];
                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                    $imageExtension = explode('.',$filename);
                    $imageExtension = strtolower(end($imageExtension));
                    
                        $ration_card = uniqid();
                        $ration_card .= '.'.$imageExtension;
                        move_uploaded_file($tmpname, '../../../login/database/'.$ration_card);


                        $filename = $_FILES["leaving_certificate"]["name"];
                $filesize =$_FILES["leaving_certificate"]["size"];
                $tmpname =$_FILES["leaving_certificate"]["tmp_name"];
                $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                $imageExtension = explode('.',$filename);
                $imageExtension = strtolower(end($imageExtension));
                
                    $leaving_certificate = uniqid();
                    $leaving_certificate .= '.'.$imageExtension;
                    move_uploaded_file($tmpname, '../../../login/database/'.$leaving_certificate);



                   




                        $filename = $_FILES["tahasil_income_certificate"]["name"];
                        $filesize =$_FILES["tahasil_income_certificate"]["size"];
                        $tmpname =$_FILES["tahasil_income_certificate"]["tmp_name"];
                        $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                        $imageExtension = explode('.',$filename);
                        $imageExtension = strtolower(end($imageExtension));
                        
                            $tahasil_income_certificate = uniqid();
                            $tahasil_income_certificate .= '.'.$imageExtension;
                            move_uploaded_file($tmpname, '../../../login/database/'.$tahasil_income_certificate);





                            $filename = $_FILES["cast_certificate"]["name"];
                    $filesize =$_FILES["cast_certificate"]["size"];
                    $tmpname =$_FILES["cast_certificate"]["tmp_name"];
                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                    $imageExtension = explode('.',$filename);
                    $imageExtension = strtolower(end($imageExtension));
                    
                        $cast_certificate = uniqid();
                        $cast_certificate .= '.'.$imageExtension;
                        move_uploaded_file($tmpname, '../../../login/database/'.$cast_certificate);



// 


// INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`, `talathi_income_certificate`, `adhar_front`, `adhar_back`, `ration_card`, `leaving_certificate`, `bonafide`, `date`) VALUES ('$type', '$first_name', '$middel_name', '$last_name', '$gender ', '$contact ', '$email ', '$state', '$district ', '$city', '$vilage', '$pincode', '$adhar_front ', '$adhar_back', '$ration_card', '$leaving_certificate', '$bonafide', current_timestamp());



    // Sql query to be executed
    $sql = "INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`, `adhar_front`, `adhar_back`, `ration_card`, `leaving_certificate`, `tahasil_income_certificate`, `cast_certificate`,`date`) VALUES ( '$type', '$first_name', '$middel_name', '$last_name', '$gender', '$contact', '$email', '$state', '$district', '$city', '$vilage', '$pincode', '$adhar_front', '$adhar_back', '$ration_card', '$leaving_certificate', '$tahasil_income_certificate', '$cast_certificate',current_timestamp())";


    $result = mysqli_query($con, $sql);

    // Add a new trip to the Trip table in the database
    if ($result) {
        header("location:success.php?first_name=$_POST[first_name] $_POST[middel_name] $_POST[last_name],");
    } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($con);
    }







?>



</body>

</html>
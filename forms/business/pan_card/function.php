<?php
include('../../connection/connection.php');


// Variables to be inserted into the table
$type = "Pan card";
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
    
                    $filename = $_FILES["your_photo"]["name"];
                    $filesize =$_FILES["your_photo"]["size"];
                    $tmpname =$_FILES["your_photo"]["tmp_name"];
                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                    $imageExtension = explode('.',$filename);
                    $imageExtension = strtolower(end($imageExtension));
                    
                        $your_photo = uniqid();
                        $your_photo .= '.'.$imageExtension;
                        move_uploaded_file($tmpname, '../../../login/database/'.$your_photo);


                       



                    
// 


// INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`, `talathi_income_certificate`, `adhar_front`, `adhar_back`, `ration_card`, `leaving_certificate`, `bonafide`, `date`) VALUES ('$type', '$first_name', '$middel_name', '$last_name', '$gender ', '$contact ', '$email ', '$state', '$district ', '$city', '$vilage', '$pincode', '$adhar_front ', '$adhar_back', '$ration_card', '$leaving_certificate', '$bonafide', current_timestamp());



    // Sql query to be executed
    $sql = "INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`, `adhar_front`, `adhar_back`, `your_photo`, `date`) VALUES ( '$type', '$first_name', '$middel_name', '$last_name', '$gender', '$contact', '$email', '$state', '$district', '$city', '$vilage', '$pincode', '$adhar_front', '$adhar_back', '$your_photo', current_timestamp())";


    $result = mysqli_query($con, $sql);

    // Add a new trip to the Trip table in the database
    if ($result) {
        header("location:success.php?first_name=$_POST[first_name] $_POST[middel_name] $_POST[last_name],");
    } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($con).$sql;
    }







?>



</body>

</html>
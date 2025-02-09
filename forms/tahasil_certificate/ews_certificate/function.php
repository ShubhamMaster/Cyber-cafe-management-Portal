<?php
include('../../connection/connection.php');


// Variables to be inserted into the table
$type = "EWS Certificate";
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



                    $filename = $_FILES["home_strap"]["name"];
                    $filesize =$_FILES["home_strap"]["size"];
                    $tmpname =$_FILES["home_strap"]["tmp_name"];
                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                    $imageExtension = explode('.',$filename);
                    $imageExtension = strtolower(end($imageExtension));
                    
                        $home_strap = uniqid();
                        $home_strap .= '.'.$imageExtension;
                        move_uploaded_file($tmpname, '../../../login/database/'.$home_strap);


                        $filename = $_FILES["home_utara"]["name"];
                        $filesize =$_FILES["home_utara"]["size"];
                        $tmpname =$_FILES["home_utara"]["tmp_name"];
                        $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                        $imageExtension = explode('.',$filename);
                        $imageExtension = strtolower(end($imageExtension));
                        
                            $home_utara = uniqid();
                            $home_utara .= '.'.$imageExtension;
                            move_uploaded_file($tmpname, '../../../login/database/'.$home_utara);
    




                            $filename = $_FILES["your_photo"]["name"];
                            $filesize =$_FILES["your_photo"]["size"];
                            $tmpname =$_FILES["your_photo"]["tmp_name"];
                            $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                            $imageExtension = explode('.',$filename);
                            $imageExtension = strtolower(end($imageExtension));
                            
                                $your_photo = uniqid();
                                $your_photo .= '.'.$imageExtension;
                                move_uploaded_file($tmpname, '../../../login/database/'.$your_photo);
        


                                
                            $filename = $_FILES["satbara"]["name"];
                            $filesize =$_FILES["satbara"]["size"];
                            $tmpname =$_FILES["satbara"]["tmp_name"];
                            $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                            $imageExtension = explode('.',$filename);
                            $imageExtension = strtolower(end($imageExtension));
                            
                                $satbara= uniqid();
                                $satbara .= '.'.$imageExtension;
                                move_uploaded_file($tmpname, '../../../login/database/'.$satbara);


                                $filename = $_FILES["aat_a"]["name"];
                                $filesize =$_FILES["aat_a"]["size"];
                                $tmpname =$_FILES["aat_a"]["tmp_name"];
                                $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                                $imageExtension = explode('.',$filename);
                                $imageExtension = strtolower(end($imageExtension));
                                
                                    $aat_a = uniqid();
                                    $aat_a .= '.'.$imageExtension;
                                    move_uploaded_file($tmpname, '../../../login/database/'.$aat_a);

                                    $filename = $_FILES["tahasil_income_certificate"]["name"];
                                    $filesize =$_FILES["tahasil_income_certificate"]["size"];
                                    $tmpname =$_FILES["tahasil_income_certificate"]["tmp_name"];
                                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                                    $imageExtension = explode('.',$filename);
                                    $imageExtension = strtolower(end($imageExtension));
                                    
                                        $tahasil_income_certificate = uniqid();
                                        $tahasil_income_certificate .= '.'.$imageExtension;
                                        move_uploaded_file($tmpname, '../../../login/database/'.$tahasil_income_certificate);


                                    $filename = $_FILES["circle_ahaval"]["name"];
                                    $filesize =$_FILES["circle_ahaval"]["size"];
                                    $tmpname =$_FILES["circle_ahaval"]["tmp_name"];
                                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                                    $imageExtension = explode('.',$filename);
                                    $imageExtension = strtolower(end($imageExtension));
                                    
                                        $circle_ahaval = uniqid();
                                        $circle_ahaval .= '.'.$imageExtension;
                                        move_uploaded_file($tmpname, '../../../login/database/'.$circle_ahaval);




                                    $filename = $_FILES["father_photo"]["name"];
                            $filesize =$_FILES["father_photo"]["size"];
                            $tmpname =$_FILES["father_photo"]["tmp_name"];
                            $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                            $imageExtension = explode('.',$filename);
                            $imageExtension = strtolower(end($imageExtension));
                            
                                $father_photo = uniqid();
                                $father_photo .= '.'.$imageExtension;
                                move_uploaded_file($tmpname, '../../../login/database/'.$father_photo);





        

                        $filename = $_FILES["father_leaving_certificate"]["name"];
                        $filesize =$_FILES["father_leaving_certificate"]["size"];
                        $tmpname =$_FILES["father_leaving_certificate"]["tmp_name"];
                        $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                        $imageExtension = explode('.',$filename);
                        $imageExtension = strtolower(end($imageExtension));
                        
                            $father_leaving_certificate = uniqid();
                            $father_leaving_certificate .= '.'.$imageExtension;
                            move_uploaded_file($tmpname, '../../../login/database/'.$father_leaving_certificate);





                            $filename = $_FILES["grandfather_leaving_certificate"]["name"];
                    $filesize =$_FILES["grandfather_leaving_certificate"]["size"];
                    $tmpname =$_FILES["grandfather_leaving_certificate"]["tmp_name"];
                    $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
                    $imageExtension = explode('.',$filename);
                    $imageExtension = strtolower(end($imageExtension));
                    
                        $grandfather_leaving_certificate = uniqid();
                        $grandfather_leaving_certificate .= '.'.$imageExtension;
                        move_uploaded_file($tmpname, '../../../login/database/'.$grandfather_leaving_certificate);



// 


// INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`, `talathi_income_certificate`, `adhar_front`, `adhar_back`, `ration_card`, `leaving_certificate`, `bonafide`, `date`) VALUES ('$type', '$first_name', '$middel_name', '$last_name', '$gender ', '$contact ', '$email ', '$state', '$district ', '$city', '$vilage', '$pincode', '$adhar_front ', '$adhar_back', '$ration_card', '$leaving_certificate', '$bonafide', current_timestamp());



    // Sql query to be executed
    $sql = "INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`,  `adhar_front`, `adhar_back`, `ration_card`, `leaving_certificate`,  `father_leaving_certificate`, `grandfather_leaving_certificate`, `home_strap`, `home_utara`, `your_photo`, `father_photo`, `satbara`, `aat_a`, `tahasil_income_certificate`, `circle_ahaval`,`date`) VALUES ( '$type', '$first_name', '$middel_name', '$last_name', '$gender', '$contact', '$email', '$state', '$district', '$city', '$vilage', '$pincode', '$adhar_front', '$adhar_back', '$ration_card', '$leaving_certificate', '$father_leaving_certificate', '$grandfather_leaving_certificate', '$home_strap', '$home_utara', '$your_photo', '$father_photo', '$satbara', '$aat_a', '$tahasil_income_certificate', '$circle_ahaval', current_timestamp())";


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



<?php
include('../../connection/connection.php');

$type= "Income Certificate";
// Variables to be inserted into the table
$type ="Income certificate";
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

if($_FILES["talathi_income_certificate"]["error"] === 4){
    echo"
    img:
    error!";
    }
    else{
        $filename = $_FILES["talathi_income_certificate"]["name"];
        $filesize =$_FILES["talathi_income_certificate"]["size"];
        $tmpname =$_FILES["talathi_income_certificate"]["tmp_name"];
        $validImgExtension =['jpg', 'jepg', 'png', 'pdf'];
        $imageExtension = explode('.',$filename);
        $imageExtension = strtolower(end($imageExtension));
        
            $newImageName = uniqid();
            $newImageName .= '.'.$imageExtension;
            move_uploaded_file($tmpname, '../../../login/database/'.$newImageName);
      
    
    
    
// Sql query to be executed
$sql = "INSERT INTO `data` (`form_type`, `first_name`, `middel_name`, `last_name`, `gender`, `contact`, `email`, `state`, `district`, `city`, `vilage`, `pincode`, `talathi_income_certificate`, `date`) VALUES ( '$type', '$first_name', '$middel_name', '$last_name', '$gender', '$contact', '$email', '$state', '$district', '$city', '$vilage', '$pincode', '$newImageName',current_timestamp())";


$result = mysqli_query($con, $sql);

// Add a new trip to the Trip table in the database
if($result){
    header("location:success.php?first_name=$_POST[first_name] $_POST[middel_name] $_POST[last_name],");
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
}

  }



?>



</body>
</html>


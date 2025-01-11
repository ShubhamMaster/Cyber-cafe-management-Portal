<?php
include('forms/connection/connection.php');


// Variables to be inserted into the table

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];







    // Sql query to be executed
    $sql = "INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`, `date`) VALUES (NULL, '$name,', '$phone', '$email', '$subject', '$message', '2023-04-22 10:36:33.000000');";


    $result = mysqli_query($con, $sql);

    // Add a new trip to the Trip table in the database
    if ($result) {
        echo "<p style='color:green;'>";
       echo "<script> alert('Thank you for contact !')</script>";
    } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($con);
    }

    echo "</p>";





?>
<html>
    <body onload="redirect()">
    <script>
     function redirect () {
         var interval = setInterval(myURL, 100);
         var result = document.getElementById("result");
         result.innerHTML = "<b> The page will redirect after delay of 5 seconds setInterval() method.";
      }

      function myURL() {
         document.location.href = 'index.php';
         clearInterval(interval);
      }
</script>
    </body>
    </html>


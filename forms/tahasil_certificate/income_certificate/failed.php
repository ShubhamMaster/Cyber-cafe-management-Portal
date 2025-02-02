<?php




error_reporting(0);

echo "<h1 class='text'> After 5 seconds you will go to main page </h1>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>failed</title>
    <link rel="stylesheet" href="../../style_js/success_failed.css">
</head>
<body onload="redirect()">
<div class="box"> 

    <div class="error alert">
      <div class="alert-body">
      ERROR !
      </div>



      
  </div>
</div>



<script>
     function redirect () {
         var interval = setInterval(myURL, 5000);
         var result = document.getElementById("result");
         result.innerHTML = "<b> The page will redirect after delay of 5 seconds setInterval() method.";
      }

      function myURL() {
         document.location.href = '../../../index.php';
         clearInterval(interval);
      }
</script>
<style>
  .name{
    text-align: center;
    color: green;
  }
  .text{
    color: red;
    text-align: center;
    margin-top: 50px;
    
  }
</style>
</body>
</html>

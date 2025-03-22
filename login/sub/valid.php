<?php




error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expire</title>
    <link rel="stylesheet" href="sub/style_js/success_failed.css">
</head>

<style>
  





  .paybtn{
    display: flex;
 margin-left: auto;
    margin-right: auto;
   
     margin-top: 50px;
  
    background-color: lightgreen;
    border: none;padding: 10px;
border-radius: 5px;
   
    cursor: pointer;

}





.paybtn:hover{  
    display: flex;
 margin-left: auto;
    margin-left: auto;
    margin-right: auto;
   
    background-color: green;
    border: 1.1px solid black;

   
    cursor: pointer;
    box-shadow: 2px 2px 2px  2px (0.5,0.5,0.5,0.5); 

}
</style>
<body >
<div class="box">     

    <div class="success alert">
      <div class="sucess-body">
      ACTIVATED!
      </div>
  </div> 
</div>


<style>
  
  .text{
    color: green;
    text-align: center;
    margin-top: 50px;
    
  }
</style>

<?php
echo $date;

?>

</body>
</html>

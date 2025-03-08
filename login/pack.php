<?php
include('displaynav.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.columns{
  float: left;
  width: 33.3%;
  padding: 8px;
}




.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: black;
  color: white;
  font-size: 25px;
}


.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="text-align:center">Choose your Plans</h2>
<p style="text-align:center">By Shubham Dighe </p>

<div class="columns">
  <ul class="price">
    <li class="header">1 Month</li>
    <li class="grey"> 79 ₹/ month</li>
    <li>Dashboard access</li>
    <li>Contact access</li>
    <li>Unlimited Forms</li>
    <li style="colo:red;">Website improvement service</li>
    <li>Read only database</li>
<?php
$one_month="one_month";
echo " <li class='grey'><a href='payment.php?pack=$one_month' class='button'>79 ₹</a></li>";

?>



   
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#04AA6D">3 Month</li>
    <li class="grey"> 199 ₹ / 3 Month</li>
    <li>Dashboard access</li>
    <li>Contact access</li>
    <li>Unlimited Forms</li>
    <li>Website improvement service</li>
    <li>Read only database </li>
   
    <?php
$one_month="three_month";
echo " <li class='grey'><a href='payment.php?pack=$one_month' class='button'> 199 ₹</a></li>";

?>

  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header"> 1 Year</li>
    <li class="grey">799 ₹/ year</li>
    <li>Dashboard access</li>
    <li>Contact access</li>
    <li>Unlimited Forms</li>
    <li>Website improvement service</li>
    <li>Controlle whole database </li>
    
    <?php
$one_month="one_year";
echo " <li class='grey'><a href='payment.php?pack=$one_month' class='button'>799 ₹</a></li>";

?>
  </ul>
</div>

</body>
</html>



<?php









?>
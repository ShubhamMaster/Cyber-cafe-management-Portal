

<?php
    include('displaynav.php');
    include('../forms/connection/connection.php');
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
  body{


  }
  .table th,td{
    background-color: whitesmoke;
    
  
   text-align: center;
   padding: 10px;
  }
  table{
    width: 98%;
    margin-left: auto;
  margin-right: auto;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
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

  body{
    background-image: linear-gradient(to bottom right, rgb(248, 223, 177), rgb(247, 212, 136));
  }

</style>
<body>






<div class="content">
<?php









$activation="active";
if($activation == "active"){

?>



<h1 align='center' style="padding:10px" class="well">Wellcome to our database</h1>
 <table  class="table" style="border-collapse: collapse;  margin-top: 120px;" border="1">
 <button onClick="window.location.reload();" class="ref">Refresh </button>
<tr>
<th>ID</th>
<th>Date</th>
<th>Name</th>
<th>phone</th>
<th>email</th>
<th>subject</th>
<th>message</th>
</tr>


<?php
session_start();

$user_profile = $_SESSION['user_name'];
if($user_profile == true)
{

}

else{
  header('location:login_index.php');
}


$sql = "SELECT id,date, name, phone,email, subject, message  FROM contact";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo"<tr> <td>". $row["id"];
    echo" <td>". $row["date"];
   echo "<td>" .$row["name"];
    echo "<td>" .$row["phone"];
    echo "<td>" .$row["email"];
    echo "<td>" .$row["subject"];
    echo "<td>" .$row["message"]."</a></td> </tr>" ;
  }
} else {
  echo "<p class='nrec'>No record found !</p>";
}

mysqli_close($con);

}




                            




?>

</table>

</body>
</html>


</div>
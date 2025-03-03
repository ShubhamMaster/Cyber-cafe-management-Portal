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
    <title>View</title>
    <link rel="stylesheet" href="view.css">

</head>

<body>
<div class="content">

    <?php
    session_start();

    $user_profile = $_SESSION['user_name'];
    if($user_profile == true)
    {
    
    }
    
    else{
      header('location:login_index.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT id,Form_type, first_name, middel_name, last_name, gender, contact, email, state, district, city, vilage, pincode,talathi_income_certificate,ration_card, adhar_front, adhar_back, ration_card, leaving_certificate,bonafide,father_leaving_certificate, grandfather_leaving_certificate,tahasil_income_certificate,cast_certificate, home_strap,home_utara, your_photo, father_photo, satbara, aat_a, circle_ahaval, talathi_farmer_certificate, pan_card, bank_passbook, shop_photo,passport, police_clearance, father_voter_id, mother_voter_id   FROM data WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<h1 class='type'> " . $row["Form_type"] . "</h1><br>";


            echo "<div class='cont'>";

            echo "<p class='id'> ID :</p> <p class='id1'> " . $row["id"] . "</p><br>";

            echo "<h1 class='name'> Name : " . $row["first_name"] . " " . $row["middel_name"] . " " . $row["last_name"] . "</h1><br>";

            echo "<p class='left'> Gender :</p> <p class='right'> " . $row["gender"] . "</p><br><hr>";

            echo "<p class='left'> Contact Number :</p> <p class='right'> " . $row["contact"] . "</p><hr>";
            echo "<br>";
            echo "<p class='left'> Email :</p> <p class='right'> " . $row["email"] . "</p><br><hr>";

            echo "<p class='left'> State :</p> <p class='right'> " . $row["state"] . "</p><br><hr>";

            echo "<p class='left'> District:</p> <p class='right'> " . $row["district"] . "</p><br><hr>";

            echo "<p class='left'> City :</p> <p class='right'> " . $row["city"] . "</p><br><hr>";

            echo "<p class='left'> Vilage :</p> <p class='right'> " . $row["vilage"] . "</p><br><hr>";

            echo "<p class='left'> Pincode :</p> <p class='right'> " . $row["pincode"] . "</p><br>";


            echo "</div>";


            echo "<h1 class='type'> Documents </h1><br>";






            $type = $row["Form_type"];

            $income = "Income certificate";
            $domocile = "Domocile Certificate";
            $nationality = "Nationality Certificate";
            $cast = "Cast Certificate";
            $dongari = "Dongari Certificate";
            $non_creamy = "Non-creamy_layer_certificate";
            $ews = "EWS Certificate";
            $being_a_farmer = "Certificate of being a farmer";
            $business_adhar = "Business Adhar";
            $pan_card = "Pan card";
            $passport = "passport";
            $e_shram_card = "E-shram Card";
            $driving_lc = "Driving licence";
            $shopact_lc ="Shop-act licence";
            $police_clearance ="Character verification";
            $voter_id ="Voter ID Card";





            switch ($type) {
                case "$domocile":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
          
          <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
              border: none;
              color: white;
              padding: 12px 30px;
              cursor: pointer;
              margin-left:50px;
              margin-top:0px;
              display:inline-block;
              border-radius:5px;
              font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
          
              <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                  border: none;
                  color: white;
                  padding: 12px 30px;
                  cursor: pointer;
                  margin-left:50px;
                  margin-top:0px;
                  display:inline-block;
                  border-radius:5px;
                  font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
          
              <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                  border: none;
                  color: white;
                  padding: 12px 30px;
                  cursor: pointer;
                  margin-left:50px;
                  margin-top:0px;
                  display:inline-block;
                  border-radius:5px;
                  font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
          
              <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                  border: none;
                  color: white;
                  padding: 12px 30px;
                  cursor: pointer;
                  margin-left:50px;
                  margin-top:0px;
                  display:inline-block;
                  border-radius:5px;
                  font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";








                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>bonafide : </p><br> <img src='database/" . $row["bonafide"] . "' width='200px'  alt='img'>

<a href='database/" . $row["bonafide"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    margin-left:50px;
    margin-top:0px;
    display:inline-block;
    border-radius:5px;
    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;




                case "$income":

                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Talathi income certificate: </p><br> <img src='database/" . $row["talathi_income_certificate"] . "' width='200px'  alt='img'>
      
          <a href='database/" . $row["talathi_income_certificate"] . "' download='" . $id . " " . $row["first_name"] . " " . $row["middel_name"] . " " . $row["last_name"] . " " . "talathi_income_certificate  ' >
          <button
          style='background-color: DodgerBlue;
              border: none;
              color: white;
              padding: 12px 30px;
              cursor: pointer;
              margin-left:50px;
              margin-top:0px;
              display:inline-block;
              border-radius:5px;
              font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    break;


                case "$nationality":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
            
            <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                border: none;
                color: white;
                padding: 12px 30px;
                cursor: pointer;
                margin-left:50px;
                margin-top:0px;
                display:inline-block;
                border-radius:5px;
                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";








                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>bonafide : </p><br> <img src='database/" . $row["bonafide"] . "' width='200px'  alt='img'>
  
  <a href='database/" . $row["bonafide"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      margin-left:50px;
      margin-top:0px;
      display:inline-block;
      border-radius:5px;
      font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;



                case "$non_creamy":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
    
    <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        margin-left:50px;
        margin-top:0px;
        display:inline-block;
        border-radius:5px;
        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
    
        <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
    
        <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
    
        <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";








                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>tahasil_income_certificate: </p><br> <img src='database/" . $row["tahasil_income_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["tahasil_income_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "tahasil_income_certificate  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";







                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>cast_certificate: </p><br> <img src='database/" . $row["cast_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["cast_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "cast_certificate ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;


                case "$dongari":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
  
  <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      margin-left:50px;
      margin-top:0px;
      display:inline-block;
      border-radius:5px;
      font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
  
      <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          margin-left:50px;
          margin-top:0px;
          display:inline-block;
          border-radius:5px;
          font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
  
      <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          margin-left:50px;
          margin-top:0px;
          display:inline-block;
          border-radius:5px;
          font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'> last year Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
  
      <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          margin-left:50px;
          margin-top:0px;
          display:inline-block;
          border-radius:5px;
          font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";








                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>bonafide : </p><br> <img src='database/" . $row["bonafide"] . "' width='200px'  alt='img'>

<a href='database/" . $row["bonafide"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;











                case "$ews":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
  
  <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      margin-left:50px;
      margin-top:0px;
      display:inline-block;
      border-radius:5px;
      font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
  
      <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          margin-left:50px;
          margin-top:0px;
          display:inline-block;
          border-radius:5px;
          font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
  
      <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          margin-left:50px;
          margin-top:0px;
          display:inline-block;
          border-radius:5px;
          font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
  
      <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 30px;
          cursor: pointer;
          margin-left:50px;
          margin-top:0px;
          display:inline-block;
          border-radius:5px;
          font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";








                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>father_leaving_certificate: </p><br> <img src='database/" . $row["father_leaving_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["father_leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "father_leaving_certificate  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";







                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>grandfather_leaving_certificate: </p><br> <img src='database/" . $row["grandfather_leaving_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["grandfather_leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "grandfather_leaving_certificate  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";






                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>home strap: </p><br> <img src='database/" . $row["home_strap"] . "' width='200px'  alt='img'>

<a href='database/" . $row["home_strap"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "home_strap  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";




                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>home_utara: </p><br> <img src='database/" . $row["home_utara"] . "' width='200px'  alt='img'>

<a href='database/" . $row["home_utara"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "home_utara  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>your_photo: </p><br> <img src='database/" . $row["your_photo"] . "' width='200px'  alt='img'>

<a href='database/" . $row["your_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "your_photo  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";




                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>father_photo: </p><br> <img src='database/" . $row["father_photo"] . "' width='200px'  alt='img'>

<a href='database/" . $row["father_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "father_photo  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>satbara: </p><br> <img src='database/" . $row["satbara"] . "' width='200px'  alt='img'>

<a href='database/" . $row["satbara"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "satbara  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";


                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>८ अ : </p><br> <img src='database/" . $row["aat_a"] . "' width='200px'  alt='img'>

<a href='database/" . $row["aat_a"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "aat_a  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";


                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>tahasil_income_certificate: </p><br> <img src='database/" . $row["tahasil_income_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["tahasil_income_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "tahasil_income_certificate  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Circle Letter : </p><br> <img src='database/" . $row["circle_ahaval"] . "' width='200px'  alt='img'>

<a href='database/" . $row["circle_ahaval"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "circle_ahaval  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";


                    break;





                case "$cast":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
    
    <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        margin-left:50px;
        margin-top:0px;
        display:inline-block;
        border-radius:5px;
        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
    
        <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
    
        <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
    
        <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";








                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>father_leaving_certificate: </p><br> <img src='database/" . $row["father_leaving_certificate"] . "' width='200px'  alt='img'>
  
  <a href='database/" . $row["father_leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "father_leaving_certificate  ' ><button style='background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  margin-left:50px;
  margin-top:0px;
  display:inline-block;
  border-radius:5px;
  font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";







                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>grandfather_leaving_certificate: </p><br> <img src='database/" . $row["grandfather_leaving_certificate"] . "' width='200px'  alt='img'>
  
  <a href='database/" . $row["grandfather_leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "grandfather_leaving_certificate  ' ><button style='background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  margin-left:50px;
  margin-top:0px;
  display:inline-block;
  border-radius:5px;
  font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";


                    break;


                case "$being_a_farmer":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>

<a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    margin-left:50px;
    margin-top:0px;
    display:inline-block;
    border-radius:5px;
    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>

    <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        margin-left:50px;
        margin-top:0px;
        display:inline-block;
        border-radius:5px;
        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";




                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>satbara: </p><br> <img src='database/" . $row["satbara"] . "' width='200px'  alt='img'>

<a href='database/" . $row["satbara"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "satbara  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";


                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>८ अ : </p><br> <img src='database/" . $row["aat_a"] . "' width='200px'  alt='img'>

<a href='database/" . $row["aat_a"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "aat_a  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";




                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    margin-left:50px;
    margin-top:0px;
    display:inline-block;
    border-radius:5px;
    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>talathi_farmer_certificate: </p><br> <img src='database/" . $row["talathi_farmer_certificate"] . "' width='200px'  alt='img'>

<a href='database/" . $row["talathi_farmer_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    margin-left:50px;
    margin-top:0px;
    display:inline-block;
    border-radius:5px;
    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";




                    break;


                case "$business_adhar":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
        
        <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            margin-left:50px;
            margin-top:0px;
            display:inline-block;
            border-radius:5px;
            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
        
            <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                border: none;
                color: white;
                padding: 12px 30px;
                cursor: pointer;
                margin-left:50px;
                margin-top:0px;
                display:inline-block;
                border-radius:5px;
                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Pan card: </p><br> <img src='database/" . $row["pan_card"] . "' width='200px'  alt='img'>
        
            <a href='database/" . $row["pan_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                border: none;
                color: white;
                padding: 12px 30px;
                cursor: pointer;
                margin-left:50px;
                margin-top:0px;
                display:inline-block;
                border-radius:5px;
                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>bank passbook: </p><br> <img src='database/" . $row["bank_passbook"] . "' width='200px'  alt='img'>
        
            <a href='database/" . $row["bank_passbook"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                border: none;
                color: white;
                padding: 12px 30px;
                cursor: pointer;
                margin-left:50px;
                margin-top:0px;
                display:inline-block;
                border-radius:5px;
                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;




                case "$pan_card":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
                
                <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Self Photo: </p><br> <img src='database/" . $row["your_photo"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["your_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";





                    break;




                case "$passport":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
                        
                        <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                            border: none;
                            color: white;
                            padding: 12px 30px;
                            cursor: pointer;
                            margin-left:50px;
                            margin-top:0px;
                            display:inline-block;
                            border-radius:5px;
                            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
                        
                            <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                border: none;
                                color: white;
                                padding: 12px 30px;
                                cursor: pointer;
                                margin-left:50px;
                                margin-top:0px;
                                display:inline-block;
                                border-radius:5px;
                                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";


                    break;


                case "$e_shram_card":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
                                
                                <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                    border: none;
                                    color: white;
                                    padding: 12px 30px;
                                    cursor: pointer;
                                    margin-left:50px;
                                    margin-top:0px;
                                    display:inline-block;
                                    border-radius:5px;
                                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
                                
                                    <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                        border: none;
                                        color: white;
                                        padding: 12px 30px;
                                        cursor: pointer;
                                        margin-left:50px;
                                        margin-top:0px;
                                        display:inline-block;
                                        border-radius:5px;
                                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";





                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>bank passbook: </p><br> <img src='database/" . $row["bank_passbook"] . "' width='200px'  alt='img'>
                                
                                    <a href='database/" . $row["bank_passbook"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                        border: none;
                                        color: white;
                                        padding: 12px 30px;
                                        cursor: pointer;
                                        margin-left:50px;
                                        margin-top:0px;
                                        display:inline-block;
                                        border-radius:5px;
                                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;



                case "$driving_lc":

                    // 
                    echo "<div class='cont'>";
                    echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
                                        
                                        <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                            border: none;
                                            color: white;
                                            padding: 12px 30px;
                                            cursor: pointer;
                                            margin-left:50px;
                                            margin-top:0px;
                                            display:inline-block;
                                            border-radius:5px;
                                            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";
                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
                                        
                                            <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                                border: none;
                                                color: white;
                                                padding: 12px 30px;
                                                cursor: pointer;
                                                margin-left:50px;
                                                margin-top:0px;
                                                display:inline-block;
                                                border-radius:5px;
                                                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>Ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
                                        
                                            <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                                                border: none;
                                                color: white;
                                                padding: 12px 30px;
                                                cursor: pointer;
                                                margin-left:50px;
                                                margin-top:0px;
                                                display:inline-block;
                                                border-radius:5px;
                                                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";



                    // new
                    echo "<div class='cont'>";

                    echo "<p class='doctitle'>leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
                                        
                                            <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "leaving_certificate  ' ><button style='background-color: DodgerBlue;
                                                border: none;
                                                color: white;
                                                padding: 12px 30px;
                                                cursor: pointer;
                                                margin-left:50px;
                                                margin-top:0px;
                                                display:inline-block;
                                                border-radius:5px;
                                                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

                    echo "</div>";

                    break;


                    case "$shopact_lc":

                        // 
                        echo "<div class='cont'>";
                        echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
            
            <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                border: none;
                color: white;
                padding: 12px 30px;
                cursor: pointer;
                margin-left:50px;
                margin-top:0px;
                display:inline-block;
                border-radius:5px;
                font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
    
                        echo "</div>";
                        // new
                        echo "<div class='cont'>";
    
                        echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_back  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
    
                        echo "</div>";
    
                        // new
                        echo "<div class='cont'>";
    
                        echo "<p class='doctitle'>Pan card: </p><br> <img src='database/" . $row["pan_card"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["pan_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "pan_card  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
    
                        echo "</div>";
    
    
    
                        // new
                        echo "<div class='cont'>";
    
                        echo "<p class='doctitle'>Self_photo: </p><br> <img src='database/" . $row["your_photo"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["your_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "self_photo  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
    
                        echo "</div>";




                        // new
                        echo "<div class='cont'>";
    
                        echo "<p class='doctitle'>Shop photo: </p><br> <img src='database/" . $row["shop_photo"] . "' width='200px'  alt='img'>
            
                <a href='database/" . $row["shop_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "shop_photo  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
    
                        echo "</div>";
    
                        break;



                        case "$police_clearance":

                            // 
                            echo "<div class='cont'>";
                            echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
                
                <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                    border: none;
                    color: white;
                    padding: 12px 30px;
                    cursor: pointer;
                    margin-left:50px;
                    margin-top:0px;
                    display:inline-block;
                    border-radius:5px;
                    font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
        
                            echo "</div>";
                            // new
                            echo "<div class='cont'>";
        
                            echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_back  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
        
                            echo "</div>";
        
                            // new
                            echo "<div class='cont'>";
        
                            echo "<p class='doctitle'>Self photo: </p><br> <img src='database/" . $row["your_photo"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["your_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "your_photo  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
        
                            echo "</div>";
        
        
        
                            // new
                            echo "<div class='cont'>";
        
                            echo "<p class='doctitle'>Ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "ration_card  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
        
                            echo "</div>";
    
    
    
    
                            // new
                            echo "<div class='cont'>";
        
                            echo "<p class='doctitle'>leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "leaving_certificate  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
        
                            echo "</div>";
        




                            // new
                            echo "<div class='cont'>";
        
                            echo "<p class='doctitle'>police_certificate: </p><br> <img src='database/" . $row["police_clearance"] . "' width='200px'  alt='img'>
                
                    <a href='database/" . $row["police_clearance"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "police_clearance  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
        
                            echo "</div>";

                            break;
    











                            case "$voter_id":

                                // 
                                echo "<div class='cont'>";
                                echo "<p class='doctitle'>Adhar card front: </p><br> <img src='database/" . $row["adhar_front"] . "' width='200px'  alt='img'>
                    
                    <a href='database/" . $row["adhar_front"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_front  ' ><button style='background-color: DodgerBlue;
                        border: none;
                        color: white;
                        padding: 12px 30px;
                        cursor: pointer;
                        margin-left:50px;
                        margin-top:0px;
                        display:inline-block;
                        border-radius:5px;
                        font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
            
                                echo "</div>";
                                // new
                                echo "<div class='cont'>";
            
                                echo "<p class='doctitle'>Adhar card back </p><br> <img src='database/" . $row["adhar_back"] . "' width='200px'  alt='img'>
                    
                        <a href='database/" . $row["adhar_back"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "adhar_back  ' ><button style='background-color: DodgerBlue;
                            border: none;
                            color: white;
                            padding: 12px 30px;
                            cursor: pointer;
                            margin-left:50px;
                            margin-top:0px;
                            display:inline-block;
                            border-radius:5px;
                            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
            
                                echo "</div>";
            
                                // new
                                echo "<div class='cont'>";
            
                                echo "<p class='doctitle'>ration card: </p><br> <img src='database/" . $row["ration_card"] . "' width='200px'  alt='img'>
                    
                        <a href='database/" . $row["ration_card"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "ration_card  ' ><button style='background-color: DodgerBlue;
                            border: none;
                            color: white;
                            padding: 12px 30px;
                            cursor: pointer;
                            margin-left:50px;
                            margin-top:0px;
                            display:inline-block;
                            border-radius:5px;
                            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
            
                                echo "</div>";
            
            
            
                                // new
                                echo "<div class='cont'>";
            
                                echo "<p class='doctitle'>leaving certificate: </p><br> <img src='database/" . $row["leaving_certificate"] . "' width='200px'  alt='img'>
                    
                        <a href='database/" . $row["leaving_certificate"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "leaving_certificate  ' ><button style='background-color: DodgerBlue;
                            border: none;
                            color: white;
                            padding: 12px 30px;
                            cursor: pointer;
                            margin-left:50px;
                            margin-top:0px;
                            display:inline-block;
                            border-radius:5px;
                            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
            
                                echo "</div>";
        
        
        
        
                                // new
                                echo "<div class='cont'>";
            
                                echo "<p class='doctitle'>Self photo: </p><br> <img src='database/" . $row["your_photo"] . "' width='200px'  alt='img'>
                    
                        <a href='database/" . $row["your_photo"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "your_photo  ' ><button style='background-color: DodgerBlue;
                            border: none;
                            color: white;
                            padding: 12px 30px;
                            cursor: pointer;
                            margin-left:50px;
                            margin-top:0px;
                            display:inline-block;
                            border-radius:5px;
                            font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
            
                                echo "</div>";
            
    
    
    // new
    echo "<div class='cont'>";
            
    echo "<p class='doctitle'>father_voter_id: </p><br> <img src='database/" . $row["father_voter_id"] . "' width='200px'  alt='img'>

<a href='database/" . $row["father_voter_id"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "father_voter_id  ' ><button style='background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
margin-left:50px;
margin-top:0px;
display:inline-block;
border-radius:5px;
font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";

    echo "</div>";



     // new
     echo "<div class='cont'>";
            
     echo "<p class='doctitle'>mother_voter_id: </p><br> <img src='database/" . $row["mother_voter_id"] . "' width='200px'  alt='img'>
 
 <a href='database/" . $row["mother_voter_id"] . "' download='" . $id . " " . $row["first_name"] . "  " . $row["middel_name"] . " " . $row["last_name"] . " " . "mother_voter_id  ' ><button style='background-color: DodgerBlue;
 border: none;
 color: white;
 padding: 12px 30px;
 cursor: pointer;
 margin-left:50px;
 margin-top:0px;
 display:inline-block;
 border-radius:5px;
 font-size: 20px;'><i class='fa fa-download'></i> Download</button></a>";
 
     echo "</div>";


    
    
                                break;




                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }

            echo "</div>";










        }
    } else {
        echo "<h3 class='error'>No data found !</h3>";
    }

    mysqli_close($con);


    ?>
</div>
</html>
</body>
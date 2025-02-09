


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EWS certificate</title>
    <link rel="stylesheet" href="../../style_js/style.css">
    <script src="../../style_js/cities.js"></script>
</head>

<body>

<a href="../../../index.php" ><img src="home.png" alt="home" style="width:30px;display:flex;    margin: auto" ><p  style="width:30px;display:flex;    margin: auto">home</p></a>
    <div class="container">

        <div class="heading">
            <h1>EWS certificate (State & Central)</h1>
            <h3 >EWS दाखला </h3>
           
        </div>

        <form action="function.php" class="form" method="post" enctype="multipart/form-data">

            <div class="input_field">

                <label for="input"> First name <p class="p" style="font-size: 15px;"> (पहिले नाव) </p>  </label>
                <input type="text" class=" input" placeholder="Enter your first name" id="first_name" name="first_name"
                    required>
            </div>
            <hr class="hr_tag" color="black">

            <div class="input_field">
                <label for="input"> Middel name<p class="p" style="font-size: 15px;"> (वडिलांचे नाव) </p> </label>
                <input type="text" class=" input" placeholder="Enter your middel name" required id="middel_name"
                    name="middel_name">
            </div>
<hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> Last name<p class="p" style="font-size: 15px;"> (आड नाव ) </p> </label>
                <input type="text" class=" input" placeholder="Enter your last name" required id="last_name"
                    name="last_name">
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> Gender<p class="p" style="font-size: 15px;"> (लिंग ) </p> </label>

                <select name="gender" id="gender" class="input" required>
                    <option value="">Please select one…</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="non-binary">Non-Binary</option>
                </select>
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> Contact Number<p class="p" style="font-size: 15px;"> (फोन नंबर ) </p> </label>
                <input type="number" class=" input" placeholder="Enter your Contact Number" maxlength="10" required
                    id="contact" name="contact">
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> Email <p class="p" style="font-size: 15px;"> (ईमेल ) </p> <p style="color:green;"> (optional)</p></label>
                <input type="email" class=" input" placeholder="Enter your email" id="email" name="email">
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> State<p class="p" style="font-size: 15px;"> (राज्य ) </p> </label>

                <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control"
                    required></select>
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> District<p class="p" style="font-size: 15px;"> (जिल्हा ) </p> </label>
                <select id="state" name="district" class="form-control" required placeholder="first select district">
                    <option value="">First Select State</option>
                </select>
                <script language="javascript">print_state("sts");</script>
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> City<p class="p" style="font-size: 15px;"> (तालुका ) </p> </label>
                <input type="text" class=" input" placeholder="Enter your firs city" required id="city" name="city">
            </div>
            <hr class="hr_tag" color="black">
            <div class="input_field">
                <label for="input"> Vilage<p class="p" style="font-size: 15px;"> (गाव ) </p> </label>
                <input type="text" class=" input" placeholder="Enter your vilage" required id="vilage" name="vilage">
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <label for="input"> Pincode<p class="p" style="font-size: 15px;"> (पिनकोड ) </p> </label>
                <input type="number" class="input" maxlength="6" placeholder="Enter your pincode" required id="pincode"
                    name="pincode">
            </div>
            <hr class="hr_tag" color="black">
            


            <div class="input_field">
                <label for="input">Leaving certificate <p class="p" style="font-size: 15px;"> ( शाळा सोडल्याचा दाखला  ) </p> </label>
                <input type="file" class="input"   required id="leaving_certificate"
                    name="leaving_certificate">
            </div>
          <hr class="hr_tag" color="black">



          <div class="input_field">
                <label for="input"> Father Leaving Certificate <p class="p" style="font-size: 15px;"> (वडिलांचा शाळा सोडल्याचा दाखला) </p> </label>
                <input type="file" class="input"   required id="father_leaving_certificate"
                    name="father_leaving_certificate">
            </div>
            <hr class="hr_tag" color="black">
            
            
            <div class="input_field">
                <label for="input"> Grand-Father Leaving Certificate  <p class="p" style="font-size: 15px;"> (आजोबांचा शाळा सोडल्याचा दाखला (१९६०)) </p> </label>
                <input type="file" class="input"   required id="grandfather_leaving_certificate"
                    name="grandfather_leaving_certificate">
            </div>
            <hr class="hr_tag" color="black">


           
            <div class="input_field">
                <label for="input"> Adhar card front side<p class="p" style="font-size: 15px;"> (आधार कार्ड पुडील बाजु  ) </p> </label>
                <input type="file" class="input"   required id="adhar_front"
                    name="adhar_front">
            </div>
            <hr class="hr_tag" color="black">


            <div class="input_field">
                <label for="input"> Adhar card back side<p class="p" style="font-size: 15px;"> (आधार कार्ड मागील  बाजु) </p> </label>
                <input type="file" class="input"   required id="adhar_back"
                    name="adhar_back">
            </div>
            <hr class="hr_tag" color="black">


            <div class="input_field">
                <label for="input">Ration card<p class="p" style="font-size: 15px;"> (	रेशन कार्ड ) </p> </label>
                <input type="file" class="input"   required id="ration_card"
                    name="ration_card">
            </div>
            <hr class="hr_tag" color="black">

            <div class="input_field">
                <p style="color: white;border:2px solid green;margin:3px;padding:3px;background-color:green">Orignal</p>
                <label for="input">Home Straps<p class="p" style="font-size: 15px;"> (घरपट्टी  ) </p> </label>
                <input type="file" class="input"   required id="home_strap"
                    name="home_strap">
            </div>
            <hr class="hr_tag" color="black">

            <div class="input_field">
                <p style="color: white;border:2px solid green;margin:3px;padding:3px;background-color:green">Orignal</p>
                <label for="input">Home Utara<p class="p" style="font-size: 15px;"> (घराचा उतारा ) </p> </label>
                <input type="file" class="input"   required id="home_utara"
                    name="home_utara">
            </div>
            <hr class="hr_tag" color="black">





            <div class="input_field">
              
                <label for="input">Tasasil income certificate<p class="p" style="font-size: 15px;"> (तहसिलदार यांचा उत्पन्नाचा दाखला ) </p> </label>
                <input type="file" class="input"   required id="tahasil_income_certificate"
                    name="tahasil_income_certificate">
            </div>
            <hr class="hr_tag" color="black">



            <div class="input_field">
                
                <label for="input">your Passport-size photo<p class="p" style="font-size: 15px;"> (अर्जदाराचा  फोटो) </p> </label>
                <input type="file" class="input"   required id="your_photo"
                    name="your_photo">
            </div>
            <hr class="hr_tag" color="black">

            <div class="input_field">
                
                <label for="input">Father Passport-size photo<p class="p" style="font-size: 15px;"> (वडिलांचा फोटो) </p> </label>
                <input type="file" class="input"   required id="father_photo"
                    name="father_photo">
            </div>
            <hr class="hr_tag" color="black">





            <div class="input_field">
                <p style="color: white;border:2px solid green;margin:3px;padding:3px;background-color:green">Orignal</p>
                <label for="input">Latest 7/12<p class="p" style="font-size: 15px;"> (चालू ७/१२ ) </p> </label>
                <input type="file" class="input"   required id="satbara"
                    name="satbara">
            </div>
            <hr class="hr_tag" color="black">


<div class="input_field">
                <p style="color: white;border:2px solid green;margin:3px;padding:3px;background-color:green">Orignal</p>
                <label for="input">Latest 8A <p class="p" style="font-size: 15px;"> (चालू ८ अ  ) </p> </label>
                <input type="file" class="input"   required id="aat_a"
                    name="aat_a">
            </div>
            <hr class="hr_tag" color="black">
            
            <div class="input_field">
                <p style="color: white;border:2px solid green;margin:3px;padding:3px;background-color:green">Orignal</p>
                <label for="input"> Circle Letter<p class="p" style="font-size: 15px;"> (मंडळाधिकारी यांचे पत्र
 ) </p> </label>
                <input type="file" class="input"   required id="circle_ahaval"
                    name="circle_ahaval">
            </div>
            <hr class="hr_tag" color="black">

            
            
            <div class="input_field">
                <input type="submit" value="Resister" class="btn" maxlength="6" name="submit">
            </div>






           








        </form>

    </div>


</body>

</html
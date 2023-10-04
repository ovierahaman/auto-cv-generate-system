<?php
include_once("My_CV_dbo.php");
include_once("Login_dbo.php");

if(!isset($_SESSION['username'])){
	header("Location:Login.php");
}?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CV Template II</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
	<div id="content">
        <div class="resume-main">
            <div class="left-box">
                <br><br>
                <div class="profile">
                    <img src="<?php echo "$image";?>"class="left-top-image"></br>
                </div>
                <div class="content-box">
                <h2>Contact Info</h2>
                <hr class="hr1">
                <h3>Address: <br><?php echo " $address";?> </h3> <br>

                <h3>Phone Number: <br> <?php echo " $phone";?></h3> <br>

                <h3>Email Address : <br> <?php echo " $email";?></h3> <br>

                <h3>Language:</h3>
                <p class="p2">English</p>
                <div id="progress"></div>
                <p class="p2">Bangla</p>
                <div id="progress"></div>

                <br><br>
                <h2>My Skills</h2>
                <hr class="hr1">
                <div class="col-div-6"><p class="p2"><?php $string = $skill;
											$split = explode(',',$string);
											for($i=0; $i<sizeof($split); $i++){
    											echo $split[$i];
    											echo "<br>";}
												?></p></div>
                    <br>
                </div>
            </div>

            <div class="right-box">
                <h1 id="name"><?php echo "$name";?></h1>

                <br>	
                <h2 class="heading">Work Experience</h2>
                <hr class="hr2">
                <br>
                <div class="col-div-4">
                    <p class="p5"><?php echo "$cstartdate";?></p>
                </div>
                <div class="col-div-8">
                    <p class="p5"><?php echo "$companyname";?></p>
                    <span class="span1"><?php echo "$cposition";?></span>
                </div>

                <br><br><br>	
                <h2 class="heading">My Education</h2>
                <hr class="hr2">
                <br>
                <div class="col-div-4">
                    <p class="p5"><?php echo "$varsitypyear";?></p>
                </div>
                <div class="col-div-8">
                    <p class="p5"><?php echo "$varsityname";?></p>
                    <span class="span1"><?php echo "$vdep";?></span><br>
                    <span class="span1">CGPA: <?php echo "$cgpa";?></span>
                </div><br><br><br><br>

                <div class="col-div-4">
                    <p class="p5"><?php echo "$clgpyear";?></p>
                </div>
                <div class="col-div-8">
                    <p class="p5"><?php echo "$collegename";?></p>
                    <span class="span1">CGPA: <?php echo "$cdep";?></span> <br>
                    <span class="span1">GPA: <?php echo "$hscgpa";?></span>
                </div><br><br><br><br>


                <div class="col-div-4">
                    <p class="p5"><?php echo "$sclpyear";?></p>
                </div>
                <div class="col-div-8">
                    <p class="p5"><?php echo "$schoolname";?></p>
                    <span class="span1">GPA: <?php echo "$sscgpa";?></span>
                </div><br><br><br>

                <h2 class="heading">Social Media Link</h2>
                <hr class="hr2">
                <br>
                <div class="col-div-4">
                    <p class="p5">Linkedin</p>
                </div>
                <div class="col-div-8">
                    <span class="span1"><?php echo "$linkedinlink";?></span>
                </div><br><br>

                <div class="col-div-4">
                    <p class="p5">Github</p>
                </div>
                <div class="col-div-8">
                    <span class="span1"><?php echo "$gitlink";?></span>
                </div>


        </div>
        <center><button id="btn-print" class="btn btn-success btn-lg">Print & Generate PDF</button></center>
        <!-- <button id="btn-one" class="btn btn-success btn-lg">Download PDF (With Styles & Images / Same Page)</button> -->
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
    integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="custom.js"></script>

</body>
</html>


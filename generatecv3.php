<?php
include_once("My_CV_dbo.php");
include_once("Login_dbo.php");

if(!isset($_SESSION['username'])){
	header("Location:Login.php");
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Template IV</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
    <div class="container">
<div class="content">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo "$name";?></span> 
    </div>
    <div class="contact-info">
    <span class="email">Email: </span>
      <span class="email-val"><?php echo " $email";?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?php echo " $phone";?></span>
      <span class="separator"></span>
      <span class="phone">Address: </span>
      <span class="phone-val"><?php echo " $address";?></span><br>
      <span class="email">LinkedIn: </span>
      <span class="email-val"><?php echo " $linkedinlink";?></span>
      <span class="email">l  Github: </span>
      <span class="email-val"><?php echo " $gitlink";?></span>
    </div>
    
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo "$companyname";?></div>
            
            <div class="duration"><?php echo "$cstartdate";?></div>
          </div>
          <div class="right">
          <div class="addr"><?php echo "$cposition";?></div>
          </div>
        </div>
        <div class="section__list-item">
          <!-- <div class="left">

          </div> -->
        </div>
      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo "$varsityname";?></div>
            <div class="duration"><?php echo "$vdep";?></div>
            <div class="addr"><?php echo "$varsitypyear";?></div>  
          </div>
          <div class="right">
            <div class="name">CGPA: <?php echo "$cgpa";?></div>
          </div> <br> <br>
        <!-- </div>
        <div class="section__list-item"> -->
          <div class="left">
            <div class="name"><?php echo "$collegename";?></div>
            <div class="addr"><?php echo "$cdep";?></div>
            <div class="duration"><?php echo "$clgpyear";?></div>
          </div>
          <div class="right">
            <div class="name">GPA: <?php echo "$hscgpa";?></div>
          </div><br> <br>
        <!-- </div>

        <div class="section__list-item"> -->
          <div class="left">
            <div class="name"><?php echo "$schoolname";?></div>
            <div class="addr">Secondary School Certificate (SSC)</div>
            <div class="duration"><?php echo "$sclpyear";?></div>
          </div>
          <div class="right">
            <div class="name">GPA: <?php echo "$sscgpa";?></div>
          </div>
        </div>

      </div>
      
  </div>
     
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name">
           <?php echo "$skill";?>
             </div></div>
         </div>
         
       </div>
         
       </div>
     <div class="section">
     <div class="section__title">Languages</div>
       <div class="section__list">
         <div class="section__list-item">
         <?php echo "$language";?>
          </div>
       </div>
     </div>
     </div>
  </div>
  
</div>
<div class="center"><br><button id="btn-print" class="btn btn-success btn-lg">Print & Generate PDF</button></div>
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
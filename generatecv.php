<?php
include_once("My_CV_dbo.php");
include_once("Login_dbo.php");

if(!isset($_SESSION['username'])){
	header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CV Template I</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="css/style0.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style0.css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div class="container">
	<div id="content">
        <div id="cv" class="instaFade">
            <div class="mainDetails">
                <div id="headshot" class="quickFade">
                    <img src="<?php echo "$image";?>" alt="<?php echo "$name";?>" />
                </div>
                
                <div id="name">
                    <h1 class="quickFade delayTwo"><?php echo "$name";?></h1>
                    <h3 class="quickFade delayThree">Focus on the journey, not the destination.</h3>
                </div>
                
                <div id="contactDetails" class="quickFade delayFour">
                    <ul>
                        <li>Email: <a href="<?php echo " $email";?>" target="_blank"><?php echo " $email";?></a></li>
                        <li>Address: <a href="#"><?php echo " $address";?></a></li>
                        <li>Phone: <?php echo " $phone";?></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            
            <div id="mainArea" class="quickFade delayFive">
                <!-- <section>
                    <article>
                        <div class="sectionTitle">
                            <h1>Personal Profile</h1>
                        </div>
                        
                        <div class="sectionContent">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                        </div>
                    </article>
                    <div class="clear"></div>
                </section> -->
                
                
                <section>
                    <div class="sectionTitle">
                        <h1>Work Experience</h1>
                    </div>
                    
                    <div class="sectionContent">
                        <article>
                            <h2><?php echo "$companyname";?></h2>
                            <p class="subDetails"><?php echo "$cstartdate";?></p>
                            <p><?php echo "$cposition";?></p>
                        </article>

                    </div>
                    <div class="clear"></div>
                </section>
                
                
                <section>
                    <div class="sectionTitle">
                        <h1>Key Skills</h1>
                    </div>
                    
                    <div class="sectionContent">
                    <?php $string = $skill;
											$split = explode(',',$string);
											for($i=0; $i<sizeof($split); $i++){
    											echo $split[$i];
    											echo "<br>";}
												?>
                    </div>
                    <div class="clear"></div>
                </section>
                
                
                <section>
                    <div class="sectionTitle">
                        <h1>Education</h1>
                    </div>
                    
                    <div class="sectionContent">
                        <article>
                            <h2>University</h2>
                            <p><?php echo "$varsityname";?><br>
                            <?php echo "$vdep";?><br>
                            CGPA: <?php echo "$cgpa";?><br>
                            <!-- <i><?php echo "$varsitypyear";?></i></p>    -->
                        </article>
                        
                        <article>
                            <h2>Collage</h2>
                            <p><?php echo "$collegename";?><br>
                            <?php echo "$cdep";?><br>
                            GPA: <?php echo "$hscgpa";?><br>
                            <!-- <i><?php echo "$clgpyear";?></i></p>    -->
                        </article>

                        <article>
                            <h2>School</h2>
                            <p><?php echo "$schoolname";?><br>
                            GPA: <?php echo "$sscgpa";?><br>
                            <i><?php echo "$sclpyear";?></i></p>   
                        </article>
                    </div>
                    <div class="clear"></div>
                </section>
                 <section>
                    <article>
                        <div class="sectionTitle">
                            <h1>Language</h1>
                        </div>
                        
                        <div class="sectionContent">
                            <p><?php echo "$language";?></p>
                        </div>
                    </article>
                    <div class="clear"></div>
                </section> 
                
            </div>
            
        </div>
        <center><button id="btn-print" class="btn btn-success btn-lg">Print & Generate PDF</button></center>
        </div>
    </div>
<!-- <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript"> var pageTracker = _gat._getTracker("UA-3753241-1"); pageTracker._initData();pageTracker._trackPageview();
</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
    integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="custom.js"></script>
</body>
</html>

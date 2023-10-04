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
	<title>CV Template III</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="container">
	<div id="content">
            <div class="resume_wrapper">
                <div class="resume_left">
                    <div class="resume_image">
                        <img src="<?php echo "$image";?>"class="left-top-image"></br>
                    </div>
                    <div class="resume_bottom">
                        <div class="resume_item resume_profile">
                            <div class="resume_title">Profile Details</div>
                            <div class="resume_info"></div>
                        </div>
                        <div class="resume_item resume_address">
                            <div class="resume_title">Address</div>
                            <div class="resume_info"><?php echo " $address";?><br></div><br>
                        </div>
                        <div class="resume_item resume_contact">
                            <div class="resume_title">Contact</div>
                            <div class="resume_info">
                                <div class="resume_subtitle">Phone</div>
                                <div class="resume_subinfo"><?php echo " $phone";?></div>
                            </div>
                            <div class="resume_info">
                                <div class="resume_subtitle">Email</div>
                                <div class="resume_subinfo"><?php echo " $email";?></div>
                            </div>
                            <!-- <div class="resume_info">
                                <div class="resume_subtitle">linkedIn</div>
                                <div class="resume_subinfo"><?php echo " $linkedinlink";?></div>
                            </div>
                            <div class="resume_info">
                                <div class="resume_subtitle">GitHub</div>
                                <div class="resume_subinfo"><?php echo " $gitlink";?></div>
                            </div> -->
                        </div>
                        <div class="resume_item resume_skills">
                            <div class="resume_title">Language</div>
                            <div class="resume_info">
                                <div class="skills_list"><?php echo "$language";?></div>
                            </div><br>

                            <!-- <div class="resume_title">Skills</div>
                            <div class="resume_info">
                                <div class="skills_list"><?php $string = $skill;
											$split = explode(',',$string);
											for($i=0; $i<sizeof($split); $i++){
    											echo $split[$i];
    											echo "<br>";}
												?></div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="resume_right">
                    <div class="resume_item resume_namerole">
                        <div class="name"><?php echo "$name";?></div>
                        <!-- <div class="resume_info">Committed to Excellence</div> -->
                    </div>
                    <div class="resume_item resume_education">
                        <div class="resume_title">Education</div>
                        <div class="resume_info">
                            <div class="resume_data">
                                <div class="year"><?php echo "$varsitypyear";?></div>
                                <div class="content">
                                    <p>University:</p>
                                    <h4><?php echo "$varsityname";?></h4>
                                    <p><?php echo "$vdep";?></p>
                                    CGPA: <?php echo "$cgpa";?>
                                </div>
                            </div>
                            <div class="resume_data">
                                <div class="year"><?php echo "$clgpyear";?></div>
                                <div class="content">
                                    <p>Collage:</p>
                                    <h4><?php echo "$collegename";?></h4>
                                    <p><?php echo "$cdep";?></p>
                                    <p>GPA: <?php echo "$hscgpa";?></p>
                                </div>
                            </div>
                            <div class="resume_data">
                                <div class="year"><?php echo "$sclpyear";?></div>
                                <div class="content">
                                    <p>School:</p>
                                    <h4><?php echo "$schoolname";?></h4>
                                    GPA: <?php echo "$sscgpa";?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resume_item resume_experience">
                        <div class="resume_title">Experience</div>
                        <div class="resume_info">
                            <div class="resume_data">
                                <div class="year"><?php echo "$cstartdate";?></div>
                                <div class="content">
                                    <p><?php echo "$companyname";?></p>
                                    <p><?php echo "$cposition";?></p>
                                </div>
                            </div>
                </div>
            </div>
            <div class="resume_item resume_experience">
                        <div class="resume_title">Social Media Link</div>
                        <div class="resume_info">
                            <div class="resume_data">
                                <div class="year">LinkedIn</div>
                                <div class="content">
                                    <p><?php echo "$linkedinlink";?></p>
                                </div>
                            </div>
                </div>
                        <div class="resume_info">
                            <div class="resume_data">
                                <div class="year">GitHub</div>
                                <div class="content">
                                    <p><?php echo "$gitlink";?></p>
                                </div>
                            </div>
                </div>
        </div>
        <div class="resume_item resume_experience">
                        <div class="resume_title">Skills</div>
                        <div class="resume_info">
                            <div class="resume_data">
                                <div class="year"></div>
                                <div class="content">
                                    <p><?php $string = $skill;
											$split = explode(',',$string);
											for($i=0; $i<sizeof($split); $i++){
    											echo $split[$i];
    											echo "<br>";}
												?></p>
                                </div>
                            </div>
                </div>
        </div>
        </div>
    </div>
    <center><button id="btn-print" class="btn btn-success btn-lg">Print & Generate PDF</button></center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
    integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="custom.js"></script>

</body>
</html>

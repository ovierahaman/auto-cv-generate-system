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
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<link rel="stylesheet" type="text/css" href="css/CV.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
	<!-- <form method="post"> -->
	<div id="header">
			<ul id="navbar">
				<li class="lists"><a class="options" href="index_In.php">Home</a></li>
				<li class="lists"><a class="options" href="My_CV.php">My Profile</a></li>
				<li class="lists"><a class="options" href="Update_CV.php">Update CV</a></li>
				<li class="lists"><a class="options" href="templates.php">All Templates</a></li>
				<li id="log_list"><a id="log_option" href="Login_dbo.php?logout='1'">
					<?php if(isset($_SESSION['username'])) echo $_SESSION['username']." "?>Logout
				</a></li>
			</ul>
		</div>
		<div id="container">
		<div id="content">
			<div id="left-div">
				<img src="<?php echo "$image";?>"class="left-top-image"></br>
				<div id="left-middle-div">
					<h2 id="name"><?php echo "$name";?></h2>
					<p><img src="Image/home-logo.png" class="left-logo"><?php echo " $address";?></p>
					<p><img src="Image/phone-logo.png" class="left-logo"><?php echo " $phone";?></p>
					<p><img src="Image/email-logo.png" id="email-logo"><?php echo " $email";?></p>
				</div></br>
				<div id="left-bottom-div">
					<h2 id="skills"><img src="Image/skills-logo.png" id="skills-logo"> Skills</h2>
					
					<p id="skills-dtl"><?php $string = $skill;
											$split = explode(',',$string);
											for($i=0; $i<sizeof($split); $i++){
    											echo $split[$i];
    											echo "<br>";}
												?></p>
				</div>
				<div id="left-bottom-languages-div">
					<h2 id="skills"><img src="Image/language-logo.png" id="language-logo"> Languages</h2>
					<p id="skills-dtl"><?php echo "$language";?></p>
				</div>
			</div>
			<div id="right-div">
				<div id="right-top-div">
					<h1><img src="Image/working-logo.png" class="right-logo"> Work Experience</h1>
					<h2 id="name-institute"><?php echo "$companyname";?></h2>
					<h5 class="description"><?php echo "$cposition";?></h5>
					<p class="description"><?php echo "$cstartdate";?></p>
					<!-- <a href="Delete_info.php" class="description" name="deletew" onClick="return confirm('Are you sure you want to delete?')">Delete</a> -->
				</div></br>
				<div id="right-bottom-div">
					<h1><img src="Image/cap-logo.png" class="right-logo"> Education</h1>
					<div id="varsity-div">
						<h2 id="name-institute"><?php echo "$varsityname";?></h2>
						<h4 class="description">Department: <?php echo "$vdep";?></h4>
						<h5 class="description">CGPA: <?php echo "$cgpa";?></h5>
						<!-- <h5 class="description"><?php echo "$varsitypyear";?></h5> -->
					</div></br>
					<div id="college-div">
						<h2 id="name-institute"><?php echo "$collegename";?></h2>
						<h4 class="description">Group: <?php echo "$cdep";?></h4>
						<h5 class="description">GPA: <?php echo "$hscgpa";?></h5>
						<!-- <h5 class="description"><?php echo "$clgpyear";?></h5> -->
					</div></br>
					<div id="school-div">
						<h2 id="name-institute"><?php echo "$schoolname";?></h2>
						<h4 class="description">GPA: <?php echo "$sscgpa";?></h4>
						<h5 class="description">Passing Year: <?php echo "$sclpyear";?></h5>
					</div>
				</div>
			</div>
			</div>
		</div>
		<footer>
			<p>&copy; 2023 - United International University</p>
		</footer>
</body>
</html>
<?php
include_once("Update_CV_dbo.php");
include_once("Login_dbo.php");

if(!isset($_SESSION['username'])){
	header("Location:Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update CV</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<link rel="stylesheet" type="text/css" href="css/CV.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
	<script type="text/javascript">
		function updateAlert(){
			alert("Successfully updated.");
		}
	</script>
	<form action="Update_CV_dbo.php" method="post" enctype="multipart/form-data">
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
		<div id="update-cv-div"></br>
			<div id="image-div">
				<img src="<?php echo "$image";?>"class="image"></br>
				<input type="file" name="image"></br></br></br>
				<center><h2>Experience</h2></center></br>
					<label>Name of company</label>
					<input type="text" name="companyName" class="input" value="<?php echo "$companyname";?>">
					<label>Start date</label>
					<input type="date" name="CMPYstartDate" class="input" value="<?php echo "$cstartdate";?>">
					<label>Position</label>
					<input type="text" name="position" class="input" value="<?php echo "$cposition";?>"></br></br></br></br>
					<label>Name of School</label>
				<input type="text" name="sclName" class="input" value="<?php echo "$schoolname";?>">
				<label>GPA</label>
				<input type="number" step="any" name="sscgpa" class="input" value="<?php echo "$sscgpa";?>">
				<label>Passing year</label>
				<input type="date" name="sclPyear" class="input" value="<?php echo "$sclpyear";?>">
			</div>
			<div id="basic-info-div">
				<center><h2>Basic Information </h2></center><br>
				<label>Name*</label>
				<input type="text" name="name" class="input" value="<?php echo "$name";?>" required>
				<label>Address*</label>
				<input type="text" name="address" class="input" value="<?php echo "$address";?>" required>
				<label>Phone*</label>
				<input type="number" name="phone" class="input" value="<?php echo "$phone";?>" required>
				<label>Linkedin*</label>
				<input type="text" name="linkedinlink" class="input" value="<?php echo "$linkedinlink";?>" required>
				<label>GitHub*</label>
				<input type="text" name="gitlink" class="input" value="<?php echo "$gitlink";?>" required>
				<label>Skills*</label>
				<input type="text" name="skills" class="input" value="<?php echo "$skill";?>" required>
				<label>Language*</label>
				<label><input type="checkbox" name="language" value="Bangla">Bangla</label>
				<label><input type="checkbox" name="language" value="English">English</label>
			</div>
			<!-- <div id="working-exp-div">
				<label>Name of company</label>
				<input type="text" name="companyName" class="input" value="<?php echo "$companyname";?>">
				<label>Start date</label>
				<input type="date" name="CMPYstartDate" class="input" value="<?php echo "$cstartdate";?>">
				<label>Position</label>
				<input type="text" name="position" class="input" value="<?php echo "$cposition";?>">
			</div> -->
			<div id="education-div">
			<br><br><center><h2>Educational Info</h2></center><br><br>
				<label>Name of University</label>
				<input type="text" name="varsityName" class="input" value="<?php echo "$varsityname";?>">
				<label>Department</label>
				<input type="text" name="vdep" class="input" value="<?php echo "$vdep";?>">
				<label>CGPA</label>
				<input type="number" step="any" name="cgpa" class="input" value="<?php echo "$cgpa";?>">
				<label>Passing year</label>
				<input type="date" name="varsityPyear" class="input" value="<?php echo "$varsitypyear";?>"></br></br></br>
				<label>Name of College</label>
				<input type="text" name="clgName" class="input" value="<?php echo "$collegename";?>">
				<label>Department</label>
				<input type="text" name="cdep" class="input" value="<?php echo "$cdep";?>">
				<label>GPA</label>
				<input type="number" step="any" name="hscgpa" class="input" value="<?php echo "$hscgpa";?>">
				<label>Passing year</label>
				<input type="date" name="clgPyear" class="input" value="<?php echo "$clgpyear";?>">
			</div></br>
			<div>
			</br></br>
				<input type="submit" id="cancel" name="cancel" value="Back">
				<input type="submit" id="update" name="update" onclick="updateAlert()" value="Update">
				<!-- </br>
				<center><a class = "btn" href="templates.php">Previw All Templates</a></center> -->
			</div>
		</div>
	</form>
</body>
</html>
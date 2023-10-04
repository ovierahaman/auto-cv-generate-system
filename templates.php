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
	<title>All Templates</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<link rel="stylesheet" type="text/css" href="css/CV.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
		<div id="update-cv-div">             
        <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="Image\templates\temp0.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Classic or Traditional Design</h5>
                    <p class="card-text">This design follows a clean and professional layout. It typically includes sections like contact information, a brief summary or objective statement, work experience in reverse chronological order, education, skills, and possibly additional sections</p>
                    </div>
                    <div class="card-footer">
                    <a href="generatecv.php"><input type="submit" id="update" name="update" value="CREATE"></a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Image\templates\temp1.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Creative or Visual Design</h5>
                    <p class="card-text">Color, creative fonts, icons, graphics. Ideal for creative fields, but content should still shine. The layout may be more unconventional, with sections arranged in a way that reflects your creativity. </p>
                    </div>
                    <div class="card-footer">
                    <a href="generatecv1.php"><input type="submit" id="update" name="update" value="CREATE"></a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Image\templates\temp2.PNG" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Infographic</h5>
                    <p class="card-text">An infographic CV takes the concept of a visual design a step further. Charts, graphs, icons for a visual representation of skills. Great for creative and tech roles, but not universally suitable.</p>
                    </div>
                    <div class="card-footer">
                
                    <a href="generatecv2.php"><input type="submit" id="update" name="update" value="CREATE"></a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="Image\templates\temp4.PNG" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Minimalistic/Modern</h5>
                    <p class="card-text">Simple, sleek, organized. Good for tech and startup industries, emphasizes efficiency. This style can work well for professionals in tech, startups, or industries that appreciate efficiency and clarity.</p>
                    </div>
                    <div class="card-footer">
                    <a href="generatecv3.php"><input type="submit" id="update" name="update" value="CREATE"></a>
                    </div>
                </div>
                </div>
	    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
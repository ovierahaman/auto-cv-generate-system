<?php
include_once("Login_dbo.php");

if(isset($_SESSION['username'])){
	header("Location:index_In.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <nav class = "navbar bg-white">
            <div class="container">
                <div class = "navbar-content">
                    <div class = "brand-and-toggler">
                        <a href = "index.php" class = "navbar-brand">
                            <img src = "assets/images/cv.jpg" alt = "" class = "navbar-brand-icon">
                            <span class = "navbar-brand-text">CV Generate System <span></span>
                        </a>
                        <div>
                        <a href = "contactus.html" class = "btn btn-secondary text-uppercase">Contact Us</a>
						<a href = "login.php" class = "btn btn-secondary text-uppercase">Log In</a>
                        <a href = "Registration.php" class = "btn btn-secondary text-uppercase">Sign Up</a>
                        <!-- <button type = "button" class = "navbar-toggler-btn">
                            <div class = "bars">
                                <div class = "bar"></div>
                                <div class = "bar"></div>
                                <div class = "bar"></div>
                            </div>
                        </button> -->
                    </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class = "header bg-bright" id = "header">
            <div class = "container">
                <div class = "header-content text-center">
                    <!-- <h6 class = "text-uppercase text-blue-dark fs-14 fw-6 ls-1">online CV builder</h6> -->
                    <h1 class = "lg-title">"Unleash Your Potential: Crafting the Best CV for Your Future Success!"</h1>
                    <p class = "text-dark fs-18">Use professional field-tested CV templates that follow that exact 'CV rules' employers look for. Easy to use and done within minutes - try now for free!</p>
                    <!-- <a href = "resume.html" class = "btn btn-primary text-uppercase">create my resume</a> -->
                    <a href = "Update_CV.php" class = "btn btn-primary text-uppercase">create my CV</a>
                    <img src = "assets/images/ezgif.com-video-to-gif.gif">
                </div>
            </div>
        </header>

        <div class="section-one">
            <div class="container">
                <div class = "section-one-content">
                    <div class="section-one-l">
                        <img src = "assets/images/newwwjob.jpg">
                    </div>
                    <div class = "section-one-r text-center">
                        <h2 class = "lg-title">Use the best CV maker as your guide!</h2>
                        <p class = "text">Getting that dream job can seem like an impossible task. We're here to change that. Give yourself a real advantage with the best online CV maker: created by experts, imporved by data, trusted by millions of professionals.</p>
                        <div class = "btn-group">
                            <a href = "Update_CV.php" class = "btn btn-primary text-uppercase">create my CV</a>
                            <a href = "https://www.udemy.com/course/7-simple-steps-to-improve-your-resume/" class = "btn btn-secondary text-uppercase">Udemy Course For Improve Your Resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "section-two bg-bright">
            <div class="container">
                <div class="section-two-content">
                    <div class = "section-items">
                        <div class = "section-item">
                            <div class = "section-item-icon">
                                <img src = "assets/images/feature-1-edf4481d69166ac81917d1e40e6597c8d61aa970ad44367ce78049bf830fbda5.svg" alt = "">
                            </div>
                            <h5 class = "section-item-title">Make a CV that wins interviews!</h5>
                            <p class = "text">Use our CV maker with its advanced creation tools to tell professional story that engages recruiters, hiring managers and even CEOs.</p>
                        </div>

                        <div class = "section-item">
                            <div class = "section-item-icon">
                                <img src = "assets/images/feature-2-a7a471bd973c02a55d1b3f8aff578cd3c9a4c5ac4fc74423d94ecc04aef3492b.svg" alt = "">
                            </div>
                            <h5 class = "section-item-title">CV writing made easy!</h5>
                            <p class = "text">CV writing has never been this effortless. Pre-generated text, visual designs and more - all already integrated into the CV maker. Just fill in your details.</p>
                        </div>

                        <div class = "section-item">
                            <div class = "section-item-icon">
                                <img src = "assets/images/feature-3-4e87a82f83e260488c36f8105e26f439fdc3ee5009372bb5e12d9421f32eabdd.svg" alt = "">
                            </div>
                            <h5 class = "section-item-title">A recruiter-tested CV maker tool</h5>
                            <p class = "text">Our CV builder and its pre-generated content are tested by recruiters and IT experts. We help your CV become truly competitive in the hiring process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class = "footer bg-dark">
            <div class="container">
                <div class = "footer-content text-center">
                    <p class="fs-15">&copy;Copyright 2022. All Rights Reserved - <span>United International University</span></p>
                </div>
            </div>
        </footer>
        
    </body>
</html>
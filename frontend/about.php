<?php

// Start the session
session_start();

// required
require_once('../vendor/autoload.php');

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>M. Kario</title>
        <meta charset='utf-8'/>
        <link rel='icon' href='frontend/img/Favicon.png'>
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <meta content='Welcome to my portoflio' name='description'/>
        <meta content='Portfolio' name='keywords'/>
        
        
        <link rel='stylesheet' href='frontend/styling/css/style.css'/>
        
		
		<!-- Bootstrap -->
		
		<?php include("includes/bootstrap.cdn.php") ?>

        <!--
        <link rel='stylesheet' href='frontend/css/landing-style.css'/>
        <link rel="stylesheet" href="frontend/css/fontawesome5/fontawesome/all.css">
        -->
        
        
        <!--
        <script type='text/javascript' src='js/jquery-3.7.1.min.js'></script>
        
        <script type='text/javascript' src='js/jquery.mobile-1.4.5.js'></script>
        <script type='text/javascript' src='js/jquery.min.js'></script>
        -->
        
    </head>

	<body>
		
		<header>
            
            <?php include('includes/header.php'); ?>

		</header>
        
		<div class='container container-one pt-5 mt-5'>
				
            <div class='row'>
                <div class='col'></div>
                <div class='col-12 col-lg-8'>
                    <h1 class='fw-light text-center'>About</h1>
                    <p class='text-center'>
                        I will tell you about myself as soon as I'm finished developing this version, so for now... <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class='col'></div>
            </div>
            
        </div>
		<div class='about-container-color-offwhite'>

            <div class='container container-about mt-5'>
                <div class='row'>
                    <div class='col-12 col-lg-6 text-center'>
                        <img src="frontend/img/aboutimg/clock.png" class='about-img' alt="Time">
                    </div>
                    <div class='col-12 spacer'>&nbsp;</div>
                    <div class='col-12 col-lg-6 d-flex align-items-center'>
                        <div class='container'>
                            <div class='row'>
                                <h2 class='fw-light'>Start</h2>
                            </div>
                            <div class='row'>
                                <p>
                                    I started learning HTML and CSS in early 2013, which interested me but not enough to make it my career and had at that time another job in logistics.A few years later a got a job in development to work with PHP and even though I knew nothing at that time about PHP I took it and knew that I could make something out of it. I was happy with the job and found my path to the future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='about-container-wrap'>
            <div class='container container-about'>
                <div class='row'>
                    <div class='col-12 col-lg-6 d-flex align-items-center'>
                        <div class='container'>
                            <div class='row'>
                                <h2 class='fw-light'>Skills</h2>
                            </div>
                            <div class='row'>
                                <p>
                                    There are a lot of developing languages to learn and if that’s not enough there are also a whole lot of other ways to create websites and web apps. I like starting from scratch, because I can than choose my own path to the finish line and make the app as light as I can. So this means that I should be able not only to code in different languages, but also to know which codes are heavier, set up servers, pointing domain names to the hosting servers, setup version controllers, etc.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='col-12 spacer'>&nbsp;</div>
                    <div class='col-12 col-lg-6 text-center'>
                        <img src="frontend/img/aboutimg/magician.png" class='about-img' alt="There should be an image here!">
                    </div>
                </div>
            </div>
        </div>
        <div class='about-container-color-offwhite'>
            <div class='container container-about'>
                <div class='row'>
                    <div class='col-12 col-lg-6 text-center'>
                        <img src="frontend/img/aboutimg/bullseye.png" class='about-img' alt="There should be an image here!">
                    </div>
                    <div class='col-12 spacer'>&nbsp;</div>
                    <div class='col-12 col-lg-6 d-flex align-items-center'>
                        <div class='container'>
                            <div class='row'>
                                <h2 class='fw-light'>Mission</h2>
                            </div>
                            <div class='row'>
                                <p>
                                    A fast and secure development comes with a clear visual and understanding of the goal. Web developing plays a big part of the business industry, because a business that can’t be found on the internet wont reach it’s max potential customers. To get the most out of a business, it needs to be found easily and so I’m dedicated in developing websites and web applications, doesn’t matter which tools, languages and systems are used. I am open to learn and will practice more ways to develop.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='about-container-wrap'>
            <div class='container container-about'>
                <div class='row text-center'>
                    <div class='col-12 col-lg-2'>&nbsp;</div>
                    <div class='col-12 col-lg-8'>
                    <h2 class='text-center mb-5'>Experiences</h2>
                        <img src="frontend/img/aboutimg/WebDevBG.png" class='languages mt-5' alt="There should be an image here!">
                    </div>
                    <div class='col-12 col-lg-2'>&nbsp;</div>
                </div>
            </div>
        </div>
		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
</html>
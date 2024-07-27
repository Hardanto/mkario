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
        
		<!--
			Font Awesome
		-->
        <script src="https://kit.fontawesome.com/f135823fed.js" crossorigin="anonymous"></script>
		
    </head>

	<body>
		
		<header>
            
            <?php include('includes/header.php'); ?>

		</header>
        
		<div class='container container-one py-5 my-5'>
			
            <div class="row py-4">
                <h1>&nbsp;</h1>
            </div>
            <div class='row'>
                <div class='col'></div>
                <div class='col-12 col-lg-10'>
                    <h1 class='fw-light text-center'>About</h1>
                    <p class='text-center lead'>
                        I will tell you about myself as soon as I'm finished developing this version, so for now <i class="fa-regular fa-face-smile-wink"></i>... <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class='col'></div>
            </div>
			<div class="row py-4">
                <h1>&nbsp;</h1>
            </div>
            
        </div>
		<div class='about-container-color-offwhite'>

            <div class='container container-about'>
                <div class='row'>
                    <div class='col-12 col-lg-6 text-center reveal left-block'>
                        <div class='content'>
                            <img src="frontend/img/aboutimg/clock.png" class='about-img' alt="Time">
                        </div>
                    </div>
                    <div class='col-12 large-screen-hidden'>&nbsp;</div>
                    <div class='col-12 col-lg-6 d-flex align-items-center reveal right-block'>
                        <div class='container'>
                            <article class='content'>
                                <h2 class='fw-light'>Start</h2>
                                <p class='lead'>
                                    I started learning HTML and CSS in early 2013, which interested me but not enough to make it my career and had at that time another job in logistics.A few years later a got a job in development to work with PHP and even though I knew nothing at that time about PHP I took it and knew that I could make something out of it. I was happy with the job and found my path to the future.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='about-container-wrap'>
            <div class='container container-about'>
                <div class='row'>
                    <div class='col-12 col-lg-6 d-flex align-items-center reveal left-block'>
                        <div class='container'>
                            <article class='content'>
                                <h2 class='fw-light'>Skills</h2>
                                <p class='lead'>
                                    There are a lot of developing languages to learn and if that’s not enough there are also a whole lot of other ways to create websites and web apps. I like starting from scratch, because I can than choose my own path to the finish line and make the app as light as I can. So this means that I should be able not only to code in different languages, but also to know which codes are heavier, set up servers, pointing domain names to the hosting servers, setup version controllers, etc.
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class='col-12 large-screen-hidden'>&nbsp;</div>
                    <div class='col-12 col-lg-6 text-center reveal right-block'>
                        <div class='content'>
                            <img src="frontend/img/aboutimg/magician.png" class='about-img' alt="There should be an image here!">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='about-container-color-offwhite'>
            <div class='container container-about'>
                <div class='row'>
                    <div class='col-12 col-lg-6 text-center reveal left-block'>
                        <div class='content'>
                            <img src="frontend/img/aboutimg/bullseye.png" class='about-img' alt="There should be an image here!">
                        </div>
                    </div>
                    <div class='col-12 large-screen-hidden'>&nbsp;</div>
                    <div class='col-12 col-lg-6 d-flex align-items-center reveal right-block'>
                        <div class='container'>
                            <article class='content'>
                                <h2 class='fw-light'>Mission</h2>
                                <p class='lead'>
                                    A fast and secure development comes with a clear visual and understanding of the goal. Web developing plays a big part of the business industry, because a business that can’t be found on the internet wont reach it’s max potential customers. To get the most out of a business, it needs to be found easily and so I’m dedicated in developing websites and web applications, doesn’t matter which tools, languages and systems are used. I am open to learn and will practice more ways to develop.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='about-container-wrap'>
            <div class='container container-about'>
                <div class='row text-center'>
                    <div class='col-12 col-lg-2'>&nbsp;</div>
                    <div class='col-12 col-lg-8 reveal one-block'>
                        <h2 class='text-center mb-5'>Skills</h2>
                        <img src="frontend/img/aboutimg/WebDevBG.png" class='languages mt-5' alt="There should be an image here!">
                    </div>
                    <div class='col-12 col-lg-2'>&nbsp;</div>
                </div>
            </div>
        </div>
        <!-- <div class='about-container-color-offwhite'>
            <div class='container container-about'>
                <div class='row text-center'>
                    <div class='col-12 col-lg-2'>&nbsp;</div>
                    <div class='col-12 col-lg-8'>
                        <h2 class='text-center mb-5'>Resume</h2>
                    </div>
                    <div class='col-12 col-lg-2'><h3>&nbsp;</h3></div>
                </div>
                <div class='row text-center'>
                    <div class='col-12 col-lg-6'>
                        <h4>Resume comes here</h4>
                        <ul style="list-style:none;">
                            <li><p>List one</p></li>
                            <li><p>List two</p></li>
                            <li><p>List three</p></li>
                            <li><p>List four</p></li>
                        </ul>
                    </div>
                    <div class='col-12 col-lg-6'>
                        <h4>Resume comes here</h4>
                        <ul style="list-style:none;">
                            <li><p>List one</p></li>
                            <li><p>List two</p></li>
                            <li><p>List three</p></li>
                            <li><p>List four</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
    <script>
        
        // Reveal when the window is loaded
        //window.onload = reveal;

        // Call Reveal function when scrolling
        window.addEventListener('scroll', reveal);

        // The function
        function reveal () {

			// Get all the content that should be revealed
			var reveals = document.querySelectorAll('.reveal');
			
			// Loop through them
			for (var i = 0; i < reveals.length; i++){

				// What's the height of the window?
				var windowheight = window.innerHeight;

				// How far down is the current content?
				var revealtop = reveals[i].getBoundingClientRect().top;
				
				// Add some points
				var revealpoint = i == 6 ? 300 : 150;
				
				// If the content reached a certain height
				if (revealtop < windowheight - revealpoint) {
					
					// We'll add the active class to the container
					reveals[i].classList.add('active');
				}
				// If the content drops below a certain height
				else {
					
					// We'll remove the active class from the container
					reveals[i].classList.remove('active');
				}
			}
        }
    </script>
</html>
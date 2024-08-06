<?php

// Start the session
session_start();

// required
require_once('../vendor/autoload.php');

// test class
$test = new \Required\DatabasePreparations();
//$test = new \Heart\DnaPull();
//$array = array(array('something', 'another', array('andthen', 'alastone')), 'hello', 'hi', 'bye', 'adios');
?>
<!DOCTYPE html>
<!-- <html lang='en' data-bs-theme="dark"> -->
<html lang='en'>
    <head>
        <title>M. Kario</title>
        <meta charset='utf-8'/>
        <link rel='icon' href='backoffice/img/Favicon.png'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <meta name='description' content='Welcome to my portoflio'/>
		<meta name='title' content='MKario'/>
		<meta name='author' content='Mitch Karioredjo'/>
		<meta name='language' conten='english'/>
		<meta name='robots' content='index,follow'/>
        <meta content='Portfolio' name='keywords'/>

		<!-- 
			Open Graph Protocol for social media cards 
			Minimum 4 elements
		-->
		<!-- The title should reflect the webpage and not the whole website -->
		<meta property='og:title' content='The portfolio of a great developer' />

		<!-- Inform the content that is shared as a website -->
		<meta property='og:type' content='website' />

		<!-- Preferred page to land on using the card -->
		<meta property='og:url' content='https://www.mkario.com/' />

		<!-- Preferred Image to use on card -->
		<meta property='og:image' content='backoffice/img/Favicon.png' />
        
		<!-- If description is shown, inform the users what this website or webpage is about -->
		<meta property='og:description' content='Showing what the strength of this person is.' />
        
		<!-- Inform the social media platform the language -->
		<meta property='og:locale' content='en_US' />
        
		<!-- Display the name of the website -->
		<meta property='og:site_name' content='MKario' />
        
		<!--
			Reached the end of known OGP met tags
		-->
        
        <link rel='stylesheet' href='backoffice/styling/css/style.css'/>
		 
		<!-- Bootstrap -->
		
		<?php include("includes/bootstrap.cdn.php"); ?>

		<!--
        <link rel='stylesheet' href='backoffice/css/landing-style.css'/>
        <link rel="stylesheet" href="backoffice/css/fontawesome5/fontawesome/all.css">
        

        <script type='text/javascript' src='js/jquery-3.7.1.min.js'></script>
        
        <script type='text/javascript' src='js/jquery.mobile-1.4.5.js'></script>
        <script type='text/javascript' src='js/jquery.min.js'></script>
        -->

		<!--
			Font Awesome
		-->
        <script src="https://kit.fontawesome.com/f135823fed.js" crossorigin="anonymous"></script>
		
    </head>

	<body class="login-portal">
		
		<!-- Alerts go above the header tags -->
		<!-- <div class='alert alert-primary' role='alert' style='width:100%;margin-bottom:0;'>
			Message.
		</div> -->

		<header>
			
			<?php include('../frontend/includes/header.php'); ?>
			
		</header>
		
		<main>
		
		<?php
		
			//echo password_hash('Mitch1006', PASSWORD_DEFAULT);
			//echo '<img src="' . getcwd() . '/img/logo.png" >';
			//echo getcwd();
			//echo '<pre>';
			//print_r($test->test_storing());
			//print_r($test->testStoring());
			//echo '</pre>';
		?>
<!-- 
			<div class="image-container-one">
				<div class="image-layer"></div>
				<div class='container container-one'>
					
					<div class='row'>
						<div class='col'>
							<h1 class="my-4 py-4">&nbsp;</h1>
						</div>
						<div class='col-12 col-lg-6 first-article reveal firstReveal'>
							<div class='article-vcentered-container text-center'>
								<article>
									<h1 class='fw-light landing-welcome'><span>L</span>ogin Portal</h1>
									<p class="lead">
										This is build from scratch with different types of programming languages, libraries and frameworks. Get to know my projects, my skills and myself just by surfing through my website. You might even see changes happening, while I regularly update this website.
									</p>
								</article>
							</div>
						</div>
						<div class='col'>
							<h1 class="my-4 py-4">&nbsp;</h1>
						</div>
					</div>
					
				</div>

			</div> -->

			<div class='image-container-one'>
			
				<div class='row'>
					<h1>&nbsp;</h1>
				</div>	

				<div class='row'>
					<div class='col'>&nbsp;</div>
					
					<div class='col-12 col-lg-6'>
						<div>
							<form>
							<h4 class='fw-light mb-5 text-center'>Login form</h4>
							<div class='mb-3'>
								<div class='form-floating'>
									<input class='form-control' id='usernameInput' placeholder='Username'/>
									<label for='usernameInput'>Username</label>
								</div>
							</div>
							
							<div class='mb-3'>
								<div class='form-floating'>
									<input type='password' class='form-control' id='passwordInput' placeholder='Password' />
									<label class='passwordInput'>Password</label>
								</div>
							</div>
							
							<button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Cancel</button>
							<button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal'>Submit</button>
							
							</form>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Almost logged in</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>
										I'm sorry, but this is just a Front end preview with no backend and data
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
								</div>
							</div>
						</div>

						<div class="modal" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>Modal body text goes here.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class='col'>&nbsp;</div>
				</div>

				<div class='row'>
					<h1>&nbsp;</h1>
				</div>
			</div>

		</main>

		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
	<script type="text/javascript">
		
		// // Reveal what is already in the sight
		// window.onload = reveal;

		// // Reveal what is coming in sight
		// window.addEventListener('scroll', reveal);

		// // Function to reveal content
		// function reveal () {
			
		// 	// Get all the content that should be revealed
		// 	var reveals = document.querySelectorAll('.reveal');
			
		// 	// Loop through them
		// 	for (var i = 0; i < reveals.length; i++){

		// 		// What's the height of the window?
		// 		var windowheight = window.innerHeight;

		// 		// How far down is the current content?
		// 		var revealtop = reveals[i].getBoundingClientRect().top;
				
		// 		// Add some points
		// 		var revealpoint = i == 4 ? 150 : 300;
				
		// 		// If the content reached a certain height
		// 		if (revealtop < windowheight - revealpoint) {
					
		// 			// We'll add the active class to the container
		// 			reveals[i].classList.add('active');
		// 		}
		// 		// If the content drops below a certain height
		// 		else {
					
		// 			// We'll remove the active class from the container
		// 			reveals[i].classList.remove('active');
		// 		}
		// 	}
		// }

		// function myFunction() {
		// 	return console.log("Clicked!");
		// }
		
		// var projects = document.getElementById('projectsLink');
		// // console.log(projects);
		// projects.addEventListener('click', function (e) {
		// 	return console.log('Inline Click!');
		// });
	</script>
</html>

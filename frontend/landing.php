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
        <link rel='icon' href='frontend/img/Favicon.png'>
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
		<meta property='og:image' content='frontend/img/Favicon.png' />
        
		<!-- If description is shown, inform the users what this website or webpage is about -->
		<meta property='og:description' content='Showing what the strength of this person is.' />
        
		<!-- Inform the social media platform the language -->
		<meta property='og:locale' content='en_US' />
        
		<!-- Display the name of the website -->
		<meta property='og:site_name' content='MKario' />
        
		<!--
			Reached the end of known OGP met tags
		-->
        
        <link rel='stylesheet' href='frontend/styling/css/style.css'/>
		 
		<!-- Bootstrap -->
		
		<?php include("includes/bootstrap.cdn.php"); ?>

		<!--
        <link rel='stylesheet' href='frontend/css/landing-style.css'/>
        <link rel="stylesheet" href="frontend/css/fontawesome5/fontawesome/all.css">
        

        <script type='text/javascript' src='js/jquery-3.7.1.min.js'></script>
        
        <script type='text/javascript' src='js/jquery.mobile-1.4.5.js'></script>
        <script type='text/javascript' src='js/jquery.min.js'></script>
        -->

		<!--
			Font Awesome
		-->
        <script src="https://kit.fontawesome.com/f135823fed.js" crossorigin="anonymous"></script>
		
    </head>

	<body class="landing-page">
		
		<!-- Alerts go above the header tags -->
		<!-- <div class='alert alert-primary' role='alert' style='width:100%;margin-bottom:0;'>
			Message.
		</div> -->

		<header>
			
			<?php include('includes/header.php'); ?>
			
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
									<h1 class='fw-light landing-welcome'>Welcome to my <span>P</span>ortfolio</h1>
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

			</div>

			<div class="image-container-two">
				<div class='container container-two'>
					<div class='row'>
					
						<div class='col-12 col-lg-5 left-column reveal'>
							
							<div class="article-vcentered-container text-center p-4">
								<article>
									<h2 class="fw-light">What did I use to develop this website?</h2>
									<p>
									As mentioned earlier, this is a website build from scratch. My previous Portfolio website was build from Wordpress, while i was designing and developing this one. I'm used to having Linux Ubuntu as operating system to support my developing machine on my local network, so I can use different devices on my network to test the outcome of my development. I code in Visual Studio Code, I make use of Apache to host the websites locally and different types of programming languages, libraries and frameworks.
									</p>
								</article>
							</div>

						</div>
						
						<div class="col-12 col-lg-2"></div>

						<div class="col-12 col-lg-5 right-column reveal">
							<div class="row mt-5 p-5">
								<div class='col-6 col-lg-12 mt-3'>
									<div class="article-container">
										<article>
											<h2 class="fw-light">Development setup</h2>
											<ul style="list-style:none;padding-left:0;">
												<li><p>Virtualbox</p></li>
												<li><p>Linux Ubuntu 20.04 LTS</p></li>
												<li><p>Apache 2.4.52</p></li>
											</ul>
										</article>
									</div>
								</div>
								
								<div class='col-6 col-lg-12 mt-3'>
									<div class="article-container">
										<article>
											<h2 class="fw-light">List of languages</h2>
											<ul style="list-style:none;padding-left:0;">
												<li><p>PHP 8.1.2</p></li>
												<li><p>HTML 5</p></li>
												<li><p>CSS 3</p></li>
												<li><p>Bootsrap 5.3.3</p></li>
												<li><p>JavaScript ES6 (Not yet implemented)</p></li>
												<!-- <li><p>ReactJS (Not yet implemented)</p></li> -->
											</ul>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="image-container-three">
				<div class="image-layer"></div>
				<div class='container container-three'>
					<div class='row'>
						<div class='col'><h1 class="my-4 py-4">&nbsp;</h1></div>
						<div class='col-12 col-lg-6'>
							<div class="article-vcentered-container text-center">
								<article class='reveal'>
									<h2 class="fw-light mb-4">My Skills</h2>
									<p>
									I can write a whole lot about my skill, so I'll keep it just about web development. I have knowledge of setting up website or webappliciations via webhosting, dedicated servers or just locally hosted webservers for publicly available websites. I can develop webistes in different languages for frontend and backend. The visual expect is for me just as important as security, because we like a good looking website, but don't want it to be vulnerable for attacks. If you would like to go in depth about my skills <a href="about#skills">Click here</a>
									</p>
								</article>
							</div>
						</div>
						<div class='col'><h1 class="my-4 py-4">&nbsp;</h1></div>
					</div>
				</div>
			</div>

			<div class="image-container-four">
				<div class='container container-four reveal'>
					<div class="row py-3">
						<div class="col">
							<h1 class="text-center mb-0 bg-quote"><span>&ldquo;</span> You only lose when you quit <span>&rdquo;</span></h1>
							<p class="text-center">- Paulo Coelho -</p>
						</div>
					</div>
				</div>
			</div>

			<div class="image-container-five">
				<div class="image-layer"></div>
				<div class='container container-five'>
					<div class="row">
						<div class="col"><h1 class="my-4 py-4">&nbsp;</h1></div>
						<div class="col-12 col-lg-6">
							<div class="article-vcentered-container text-center">
								<article class='reveal'>
									<h4 class="fw-light">Communication</h4>
									<p class="fw-light">
										One great aspect we definitely should have for business is communication. Without it, what's the purpose of business? So if you would like to contact me to discuss what we can do for business, check out my <a href="contact">contact page</a>.
									</p>
								</article>
							</div>
						</div>
						<div class="col"><h1 class="my-4 py-4">&nbsp;</h1></div>
					</div>
				</div>
			</div>
		</main>

		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
	<script type="text/javascript">
		
		// Reveal what is already in the sight
		window.onload = reveal;

		// Reveal what is coming in sight
		window.addEventListener('scroll', reveal);

		// Function to reveal content
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
				var revealpoint = i == 4 ? 150 : 300;
				
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

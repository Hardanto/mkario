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
						<div class='col'></div>
						<div class='col-12 col-lg-6'>
							<div class='article-vcentered-container text-center'>
								<article>
									<h1 class='fw-light'>Welcome to my Portfolio</h1>
									<p class="lead">
										This is build from scratch with different types of programming languages, libraries and frameworks. Get to know my projects, my skills and myself just by surfing through my website. You might even see changes happening, while I regularly update this website.
									</p>
									<!-- <p class="lead">
										This  part of the website is made in Linux, Apache2, MySQL and PHP, also backed by React.js and with Bootstrap for more dynamics. For now I'm only working on the User Interface of it, so no functional backend. But that is yet to come.
									</p> -->
								</article>
							</div>
						</div>
						<div class='col'></div>
					</div>
					
				</div>

			</div>

			<div class="image-container-two">
				<div class='container container-two'>
					<div class='row'>
					
						<div class='col-12 col-lg-6'>
							
							<div class="article-vcentered-container text-center">
								<article>
									<h2 class="fw-light">What did I use to develop this website?</h2>
									<p>
									As mentioned earlier, this is a website build from scratch. My previous Portfolio website was build from Wordpress, while i was designing and developing this one. I'm used to having Linux Ubuntu as operating system to support my developing machine on my local network, so I can use different devices on my network to test the outcome of my development. I code in Visual Studio Code, I make use of Apache to host the websites locally and different types of programming languages, libraries and frameworks.
									</p>
								</article>
							</div>

						</div>
							
						<div class="col">
							<div class="row">
								<div class='col mt-3'>
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
								
								<div class='col mt-3'>
									<div class="article-container">
										<article>
											<h2 class="fw-light">List of languages</h2>
											<ul style="list-style:none;padding-left:0;">
												<li><p>PHP 8.1.2</p></li>
												<li><p>HTML 5</p></li>
												<li><p>CSS 3</p></li>
												<li><p>Bootsrap 5.3.3 (May be different)</p></li>
												<li><p>JavaScript ES6 (Not yet implemented)</p></li>
												<li><p>ReactJS (Not yet implemented)</p></li>
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
						<div class='col'></div>
						<div class='col-12 col-lg-6'>
							<div class="article-container text-center">
								<article>
									<h2 class="fw-light">Sed ut perspiciatis</h2>
									<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
									</p>
								</article>
							</div>
						</div>
						<div class='col'></div>
					</div>
				</div>
			</div>

			<div class="image-container-five">
				<div class='container container-four'>
					
				</div>
			</div>
		</main>

		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
	<script type="text/javascript">
		console.log(`The header javascript works!`);
		var projects = document.querySelector('.projectsLink');
		console.log(projects);
		// projects.addEventListener('click', function(e){
		// 	console.log("You clicked the link");
		// }, false);
	</script>
</html>

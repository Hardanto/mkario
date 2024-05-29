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
		<meta property='og:title' content='Welcome to my portfolio ' />

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
        
        
        <link rel='stylesheet' href='frontend/css/style.css'/>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <!--
        <link rel='stylesheet' href='frontend/css/landing-style.css'/>
        <link rel="stylesheet" href="frontend/css/fontawesome5/fontawesome/all.css">
        

        <script type='text/javascript' src='js/jquery-3.7.1.min.js'></script>
        
        <script type='text/javascript' src='js/jquery.mobile-1.4.5.js'></script>
        <script type='text/javascript' src='js/jquery.min.js'></script>
        -->
        
    </head>

	<body>
		
		<!-- Alerts go above the header tags -->
		<!-- <div class='alert alert-primary' role='alert' style='width:100%;margin-bottom:0;'>
			Message.
		</div> -->

		<header>
			
			<?php include('includes/header.php'); ?>
			
		</header>
		
		<main>
		
			<div class='container container-one'>
				
				<div class='row'>
					<div class='col'></div>
					<div class='col-12 col-lg-6'>
						<article>
							<h1 class='fw-light' style='text-align:center;'>Welcome to my Portfolio</h1>
							<p class='text-center'>
								This  part of the website is made in Linux, Apache2, MySQL and PHP, also backed by React.js and with Bootstrap for more dynamics. For now I'm only working on the User Interface of it, so no functional backend. But that is yet to come.
							</p>
						</article>
					</div>
					<div class='col'></div>
				</div>
				
				<?php
					
					//echo password_hash('Mitch1006', PASSWORD_DEFAULT);
					//echo '<img src="' . getcwd() . '/img/logo.png" >';
					//echo getcwd();
					//echo '<pre>';
					//print_r($test->test_storing());
					//print_r($test->testStoring());
					//echo '</pre>';
				?>
				
			</div>

			<div class='container container-two'>
				<div class='row'>
					<div class='col'>&nbsp;</div>
					
					<div class='col-12 col-lg-6'>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					
					<div class='col'>&nbsp;</div>
				</div>
			</div>
			<div class='container container-three'>
				<div class='row'>
					<div class='col'></div>
					<div class='col-12 col-lg-6'>
						<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
						</p>
					</div>
					<div class='col'></div>
				</div>
			</div>
			<div class='container container-four'>
				
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

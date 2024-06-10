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
		<!-- 
			Include Bootstrap's CSS and JS files dynamically
			So we can update it once in one file, but will update in all
			pages that are using it
		-->
		
		<?= include("includes/bootstrap.cdn.php") ?>

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
		
		<div class='container container-one'>
				
            <div class='row'>
                <div class='col'></div>
                <div class='col-6'>
                    <h1 class='fw-light' style='text-align:center;'>Contact</h1>
                    <p class='text-center'>
                        I would like to hear from you, so  if you want you can send me a message on my main page.
                    </p>
                </div>
                <div class='col'></div>
            </div>
            
        </div>
		
		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

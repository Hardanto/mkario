<?php

// Start the session
session_start();

// required
require_once('../vendor/autoload.php');

?>
<!DOCTYPE html>
<html lang='en'>
<head>
        <title>Projects - M. Kario</title>
        <meta charset='utf-8'/>
        <link rel='icon' href='frontend/img/Favicon.png'>
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <meta content='Welcome to my portoflio' name='description'/>
        <meta content='Portfolio' name='keywords'/>
        
        
        <link rel='stylesheet' href='frontend/css/style.css'/>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
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
                    <h1 class='fw-light' style='text-align:center;'>Projects</h1>
                    <p class='text-center'>
                        This is one of the projects, so no need to add it to my projects page, right?
                    </p>
                </div>
                <div class='col'></div>
            </div>
            
            <div class='row'>
                <h2>Project 1</h2>
                <div class='col-6'></div>
                <div class='col-6'></div>
            </div>
        </div>
		
		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

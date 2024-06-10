<?php

// Start the session
session_start();

// required
require_once('../../vendor/autoload.php');

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
			
			<?php include('../includes/header.php'); ?>
			
		</header>
		
        <main>
            <div class="container container-one text-center">

                <h2 class="fw-light">Media Page</h2>
                <p class="fw-light">Streaming videos and music on the web</p>

                <div class='mt-5 pt-5'>
                    <h4 class="fw-light mb-3">Have a laugh</h4>

                    <video width="640" height="480" controls muted>
                        <source src="frontend/media/videos/doggy.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="mt-5 pt-5">
                    <h4 class="fw-light mt-5 mb-4">Listen to a simple soundtrack I created</h4>
                    <audio loop controls>
                        <source src="frontend/media/music/Cool.ogg" type="audio/ogg">
                    </audio>
                </div>

            </div>
        </main>

		<footer>
			
			<?php include('../includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

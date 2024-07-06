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
        <meta content='' name='description'/>
        <meta content='' name='keywords'/>
        
        <link rel='stylesheet' href='frontend/styling/css/style.css'/>
		
		<!-- Bootstrap -->
		<?php include("../frontend/includes/bootstrap.cdn.php"); ?>


		<!--
			Font Awesome
		-->
        <script src="https://kit.fontawesome.com/f135823fed.js" crossorigin="anonymous"></script>
		
    </head>

	<body class="error e404">
		
		<header>
            
            <?php include('../frontend/includes/header.php'); ?>

		</header>

		<main>

            <div class='container container-error-404'>
            
            <?php
            
            echo "<h1 style='text-align:center;'>Error 404</h1>";
            echo "<h3 style='text-align:center;'>We can't find the page you should be on right now.</h3>";
            
            ?>

            </div>

        </main>

		<footer class="error">
			
			<?php include('../frontend/includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

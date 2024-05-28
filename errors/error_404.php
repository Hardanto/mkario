<?php

// Start the session
session_start();

// required
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Website Title</title>
        <meta charset='utf-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <meta content='' name='description'/>
        <meta content='' name='keywords'/>
        
        <!--
        
        <link rel='icon' href='images/favicon.png'/>
        <link rel='stylesheet' href='<?=$str?>css/style.css'/>
        <link rel='stylesheet' href='<?=$str?>css/landing-style.css'/>
        <link rel="stylesheet" href="<?=$str?>css/fontawesome5/fontawesome/all.css">
        
        <script type='text/javascript' src='js/jquery.3.2.1.js'></script>
        <script type='text/javascript' src='<?=$str?>js/jquery.mobile-1.4.5.js'></script>
        <script type='text/javascript' src='<?=$str?>js/jquery.min.js'></script>
        
        -->
        
    </head>

	<body>
		
		<header>
			
		</header>
		
		<?php
		
			echo "<h1 style='text-align:center;'>Error 404</h1>";
			echo "<h3 style='text-align:center;'>We cant't find the page you should be on right now.</h3>";
			
		?>
		
	</body>
</html>

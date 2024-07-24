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
		
		<div class='container container-one'>
			
            <div class="row py-4">
                <h1>&nbsp;</h1>
            </div>
            <div class='row'>
                <div class='col'></div>
                <div class='col-6'>
                    <h1 class='fw-light' style='text-align:center;'>Projects</h1>
                    <p class='text-center'>
                        This is one of the projects, so there is actually no need to add it to my projects page, but I've still added it to my projects.
                    </p>
                </div>
                <div class='col'></div>
            </div>
            <div class="row py-4">
                <h1>&nbsp;</h1>
            </div>
            <div class='row'>
                <a href="https://www.mkario.com/" class='project-link'>
                    <div class='row py-3 border'>
                        <h5>Wordpress portfolio website</h5>
                        <div class='col'>
                            <img src='frontend/img/PortfolioLogoDark.png' height="50px" />
                        </div>
                        <div class='col'>
                            <p>Go to my wordpress website, which has a different design.</p>
                        </div>
                    </div>
                </a>
                <a href="home" class='project-link mt-4'>
                    <div class='row py-3 border'>
                        <h5>LAMP, Bootstrap and JavaScript portfolio website</h5>
                        <div class='col-6'>
                            <img src='frontend/img/PortfolioLogoDark.png' height="50px" />
                        </div>
                        <div class='col-6'>
                            <p>This is my portfolio website built with Linux, Apache, MySQL(not so implemented) and PHP supported with Bootstrap and JavaScript.</p>
                        </div>
                    </div>
                </a>
                <a href="#" class='project-link mt-4'>
                    <div class='row py-3 border'>
                        <h5>ReactJS</h5>    
                        <div class='col-6'>
                            <img src='frontend/img/PortfolioLogoDark.png' height="50px" />
                        </div>
                        <div class='col-6'>
                            <p>Designed my portfolio website with ReactJS.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class='row py-4'>
                <h1>&nbsp;</h1>
            </div>
        </div>
		
		<footer>
			
			<?php include('includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

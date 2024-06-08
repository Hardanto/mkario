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
        
        
        <link rel='stylesheet' href='frontend/css/style.css'/>
        
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<!-- 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
         -->
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
		
		<div>
						
			<div class='container container-one'>
				
				<div class='row'>
					<div class='col'></div>
					<div class='col-6'>
						<h1 class='fw-light' style='text-align:center;'>Welcome to my Modal page</h1>
						<p class='text-center'>
							This is a page with modal, which doesn't have an functional meaning yet. It's just a demo of the modal with some random text and buttons with no function exept closing the model.
						</p>
					</div>
					<div class='col'></div>
				</div>
				
			</div>
			
			<div class='container container-two'>
				<!-- <div class='row'>
                    <h2></h2>
                </div> -->
				<div class='row'>
					<div class='col'>&nbsp;</div>
					
					<div class='col-12 col-lg-6 text-center'>
						<div>
							<!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Click me to see the modal
                            </button>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Now you see me</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>
										Am I looking good?
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
			</div>
			<div class='container container-three'>
				
			</div>
			<div class='container container-four'>
				
			</div>
			
		</div>
		
		<footer>
			
			<?php include('../includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

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
			
			<?php include('../includes/header.php'); ?>
			
		</header>
		
        <main>
            <div class="container container-one">

                <div>
                    <form action="" method="get">
                        
                        <div>
                            <h2 class="fw-light text-center">Booking a seat</h2>
                            <p class="fw-light text-center">Try the form, it won't store what you entered</p>
                        </div>
                        <div class="form-field">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="bookers_first_name" id ="bookers_first_name" placeholder="Enter your First Name" required>
                                        <label for="bookers_first_name">First Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="bookers_last_name" id ="bookers_last_name" placeholder="Enter your Last Name" required>
                                        <label for="bookers_last_name">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="form-field form-floating">
                            <input type="date" class="form-control" id="booking_date" name="booking_date" required>
                            <label for="booking_date">Booking Date</label>
                        </div>
                        <div class="form-field">
                            <label for="booking_people">Number of people</label>
                            <input type="range" id="booking_people" class="form-range" name="booking_people" min="1" max="10" oninput="this.nextElementSibling.value = this.value" required>
                            <output>4</output>
                        </div>
                        <div class="form-field form-floating">
                            <input id="booking_location" class="form-control" name="booking_location" list="locations" placeholder="Location" required>
                            <datalist id="locations">
                                <option value="Entrance">Entrance</option>
                                <option value="Frontstage">Frontstage</option>
                                <option value="Closetobar">Close to bar</option>
                                <option value="Close-to-restroom">Close to the restroom</option>
                                <option value="In-the-middle">Somewhere in the middle</option>
                            </datalist>
                            <label for="booking_location">Location</label>
                        </div>
                        <div class="form-buttons">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

		<footer>
			
			<?php include('../includes/footer.php'); ?>
			
		</footer>
	</body>
</html>

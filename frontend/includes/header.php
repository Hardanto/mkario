<?php
$page = explode('/', $_SERVER['REQUEST_URI'])[1];
$projects = array('projects','login', 'modal', 'formfields', 'mediafiles');
?>
<nav>
	<div class='container primary-header-container text-center'>
		<div class='row'>
			&nbsp;
		</div>
		<div class='row'>
			<div class='col-1'>
				<a href='https://www.mkario.com/' title='Click here to go back to my main website'>
					<img src='frontend/img/Favicon.png' height='50px' alt='Logo'>
				</a>
			</div>
			<div class='col'>
				&nbsp;
			</div>

			<!-- 
				On smaller screens
			-->

			<div class='col-1'>
				<div class='menu-button large-screen-hidden'>
					<button class='btn btn-lg' type='button' data-bs-toggle='dropdown' data-bs-auto-close="false" aria-expanded='false'>
						<i class='fa-solid fa-bars fa-lg'></i>
					</button>
					<ul class='dropdown-menu'>
						<li class='nav-item'>
							<a class='dropdown-item <?php if($page == "home") echo "active" ?>' href='home'>Home</a>
						</li>
						<li class='nav-item'>
							<a class='dropdown-item <?php if($page == "about") echo "active" ?>' href='about'>About</a>
						</li>
						<li class='nav-item'>
							<a class='dropdown-item <?php if(in_array($page, $projects)) echo "active" ?> dropdown-toggle projectsLink' id='projectsLink' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Projects</a>
							<ul class='dropdown-menu'>
								<li><a class='dropdown-item <?php if($page == "projects") echo "active" ?>' href="projects">List of All Projects</a></li>
								<li><a class='dropdown-item <?php if($page == "login") echo "active" ?>' href="login">Login</a></li>
								<li><a class='dropdown-item <?php if($page == "modal") echo "active" ?>' href="modal">Modal</a></li>
								<li><a class='dropdown-item <?php if($page == "formfields") echo "active" ?>' href="formfields">Forms</a></li>
								<li><a class='dropdown-item <?php if($page == "mediafiles") echo "active" ?>' href="mediafiles">Media Files</a></li>
							</ul>
						</li>
						<li class='nav-item'>
							<a class='dropdown-item <?php if($page == "contact") echo "active" ?>' href='contact'>Contact</a>
						</li>
						<li class='nav-item'>
							<a class='dropdown-item' href="loginportal">
								<span class='user-icon-circle'>
									<i class="fa-regular fa-user"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- 
				On bigger screens
			-->

			<div class='col-12 col-lg-6 d-flex align-items-center justify-content-end' data-bs-theme='dark'>
			<!--<div class='collapse navbar-collapse' data-bs-theme='dark'> -->
				<div class='mobile-hidden'>
					<ul class='nav'>
						<li class='nav-item'>
							<a class='nav-link <?php if($page == "home") echo "active" ?>' href='home'>Home</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link <?php if($page == "about") echo "active" ?> projectsLink' href='about'>About</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link <?php if(in_array($page, $projects)) echo "active" ?> dropdown-toggle projectsLink' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false' onclick=''>Projects</a>
							<ul class='dropdown-menu'>
								<li><a class='dropdown-item <?php if($page == "projects") echo "active" ?>' href="projects">List of All Projects</a></li>
								<li><a class='dropdown-item <?php if($page == "login") echo "active" ?>' href="login">Login</a></li>
								<li><a class='dropdown-item <?php if($page == "modal") echo "active" ?>' href="modal">Modal</a></li>
								<li><a class='dropdown-item <?php if($page == "formfields") echo "active" ?>' href="formfields">Forms</a></li>
								<li><a class='dropdown-item <?php if($page == "mediafiles") echo "active" ?>' href="mediafiles">Media Files</a></li>
							</ul>
						</li>
						<li class='nav-item'>
							<a class='nav-link <?php if($page == "contact") echo "active" ?>' href='contact'>Contact</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href="loginportal">
								<span class='user-icon-circle'>
									<i class="fa-regular fa-user"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class='row'>
			&nbsp;
		</div>
	</div>

</nav>
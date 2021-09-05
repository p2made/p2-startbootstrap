<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>dropdown-menu-animation-navbar</title>
	<!-- Favicon-->
	<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" rel="stylesheet">
	<link href="assets/css/dropdown-menu-animation-navbar.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Animated Dropdown</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Click Me!
						</a>
						<!-- Here's the magic. Add the .animate and .slideIn classes to your .dropdown-menu and you're all set! -->
						<div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container text-center">
		<h1 class="mt-5 text-white fw-light">Animated Bootstrap Navbar Dropdowns</h1>
		<p class="lead text-white-50">An attractive yet subtle dropdown animation for dropdown menus loacated within a Bootstrap navbar</p>
	</div>

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
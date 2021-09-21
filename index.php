<!DOCTYPE html>
<?php
$templates = [
	[
		'name' => 'Basic',
		'slug' => 'basic',
		'data' => [
			['name' => 'Bare', 'slug' => 'bare', 'path' => 'basic-layouts'],
			['name' => 'About and Team Section', 'slug' => 'about-and-team-section', 'path' => 'basic-layouts'],
			['name' => 'Full Page Image HTML Background', 'slug' => 'full-page-image-html-background', 'path' => 'basic-layouts'],
			['name' => 'Full Width Pics', 'slug' => 'full-width-pics', 'path' => 'basic-layouts'],
			['name' => 'Heroic Features', 'slug' => 'heroic-features', 'path' => 'basic-layouts'],
			['name' => 'The Big Picture', 'slug' => 'the-big-picture', 'path' => 'basic-layouts'],
		],
	],
	[
		'name' => 'Intermediate',
		'slug' => 'intermediate',
		'data' => [
			['name' => 'Agency', 'slug' => 'agency'],
			['name' => 'Coming Soon', 'slug' => 'coming-soon'],
			['name' => 'Creative', 'slug' => 'creative'],
			['name' => 'Freelancer', 'slug' => 'freelancer'],
			['name' => 'Grayscale', 'slug' => 'grayscale'],
			['name' => 'Landing Page', 'slug' => 'landing-page'],
			['name' => 'New Age', 'slug' => 'new-age'],
			['name' => 'One Page Wonder', 'slug' => 'one-page-wonder'],
			['name' => 'Resume', 'slug' => 'resume'],
		],
	],
	[
		'name' => 'Header & Footer',
		'slug' => 'header-footer',
		'data' => [
			['name' => 'Flexbox Sticky Footer', 'slug' => 'flexbox-sticky-footer', 'path' => 'header-footer'],
			['name' => 'Full Page Image Header', 'slug' => 'full-page-image-header', 'path' => 'header-footer'],
			['name' => 'Full Page Image Slider Header', 'slug' => 'full-page-image-slider-header', 'path' => 'header-footer'],
			['name' => 'Half Page Image Slider Header', 'slug' => 'half-page-image-slider-header', 'path' => 'header-footer'],
			['name' => 'Video Background Header', 'slug' => 'video-background-header', 'path' => 'header-footer'],
			['name' => 'Image Gallery With Thumbnails', 'slug' => 'image-gallery-with-thumbnails', 'path' => 'header-footer'],
		],
	],
	[
		'name' => 'Business',
		'slug' => 'business',
		'data' => [
			['name' => 'Business Casual', 'slug' => 'business-casual'],
			['name' => 'Modern Business', 'slug' => 'modern-business'],
			['name' => 'Business Frontpage', 'slug' => 'business-frontpage', 'path' => 'business'],
			['name' => 'Small Business', 'slug' => 'small-business', 'path' => 'business'],
			['name' => 'Responsive Pricing Table', 'slug' => 'responsive-pricing-table', 'path' => 'business'],
			['name' => 'Shop Homepage', 'slug' => 'shop-homepage', 'path' => 'business'],
			['name' => 'Shop Item', 'slug' => 'shop-item', 'path' => 'business'],
		],
	],
	[
		'name' => 'Portfolio',
		'slug' => 'portfolio',
		'data' => [
			['name' => 'Stylish Portfolio', 'slug' => 'stylish-portfolio'],
			['name' => 'Portfolio Item Details Page', 'slug' => 'portfolio-item-details-page', 'path' => 'portfolio'],
			['name' => '1 Column Portfolio', 'slug' => '1-column-portfolio', 'path' => 'portfolio'],
			['name' => '2 Column Portfolio', 'slug' => '2-column-portfolio', 'path' => 'portfolio'],
			['name' => '3 Column Portfolio', 'slug' => '3-column-portfolio', 'path' => 'portfolio'],
			['name' => '4 Column Portfolio', 'slug' => '4-column-portfolio', 'path' => 'portfolio'],
		],
	],
	[
		'name' => 'Admin',
		'slug' => 'admin',
		'data' => [
			['name' => 'SB Admin', 'slug' => 'sb-admin'],
			['name' => 'SB Admin<sup>2</sup>', 'slug' => 'sb-admin-2'],
		],
	],
	[
		'name' => 'Blog',
		'slug' => 'blog',
		'data' => [
			['name' => 'Clean Blog', 'slug' => 'clean-blog'],
			['name' => 'Blog Home', 'slug' => 'blog-home', 'path' => 'blog'],
			['name' => 'Blog Post', 'slug' => 'blog-post', 'path' => 'blog'],
		],
	],
	[
		'name' => 'Navigation',
		'slug' => 'navigation',
		'data' => [
			['name' => 'Dropdown Menu Animation Navbar', 'slug' => 'dropdown-menu-animation-navbar', 'path' => 'navigation'],
			['name' => 'Navbar With Logo Image', 'slug' => 'navbar-with-logo-image', 'path' => 'navigation'],
			['name' => 'Scrolling Nav', 'slug' => 'scrolling-nav', 'path' => 'navigation'],
			['name' => 'Simple Sidebar', 'slug' => 'simple-sidebar', 'path' => 'navigation'],
		],
	],
	[
		'name' => 'Forms',
		'slug' => 'forms',
		'data' => [
			['name' => 'Contact Form Split Image', 'slug' => 'contact-form-split-image', 'path' => 'forms'],
			['name' => 'Contact Form With Validation', 'slug' => 'contact-form-with-validation', 'path' => 'forms'],
			['name' => 'Login Form With Floating Labels', 'slug' => 'login-form-with-floating-labels', 'path' => 'forms'],
			['name' => 'Modern Sign in Page With Split Screen Format', 'slug' => 'modern-sign-in-page-with-split-screen-format', 'path' => 'forms'],
			['name' => 'Registration Page With Floating Labels', 'slug' => 'registration-page-with-floating-labels', 'path' => 'forms'],
		],
	],
	[
		'name' => 'Review',
		'slug' => 'review',
		'data' => [
		],
	],
];
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Start Bootstrap Themes</title>
	<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" rel="stylesheet">
	<link href="assets/css/scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container px-4">
			<a class="navbar-brand" href="#page-top">Start Bootstrap</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="#basic">Basic</a></li>
					<li class="nav-item"><a class="nav-link" href="#intermediate">Intermediate</a></li>
					<li class="nav-item"><a class="nav-link" href="#header-footer">Header & Footer</a></li>
					<li class="nav-item"><a class="nav-link" href="#business">Business</a></li>
					<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="#admin">Admin</a></li>
					<li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="#navigation">Navigation</a></li>
					<li class="nav-item"><a class="nav-link" href="#forms">Forms</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header-->
	<header class="bg-primary bg-gradient text-white">
		<div class="container px-4 text-center">
			<h1 class="fw-bolder">Start Bootstrap Themes</h1>
		</div>
	</header>

<?php
	$index = 0;

	foreach($templates as $group) {
		$class = ($index++ % 2 == 0 ? "" : " class='bg-light'");
		echo "<section" . $class . " id='" . $group['slug'] . "'>" . PHP_EOL;
		echo "<div class='container'>" . PHP_EOL;
		echo "<h3>" . $group['name'] . "</h3>" . PHP_EOL;
		echo "<div class='row justify-content-left'>" . PHP_EOL;

		foreach($group['data'] as $template) {
			$title = $template['name'];
			$slug = $template['slug'];
			$linkBase = (isset($template['path']) ?
				$template['path'] . "/" . $slug : $slug . "/index"
			);

			echo "<div class='col-4'>" . PHP_EOL;
			echo "<div class='card mb-4'>" . PHP_EOL;
			echo "<a href='php/" . $linkBase . ".php' class='card-link' target='_blank'>" . PHP_EOL;
			echo "<img src='assets/img/thumbnails/" . $slug . ".png' class='card-img-top' alt='Bare'>" . PHP_EOL;
			echo "</a>" . PHP_EOL;
			echo "<div class='card-body'>" . PHP_EOL;
			echo "<h5 class='card-title'>" . $title . "</h5>" . PHP_EOL;
			echo "<a href='html/" . $linkBase . ".html' class='card-link' target='_blank'>html</a>" . PHP_EOL;
			echo "<a href='php/" . $linkBase . ".php' class='card-link' target='_blank'>php</a>" . PHP_EOL;
			echo "</div>" . PHP_EOL;
			echo "</div>" . PHP_EOL;
			echo "</div>" . PHP_EOL;
		}

		echo "</div>" . PHP_EOL . "</div>" . PHP_EOL;
		echo "</section>" . PHP_EOL;
	}
?>

	<!-- Footer-->
	<footer class="py-5 bg-dark">
		<div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!-- Core theme JS-->
	<script src="assets/js/scrolling-nav.js"></script>
</body>
</html>

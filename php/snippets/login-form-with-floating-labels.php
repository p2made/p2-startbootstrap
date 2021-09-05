<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>login-form-with-floating-labels</title>
	<!-- Favicon-->
	<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" rel="stylesheet">
	<link href="assets/css/login-form-with-floating-labels.css" rel="stylesheet">
</head>
<body>

	<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card border-0 shadow rounded-3 my-5">
						<div class="card-body p-4 p-sm-5">
							<h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
							<form>
								<div class="form-floating mb-3">
									<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
									<label for="floatingInput">Email address</label>
								</div>
								<div class="form-floating mb-3">
									<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
									<label for="floatingPassword">Password</label>
								</div>

								<div class="form-check mb-3">
									<input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
									<label class="form-check-label" for="rememberPasswordCheck">
										Remember password
									</label>
								</div>
								<div class="d-grid">
									<button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
										in</button>
								</div>
								<hr class="my-4">
								<div class="d-grid mb-2">
									<button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
										<i class="fab fa-google me-2"></i> Sign in with Google
									</button>
								</div>
								<div class="d-grid">
									<button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
										<i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

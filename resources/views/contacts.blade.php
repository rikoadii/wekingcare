<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<title>Contacts - Brand</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
	</head>

	<body>
		<nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
			<div class="container">
				<a class="navbar-brand d-flex align-items-center" href="/"
					><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><img src="assets/img/brands/brandcare.jpg" class="img-fluid" /></span><span>We King Care</span></a
				><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Beranda</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('book') }}">Pelayanan</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
					</ul>
					<a class="btn btn-primary shadow" role="button" href="{{ route('contact') }}">Help</a>
				</div>
			</div>
		</nav>
		<section class="py-5">
			<div class="container py-5">
				<div class="row mb-5">
					<div class="col-md-8 col-xl-6 text-center mx-auto">
						<p class="fw-bold text-success mb-2">Contacts</p>
						<h2 class="fw-bold">How you can reach us</h2>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 col-xl-4">
						<div>
							<form class="p-3 p-xl-4" method="post" action="contact.php">
								<div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name" /></div>
								<div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email" /></div>
								<div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
								<div><button class="btn btn-primary shadow d-block w-100" type="submit" name="submit">Send</button></div>
							</form>
						</div>
					</div>
					<div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
						<div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
							<div class="d-flex align-items-center p-3">
								<div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
									<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
										<path
											d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
										></path>
									</svg>
								</div>
								<div class="px-2">
									<h6 class="fw-bold mb-0">Phone</h6>
									<p class="text-muted mb-0">+6282340616393</p>
								</div>
							</div>
							<div class="d-flex align-items-center p-3">
								<div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
									<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
										<path
											d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
										></path>
									</svg>
								</div>
								<div class="px-2">
									<h6 class="fw-bold mb-0">Email</h6>
									<p class="text-muted mb-0">weeekingcare@gmail.com</p>
								</div>
							</div>
							<div class="d-flex align-items-center p-3"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="bg-dark">
			<div class="container py-4 py-lg-5">
				<div class="row justify-content-center">
					<div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
						<h3 class="fs-6 fw-bold">About</h3>
						<ul class="list-unstyled">
							<li><a href="#">Company</a></li>
							<li><a href="#">Team</a></li>
						</ul>
					</div>
					<div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
						<h3 class="fs-6 fw-bold">Menu</h3>
						<ul class="list-unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Booking</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last">
						<div class="fw-bold d-flex align-items-center mb-2">
							<span class="bs-icon-sm bs-icon-circle bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"
								><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
									<path
										fill-rule="evenodd"
										d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"
									></path>
									<path
										d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"
									></path></svg></span
							><span>We king Care</span>
						</div>
						<p class="text-muted">Terpercaya oleh ribuan pasien untuk perawatan kesehatan terbaik.</p>
					</div>
				</div>
				<hr />
				<div class="text-muted d-flex justify-content-between align-items-center pt-3">
					<p class="mb-0">Copyright © 2023 We king Care</p>
					<ul class="list-inline mb-0">
						<li class="list-inline-item">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
								<path
									d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
								></path>
							</svg>
						</li>
						<li class="list-inline-item">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
								<path
									d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
								></path>
							</svg>
						</li>
						<li class="list-inline-item">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
								<path
									d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
								></path>
							</svg>
						</li>
					</ul>
				</div>
			</div>
		</footer>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/bs-init.js"></script>
		<script src="assets/js/bold-and-dark.js"></script>
	</body>
</html>

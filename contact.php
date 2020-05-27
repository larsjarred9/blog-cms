<?php
require('php/database.php');
?>
<!doctype html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/618095047711391757/713383608932368434/default.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
	<title>De Colomnist - Contact</title>
</head>

<body>
	<header class="contact-header">
		<div class="container text-center">
			<h1>Contact</h1>
			<p>Heeft u vragen? Contacteer ons. We reageren zo snel mogenlijk
			terug.</p>
		</div>
	</header>
	<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
		<div class="container nav">
			<ul class="nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-secondary" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="archief.php">Archief</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="biografie.php">Columnist</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link text-dark" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<section class="container card card-body" id="contact">
		<div class="row">
			<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="php/contactverwerk.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="name" name="name" class="form-control">
								<label for="name" class="">Naam</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="email" name="email" class="form-control">
								<label for="email" class="">E-Mail</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="subject" name="subject" class="form-control">
								<label for="subject" class="">Onderwerp</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
								<label for="message">Bericht</label>
							</div>
						</div>
					</div>
					<br>
					<div class="text-center text-md-left">
						<input type="submit" class="btn btn-dark" value="Versturen">
					</div>
				</form>
				<div class="status"></div>
			</div>
			<div class="col-md-3 text-center">
				<ul class="list-unstyled mb-0">
					<li><i class="icon fas fa-map-marker-alt fa-2x"></i>
						<p>Lange Voorhout 67, 2354 DK Den Haag</p>
					</li>

					<li><i class="icon fas fa-phone mt-4 fa-2x"></i>
						<p>+31 6 40 89 99 88 4</p>
					</li>

					<li><i class="icon fas fa-envelope mt-4 fa-2x"></i>
						<p>info@decolomnist.nl</p>
					</li>
				</ul>
			</div>
			<!--Grid column-->

		</div>

	</section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/24c24daece.js"></script>
</body>

</html>
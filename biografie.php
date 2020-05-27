<?php
require('php/database.php');
if($stmt = $conn->prepare("SELECT text FROM bio WHERE id = 1")) {
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($text);
        $stmt->fetch();
    }
}

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
	<title>De Colomnist - Biografie</title>
</head>

<body>
	<header class="biografie">
		<div class="container biografie-container text-center">
		<img src="images/geurts.jpg" width="150" height="150">
			<h2>Scheurmink Geurts</h2>
		</div>
	</header>
	<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
		<div class="container">
			<ul class="nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link text-secondary" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="archief.php">Archief</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="biografie.php">Columnist</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<section class="container" id="biografie">
		<div class="row">
			<span class="maxw"><?php echo $text;?></span>
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
<?php
session_start();
require('php/database.php');
$sql = "SELECT id,title,subtext,text,image FROM articles ORDER BY date DESC LIMIT 12;";
$result = $conn->query($sql);
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
	<title>De Colomnist - Home</title>
</head>

<body>
	<header>
		<div class="container text-center">
			<h1>De Colomnist</h1>
			<p>Een vrije mening over linkse politiek.</p>
		</div>
	</header>
	<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
		<div class="container">
			<ul class="nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link text-dark" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="archief.php">Archief</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="biografie.php">Columnist</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<section id="article">
		<div class="container">
			<div class="row">
			<?php
                foreach ($result as $item) {
                $image = $item['image'];
                echo "
                <div class='colum col-sm-12 col-md-6 col-lg-4'>
				<article class='card' style='background-image: url(";
				echo $image; 
				echo "); '>
                    <div class='card-body'>
                        <h2>".$item['title']."</h2>
                        <p>".$item['subtext']."</p>
                        <p class='read'><a class='stretched-link' href='post.php?id=".$item['id']."'>Lees verder...</a></p>
                    </div>
                </article>
                </div>                
                ";
                }
                ?>
			</div>
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
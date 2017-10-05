<!DOCTYPE html>
<html lang="en">
<head>
	<title>Team Scotland Yard Assignment 5</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Override CSS -->
	<link rel="stylesheet" type="text/css" href="css/override.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">

</head>

<body>		
		
	<!--Navigation bar-->
	<?php include "nav.inc" ?>			

		<header>
			<div class="row justify-content-center">
				<div class="col-4">
					<h1>Team Scotland Yard</h1>	
				</div>
			</div>			
		</header>

		<div class="container-fluid">
			<section>
				<div class="row">
					<div class="col-4">
						<div class="in-col">
							<h2>Adam Struhl - Information Architect</h2>
						</div>
					</div>
					<div class="col-4">
						<div class="in-col">
							<h2>Anthony Russell - Design Artist</h2>
						</div>
					</div>
					<div class="col-4">
						<div class="in-col">
							<h2>Yingju Chen - Code Monkey</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<div class="in-col">
							<article>
								<a href="astruhl.php">
									<figure>
									<img src="images/architect.jpg" alt="Adam Struhl">
									</figure>
								</a>
								<a href="astruhl.php"> Read more...</a>
							</article>
						</div>	
					</div>

					<div class="col-4">
						<div class="in-col">
							<article>
									<a href="anthony.php">
									<figure>
									<img src="images/design.png" alt="Anthony Russell">
									</figure>
									</a>
								<a href="anthony.php">Read more...</a>
							</article>
						</div>	
					</div>

					<div class="col-4">
						<div class="in-col">
							<article>
									<a href="lulu.php">
									<figure>
									<img src="images/monkey.jpg" alt="Yinju Chen">
									</figure>
									</a>
								<a href="lulu.php"> Read more... </a>
							</article>
						</div>	
					</div>

				</div>
			</section>
		</div>	
	
<?php include "footer.inc" ?>	
</body>
</html>

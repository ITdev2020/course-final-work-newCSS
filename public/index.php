<?php
    session_start();
?>

<?php
require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Healthy lifestyle</title>
		<link rel="shortcut icon" href="../app/assets/favicon.ico">
		<!-- Link Google Font Roboto-->
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
		<!-- Link Google Font PT Sans regular-->
		<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
		<!-- Link Fontawesome-->
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
			integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- tiny-slider -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

		<!-- Reset browsers default style-->
		<link rel="stylesheet" href="../app/css/reset.css" />
		<!-- Page style.css-->
		<link rel="stylesheet" href="../app/css/style.css" />
	</head>
	<body>
		<?php
			// vietoj include galima naudoti requier
			// include, jeigu klaidingas path, sekancia koda htmle rodys ekrane.
			// requier, jeigu klaidingas path, ekrane bus klaida ir daugiau neko
			include('../app/views/backToTop.php');
			include('../app/views/login.php');
			include('../app/views/header.php');
			include('../app/views/sponsors.php');
			include('../app/views/features.php');
			include('../app/views/youNeed.php');
			include('../app/views/sendMessage.php');
			include('../app/views/solution.php');
			include('../app/views/blog.php');
			include('../app/views/footer.php');
		?>

		<!-- =============== Scripts ===================== -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
		<script src="../app/js/script.js"></script>
	</body>
</html>

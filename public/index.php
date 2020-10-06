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

		<!-- Link style.css-->
		<link rel="stylesheet" href="../app/css/style.css" />
	</head>
	<body>
		<!-- Back to top button -->
		<!-- <button class="fas fa-chevron-up" onclick="topFunction()" id="to-top" title="Go to top"></button> -->
		<!-- Go to home button -->
		<button class="fas fa-chevron-up" onclick="document.location='#home'" id="to-top" title="Go to home"></button>
		<!-- Login -->
		<section class="login default-width">
			<div>
				<?php
                    if(isset($_SESSION['u_id'])) {
                        echo '<form action="../app/includes/logout.inc.php" method="post">
                        <button type="submit" name="submit">Logout</button></form>';
                    } else {
                        echo '<form action="../app/includes/login.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username" />
                        <input type="password" name="pwd" placeholder="Password" />
                        <button type="submit" name="submit">Login</button>
						<button type="reset" onclick="document.location=\'../app/src/signup.php\'">Sign up</button>
						</form>';
                    }
				?>
				<?php
            		if(isset($_SESSION['u_id'])) {
                		echo "<p>Prisijungete sekmingai</p>";
            		}
        		?>
			</div>
		</section>

		<section class="header">
		<!-- Section: page header -->
		<div id="home">

				<!-- Navigation container -->
				<div class="nav default-width">
					<!-- Left side -->
					<div>
						<a href="#home">
							<img src="../app/assets/logo.png" alt="Logo" />
						</a>
					</div>

					<!-- Right side -->
					<div class="mobhide">
						<a href="#">Home</a>
					</div>
					<div class="mobhide">
						<a href="#">Mega Menu</a>
					</div>
					<div class="mobhide">
						<a href="#">About</a>
					</div>
					<div class="mobhide">
						<a href="#">Blog</a>
					</div>
					<div class="mobhide">
						<a href="#">Contact</a>
					</div>
					<div>
						<button class="btn" onclick="document.location='#ourProducts'">Get Webify Today</button>
					</div>

					<!-- burger -->
					<div class="burger">
						<span class='fas fa-bars' onclick="burgerMenuToggle()"></span>
						<ul id="burger-menu">
							<li id="burger-menu" class="mobmenu">
								<a href="#home" onclick="burgerMenuToggle()">Home</a>
							</li>
							<li id="burger-menu" class="mobmenu">
								<a href="#home" onclick="burgerMenuToggle()">Mega Menu</a>
							</li>
							<li id="burger-menu" class="mobmenu">
								<a href="#home" onclick="burgerMenuToggle()">About</a>
							</li>
							<li id="burger-menu" class="mobmenu">
								<a href="#home" onclick="burgerMenuToggle()">Blog</a>
							</li>
							<li id="burger-menu" class="mobmenu">
								<a href="#home" onclick="burgerMenuToggle()">Contact</a>
							</li>
						</ul>
					</div>
				</div>

				<!-- Hero container -->
				<div class="hero">
					<div class="default-width">
						<!-- Left: hero text -->
						<div>
							<h1>Organic & natural healthy lifestyle</h1>
							<p>Performance review synergize productive mindfulness for downselect and horsehead offer.</p>
							<button class="btn" onclick="document.location='#home'">Discover More</button>
						</div>
						<!-- Right: hero image -->
						<div>
							<img src="../app/assets/hero.png" alt="header image" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Sponsors -->
		<section class="sponsors">
			<div>
				<img src="../app/assets/client-1.png" alt="client-1 logo" />
				<img src="../app/assets/client-2.png" alt="client-2 logo" />
				<img src="../app/assets/client-3.png" alt="client-3 logo" />
				<img src="../app/assets/client-4.png" alt="client-4 logo" />
				<img src="../app/assets/client-5.png" alt="client-5 logo" />
			</div>
		</section>

		<!-- Section: Features -->
		<section class="features">
			<div class="default-width">
				<!-- Title -->
				<div class="title">
					<h5>Organic Business Features</h5>
					<h3>Our Unique Features</h3>
				</div>
				<!-- Cards -->
				<div class="cards">
					<div class="cards-item anim01">
						<img src="../app/assets/leaf.png" alt="leaf image" />
						<h4>100% Organic Nr1</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
						<h6 class="cards-item-underline">Learn More</h6>
					</div>
					<div class="cards-item anim02">
						<img src="../app/assets/leaf.png" alt="leaf image" />
						<h4>100% Organic Nr2</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
						<h6 class="cards-item-underline">Learn More</h6>
					</div>
					<div class="cards-item anim03">
						<img src="../app/assets/leaf.png" alt="leaf image" />
						<h4>100% Organic Nr3</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
						<h6 class="cards-item-underline">Learn More</h6>
					</div>
					<div class="cards-item anim04">
						<img src="../app/assets/leaf.png" alt="leaf image" />
						<h4>100% Organic Nr4</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
						<h6 class="cards-item-underline">Learn More</h6>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Everything you ever need. -->
		<section class="you-need">
			<div class="default-width">
				<div class="left">
					<div>
						<h5>Set up your website in minutes and bring your brand to life.</h5>
						<h2>Organic. Fresh. Natural. Everything you ever need.</h2>
					</div>
					<div>
						<img src="../app/assets/leaf_white.png" alt="leaf image" />
						<h4>100% Organic</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
					</div>
					<div>
						<img src="../app/assets/leaf_white.png" alt="leaf image" />
						<h4>100% Organic</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
					</div>
					<div>
						<img src="../app/assets/leaf_white.png" alt="leaf image" />
						<h4>100% Organic</h4>
						<h6>Cobbler's pose, bound angle pose staff pose bow.</h6>
					</div>
				</div>
				<div class="right">
					<img src="../app/assets/hero-2.png" alt="hero-2 image" />
				</div>
			</div>
		</section>

		<!-- Section: Send message -->
		<section class="send-message">
			<div>
				<h3 id="ourProducts">Our Handpicked Products</h3>
				<!-- Formos pradzia -->
				<form action="<?php $_PHP_SELF; ?>" method="post">
					<!-- Pavienis laukas - Your name -->
					<label for="userName"><h4>Your name</h4></label>
					<input type="text" name="userName" placeholder="Jūsų vardas" required />
					<!-- Pavienis laukas - Your email -->
					<label for="userEmail"><h4>Your email</h4></label>
					<input type="text" name="userEmail" placeholder="Jūsų el. pašto adresas" required />
					<!-- Pavienis laukas - Message -->
					<label for="myMessage"><h4>Message</h4></label>
					<textarea name="myMessage" placeholder="Jūsų žinutė..." required></textarea>
					<p><button class="btn" name="submit" type="submit">Send</button></p>
				</form>
			</div>
		</section>

		<!-- Section: Solution -->
		<section class="solution">
			<div>
				<h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</h6>
				<h2>The convenient & affordable Organic solution.</h2>
				<button class="btn" onclick="document.location='#home'">Get Organic</button>
			</div>
		</section>

		<!-- Section: Blog -->
		<section class="blog">
			<div class="default-width">
				<!-- Title -->
				<div>
					<h5>Daily Blog journal</h5>
					<h3>Organic Food Blog</h3>
				</div>

				<!-- Tiny slider -->
				<div class="slider">
					<div class="slider__item">
						<img src="../app/assets/blog-1.png" alt="blog-1 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-2.png" alt="blog-2 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-3.png" alt="blog-3 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-4.png" alt="blog-4 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-1.png" alt="blog-1 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-2.png" alt="blog-2 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-3.png" alt="blog-3 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
					<div class="slider__item">
						<img src="../app/assets/blog-4.png" alt="blog-4 image" />
						<h5>8 Easy Pieces I’ve Worn Over & Over to Have it All</h5>
						<h6>David Beck <i class="fas fa-circle"></i> April 13, 2019</h6>
					</div>
				</div>
			</div>
		</section>

		<!-- Section: Footer -->
		<section class="footer">
			<div class="default-width">
				<div>
					<h5>Resources</h5>
					<h6>About Us</h6>
					<h6>Contact</h6>
					<h6>Terms & Conditions</h6>
				</div>
				<div>
					<h5>Social Media</h5>
					<div class="socmedia">
						<div class="socmedia-left">
							<i class="fab fa-facebook-f"></i>
							<i class="fab fa-twitter"></i>
							<i class="fab fa-instagram"></i>
						</div>
						<div>
							<h6>Facebook</h6>
							<h6>Twitter</h6>
							<h6>Instagram</h6>
						</div>
					</div>
				</div>
				<div>
					<h5>Address</h5>
					<h6>497 Evergreen Rd. Roseville, CA 95673</h6>
					<h6>+44 345 678 903</h6>
					<h6>adobexd@mail.com</h6>
				</div>
			</div>
			<h6>
				&copy;
				<?php echo date('Y'); ?>
				Built with pride and caffeine. All rights reserved.
			</h6>
		</section>
		<!-- =============== Scripts ===================== -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
		<script src="../app/js/script.js"></script>
	</body>
</html>

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

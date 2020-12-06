<!-- Section: Send message -->
<section class="send-message">
	<div>
		<h3 id="ourProducts">Our Handpicked Products</h3>

		<!-- Form start -->
		<form action="<?php $_PHP_SELF; ?>" method="post">
			<!-- Input - Your name -->
			<label for="userName"><h4>Your name</h4></label>
			<input type="text" name="userName" placeholder="Please enter your name here" required />
			<!-- Input - Your email -->
			<label for="userEmail"><h4>Your email</h4></label>
			<input type="text" name="userEmail" placeholder="Please enter your email here" required />
			<!-- Input - Message -->
			<label for="myMessage"><h4>Message</h4></label>
			<textarea name="myMessage" placeholder="Type your message here..." required></textarea>
			<!-- Send - post method -->
			<button class="btn" name="submit" type="submit">Send</button>
		</form>

	</div>
</section>

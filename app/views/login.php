<!-- Login -->
<section class="login default-width">
  <div>
    <?php
      if(isset($_SESSION['u_id'])) {
        echo '<form action="../app/src/includes/logout.inc.php" method="post">
              <button type="submit" name="submit">Logout</button></form>';
      } else {
        echo '<form action="../app/src/includes/login.inc.php" method="post">
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

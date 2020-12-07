<!-- Navigation container -->

<div class="nav default-width">

  <!-- Left side -->
  <div>
    <a href="#home">
      <img src="../app/assets/logo.png" alt="Logo" />
    </a>
  </div>

  <!-- Right side -->
  <div class="phone-hide">
    <a href="#">Home</a>
  </div>
  <div class="phone-hide">
    <a href="#">Mega Menu</a>
  </div>
  <div class="phone-hide">
    <a href="#">About</a>
  </div>
  <div class="phone-hide">
    <a href="#">Blog</a>
  </div>
  <div class="phone-hide">
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
        <a href="#ourProducts" onclick="burgerMenuToggle()">Contact</a>
      </li>
    </ul>
  </div>

</div>

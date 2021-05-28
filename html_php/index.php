<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab Kitchen +</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
  </head>
  <body>
    <div class="top">
      <div class="log">
    <?php
      if (isset($_SESSION["firstName"])) {
        $link = "logout.php";
        echo "<a href = '$link'>Logout</a>";
      } else {
        echo '
        <h2 class="onHover">Login/Register</h2>
        <a href="login.php"><img src="../images/PngItem_1114675.png" alt ="Login/Register"></a>
        ';
      }
     ?>
     <!-- image source for logout pngitem.com -->
     </div>
    </div>

    <header>
      <a href="index.php">
				<h1>KK<img src="../images/plus.png" alt ="Plus Symbol"></h1>
				<h1 class="hLarge">Kebab Kitchen <img src="../images/plus.png" alt ="Plus Symbol"></h1>
			</a>
    </header>

    <div id="discount">
      <a href="menu.php"><h2>use code <em>'KK10'</em> for 10% off</h2></a>
      <a href="menu.php"><h2>Menu</h2></a>
    </div>

    <main>
      <?php
        if (isset($_SESSION["firstName"])) {
          echo "<h3>Welcome back " . $_SESSION["firstName"] . "</h3>";
        }
      ?>

      <a href="menu.php"
        <section id="orderBtn">Order Now!!</section>
      </a>

      <a href="menu.php"
        <div class="dealWrap">
          <article>
            <div class="wrapper">
              <h3>Deal 1</h3>
              <img src="../images/pizza.png" alt ="pizza">
            </div>
            <p><em>3 for 2</em> on medium sized pizzas!</p>
          </article>

          <article>
            <div class="wrapper">
              <h3>Deal 2</h3>
              <img src="../images/fries.png" alt="fries">
            </div>
            <p>Free side when spending over <em>£20!</em></p>
          </article>

          <article>
            <div class="wrapper">
              <h3>Deal 3</h3>
              <img src="../images/can.png" alt ="pop">
            </div>
            <p>Free can of pop with all <em>LARGE</em> kebabs!</p>
          </article>
        </div>
      </a>
    </main>

  <footer>
    <nav>
      <a href="https://www.paypal.com/uk/home" target="_blank"><img src="../images/paypal2.png" alt ="PayPal"></a>
      <a href="contact.php"><img src="../images/contactUs.png" alt ="Contact Us"></a>
      <a href="https://twitter.com/" target="_blank"><img src="../images/twitter.png" alt ="Twitter"></a>
      <a href="https://www.facebook.com/" target="_blank"><img src="../images/facebook.png" alt ="Facebook"></a>
      <a href="https://www.instagram.com/?hl=en" target="_blank"><img src="../images/insta.png" alt ="Instagram"></a>
    </nav>
    <h6>&#169; Chris Freeman 2021</h6>

  </footer>

  </body>
</html>

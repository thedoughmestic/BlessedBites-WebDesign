<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Doughmestic - Business Webpage</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        color: #333;
      }
      header {
        background: linear-gradient(45deg, #b23e3e, #421414);
        color: rgb(255, 255, 255);
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      header h1 {
        font-size: 2.5rem;
        color: rgb(247, 247, 248);
        margin-bottom: 10px;
      }
      header p {
        font-size: 1.2rem;
      }
      nav {
        margin: 20px 0;
        text-align: center;
      }
      nav a {
        margin: 0 15px;
        text-decoration: none;
        font-size: 1.1rem;
        color: #333;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
      }
      nav a:hover {
        background-color: #400101;
        color: white;
      }
      section {
        display: flex;
        justify-content: center;
        margin: 30px;
      }
      .content {
        max-width: 1000px;
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }
      h2 {
        color: #400101;
        margin-bottom: 20px;
        font-size: 2rem;
      }
      p {
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 20px;
      }
      ul {
        margin-bottom: 30px;
      }
      ul li {
        margin-bottom: 10px;
        font-size: 1.1rem;
      }
      img {
        width: 100%;
        height: auto;
        margin-bottom: 30px;
        border-radius: 10px;
      }
      footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px;
        position: relative;
        bottom: 0;
        width: 100%;
        margin-top: 40px;
      }
      footer p {
        font-size: 1rem;
      }
      footer a {
        color: #400101;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>The Doughmestic</h1>
      <p>Your go-to treats for lightening up your day</p>
    </header>

    <nav>
      <a href="#about">About Us</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
    </nav>

    <section>
      <div class="content">
        <h2 id="about">About The Doughmestic</h2>
        <p>
          The Doughmestic is your go-to destination for deliciously crafted
          cookies and desserts that bring the warmth of home-baked goodness to
          every bite. We specialize in creating a variety of sweet treats, from
          classic chocolate chip 🍪 and so on. The Doughmestic offers a taste of
          homemade comfort with a touch of creative flair. 🤎
        </p>
        <img src="The Doughmestic logo.png" alt="Business image" />

        <h2 id="services">Our Treats</h2>
        <p>Cookies<3 :</p>
        <ul>
          <li>
            <strong>Classic:</strong> Original Dough with Choco Chips, Dark
            Choco Chunks.
          </li>
          <li>
            <strong>Matcha Munchies:</strong> Matcha Dough with White choco
            chunk and Cream Cheese Filling.
          </li>
          <li>
            <strong>La Rouge:</strong> Red Velvet Dough with White choco chunk
            and Cream Cheese Filling.
          </li>
        </ul>

        <h2>Special Offer Calculation</h2>
        <?php
            // PHP variables and arithmetic operations
            $price_per_cookie = 2.50; // Price of one cookie
            $number_of_cookies = 3;   // Number of cookies bought
            $free_cookies = 1;        // Free cookie offer
            $total_cookies = $number_of_cookies + $free_cookies;

            // Calculating total price and discount
            $subtotal = $price_per_cookie * $number_of_cookies;
            $discount = 0.10 * $subtotal;  // 10% discount
            $total_price = $subtotal - $discount;

            // Displaying the results
            echo "<p>Price per cookie: $" . $price_per_cookie . "</p>";
            echo "<p>Total cookies (including free): " . $total_cookies . "</p>";
            echo "<p>Subtotal: $" . $subtotal . "</p>";
            echo "<p>Discount (10%): $" . $discount . "</p>";
            echo "<p>Total Price after discount: $" . $total_price . "</p>";
        ?>

        <h2 id="contact">Contact Us</h2>
        <p>
          Instagram:
          <a href="https://www.instagram.com/thedoughmestic._/" target="_blank">
            <i class="fab fa-instagram"></i> Follow us on Instagram
          </a>
        </p>
      </div>
    </section>

    <footer>
      <p>&copy; 2024 The Doughmestic. | <a href="#">Privacy Policy</a></p>
    </footer>
  </body>
</html>

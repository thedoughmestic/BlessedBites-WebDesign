<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Webpage</title>
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
      <p>Your go to treats for lighten up your day</p>
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

        <h2 id="payment">Make a Payment via QRIS</h2>
        <form action="index.php" method="POST">
          <label for="product">Select Product:</label>
          <select name="product" id="product">
            <option value="classic">Classic - Rp 12.000</option>
            <option value="matcha">Matcha Munchies - Rp 15.000</option>
            <option value="rouge">La Rouge - Rp 13.000</option>
          </select>
          
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
          
          <button type="submit">Generate QR Code</button>
        </form>

        <?php
        // PHP Payment Processing Logic for QRIS
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product = $_POST['product'];
            $quantity = $_POST['quantity'];

            // Define product prices in IDR
            $prices = [
                'classic' => 12.000,
                'matcha' => 15.000,
                'rouge' => 13.000
            ];

            if (isset($prices[$product])) {
                $totalPrice = $prices[$product] * $quantity;

                // Display the total price
                echo "<h3>Total Payment: Rp " . number_format($totalPrice, 0, ',', '.') . "</h3>";

                // Assuming you are using a QRIS payment gateway (Midtrans, Duitku, etc.)
                // You would send a request to the payment gateway API here to generate the QRIS QR code
                // For simplicity, let's assume we have a QR code image URL

                $qrCodeUrl = "c:\Users\ASUS\Downloads\Qr theDoughmestic.png";  // Replace with the real QR code from the payment gateway

                echo "<h3>Scan the QR code to pay:</h3>";
                echo "<img src='$qrCodeUrl' alt='QRIS QR Code' style='width:300px;height:300px;'>";

                // After the user scans the QR code, the payment status would be updated by the payment gateway
            } else {
                echo "Invalid product selected.";
            }
        }
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
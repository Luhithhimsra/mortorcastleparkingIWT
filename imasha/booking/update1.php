<!DOCTYPE html>
<html>

<head>
  <title>Motor Castle Parking Solutions</title>
  <meta charset="utf-8">
  <script src="web.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/headerr.css">
  <link rel="stylesheet" href="style/footer.css">
  <link rel="stylesheet" href="style/form.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="style/table.css">
  <script src="payment.js"></script>

</head>

<body>

<header>
    <?php include('../../luhith/components/header2.php') ?>
  </header>

  <hr>

  <div class="main-content">
    <div class="form">
      <div class="form-title">
        <center>
          <h2>Update Form</h2>
        </center>
      </div>
      <div class="form-body">
        <form action="../booking/update.php" method="post" id="reservationForm">
          <div class="reservation-info">
            <div class="field-input">
              Reservation ID:
              <input type="text" id="reservatio-id" name="reservatio-id" required>
            </div>
            <div class="field-input">
              Username:
              <input type="text" id="username" name="username">
            </div>

            <div class="field-input">
              Date:
              <input type="date" id="date" name="date" required>
            </div>

            <div class="time">
              <div class="field-input" id="fromTimeDiv">
                From
                <input type="time" id="fromTime" name="fromTime" required>
              </div>
              <div class="field-input">
                To
                <input type="time" id="toTime" name="toTime" required>
              </div>
            </div>
            <div class="field-input">
              Vehicle type:
              <select name="Vehicle-type" id="vehicle">
                <option>car</option>
                <option>van</option>
                <option>jeep</option>
                <option>Bus</option>
                <option>cab</option>

              </select>
            </div>
            <div class="field-input">
              Package type:
              <select name="Package-type" id="package">
                <option>General</option>
                <option>Premium</option>
                <option>VIP</option>
              </select>
            </div>
          </div>



          <div class="field-input">
            <center><input type="submit" value="SAVE"></center>

          </div>



      </div>
    </div>
    </form>
  </div>

  </div>
  </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">

        <!-- Quick Links Section -->
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">EV Charging</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <!-- Extra Links Section -->
        <div class="footer-col">
          <h4>Extra Links</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Need Help</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Payment Option</a></li>
          </ul>
        </div>

        <!-- Contact Info Section -->
        <div class="footer-col">
          <h4>Contact Info</h4>
          <ul>
            <li><i class="fas fa-phone-alt"></i> +123-456-7890</li>
            <li><i class="fas fa-phone-alt"></i> +111-223-3267</li>
            <li><i class="fas fa-phone-alt"></i> +111-567-4532</li>
            <li><i class="fas fa-envelope"></i> infomotorcastle@gmail.com</li>
          </ul>
        </div>

        <!-- Follow Us Section -->
        <div class="footer-col">
          <h4>Follow Us</h4>
          <ul>
            <li><i class="fab fa-facebook"></i> <a href="#">Facebook</a></li>
            <li><i class="fab fa-instagram"></i> <a href="#">Instagram</a></li>
            <li><i class="fab fa-twitter"></i> <a href="#">Twitter</a></li>
            <li><i class="fab fa-linkedin"></i> <a href="#">LinkedIn</a></li>
            <li><i class="fab fa-whatsapp"></i> <a href="#">WhatsApp</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- Footer Copyright -->
    <div class="footer-copyright">
      COPYRIGHT @ MOTOR CASTLE PARKING SOLUTIONS 2024
    </div>
  </footer>
</body>
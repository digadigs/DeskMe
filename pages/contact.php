<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel=" shortcut icon" href="../assets/favicon.png"/>
    <title>DeskMe | Support</title>
</head>
<body>
    <div class="main">
        <div class="wrapper light">
            <header>
                <div class="container">
                    <div class="logo">
                       <img src="../assets/Logo.png" alt="Logo"> 
                       <h3>DeskMe</h3>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="../admin/booking.php">Booking</a></li>
                            <li><a href="./contact.php">Support</a></li>
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <li><a href="index.php?logout='1'">Logout</a></li>
                            <?php endif ?>
                        </ul>
                        <a href="#">
                        <div class="profile">
                           <img src="../assets/user-login.png">
                        </div>
                        </a>
                    </div>
                    <div class="hamburger-menu">
                        <i class='bx bx-menu'></i>
                    </div>
                </div>
            </header>

                <div class="container">
                <h2 style="margin-bottom: 30px; font-size: 30px">Frequently Asked Questions:</h2>
                <div class="accordion">
                    <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">How do I make a booking using the system?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                        To make a booking, navigate to our website and select the "Booking" option. Follow the 
                        prompts to choose your desired date and any additional preferences. Complete the required
                        information and confirm your reservation. You will receive a confirmation number.
                        </p>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">Can I modify or cancel my booking after it's been confirmed?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                        For now, No. We are currently developing that part.
                        </p>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false">
                        <span class="accordion-title">What happens if I encounter technical issues during the booking process?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                        If you experience technical difficulties while making a booking, first try refreshing the
                        page or clearing your browser's cache. If the issue persists, contact our technical
                        support team via the provided contact information on the website. Be prepared to provide
                        details about the problem, such as error messages or the steps leading to the issue, for a quicker resolution.
                        </p>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false">
                        <span class="accordion-title">What information is required during the booking process?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                        When making a booking, you'll typically need to provide essential information such as your name, contact details,
                        and any specific preferences or requirements related to your reservation.
                        </p>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">How do I search for available dates and times for booking?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                        To check availability, visit our website and navigate to the booking section.
                        Select your desired date and the system will display the available 
                        options for you to choose from.
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="bottom-area">
                <div class="container">
                    <div class="toggle-btn">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/landing.js"></script>
    <script src="../js/contact.js"></script>
</body>
</html>
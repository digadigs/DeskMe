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
    <link rel="stylesheet" href="../css/landing.css">
    <link rel=" shortcut icon" href="../assets/favicon.png"/>
    <title>DeskMe | Home</title>
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
                            <li><a href="../admin/booking.php">Booking</a></li>
                            <li><a href="#">Contact</a></li>
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <li><a href="index.php?logout='1'">Logout</a></li>
                            <?php endif ?>
                        </ul>
                        <a href="./admin/index.php">
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
            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="title">
                            <h1>Welcome, <?php echo $_SESSION['username']; ?>.</h1>
                        </div>
                        <p class="text">Ready to elevate your experience? Book now and unlock a world of possibilities. Your journey begins here!</p>
                        <div class="cta btn">
                            <a href="./pages/register.php" class="btn">Follow Us</a>
                        </div>
                    </div>
                    <div class="right ">
                        <img src="../assets/user-login1.png" alt="" class="person">
                    </div>
                </div>
            </div>
            <div class="bottom-area">
                <div class="container">
                    <div class="toggle-btn">
                        <i class='bx bxs-sun'></i>
                        <i class='bx bxs-moon' ></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/landing.js"></script>
</body>
</html>
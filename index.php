<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/landing.css">
    <link rel=" shortcut icon" href="./assets/favicon.png"/>
    <title>DeskMe | Home</title>
</head>
<body>
    <div class="main">
        <div class="wrapper light">
            <header>
                <div class="container">
                    <div class="logo">
                       <img src="./assets/Logo.png" alt="Logo"> 
                       <h3>DeskMe</h3>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="./pages/about.php">About</a></li>
                            <li><a href="./pages/login.php">Login</a></li>
                        </ul>
                        <a href="./admin/index.php">
                        <div class="profile">
                           <img src="./assets/admin.png">
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
                            <h1>Plan your booking with<br>confidence using DeskMe.</h1>
                        </div>
                        <p class="text">Find help with your bookings and other services,<br> and see what to expect along your journey... </p>
                        <div class="cta btn">
                            <a href="./pages/register.php" class="btn">Create Account</a>
                        </div>
                    </div>
                    <div class="right ">
                        <img src="./assets/landing.png" alt="" class="person">
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
    <script src="./js/landing.js"></script>
</body>


</html>
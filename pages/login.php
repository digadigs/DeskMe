<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>DeskMe | Sign In</title>
    <link rel=" shortcut icon" href="../assets/favicon.png"/>
  </head>
  <body style="background-color: #f1f8fc;">

    <div class="mainform">
        <div class="container" id="container">
            <div class="form-container sign-in">
                <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                    <h1 style="padding: 10px;">Sign In</h1>
                    <input type="text" name="username" placeholder="Name:" required>
                    <input type="password" name="password" placeholder="Password:" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 characters." required>
                    <button class="btn" name="login_user">Sign In</button>
                    <a href="./register.php">Sign Up</a>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-right">
                        <h1>Welcome Back!</h1>
                        <p>Your presence makes us brighter and bolder. Let the adventures begin again.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="../index.php" style="color: black; margin-top: 10px">Back to Home</a>
    </div>
  </body>
</html>
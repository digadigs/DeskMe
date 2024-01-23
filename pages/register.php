<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/register.css" />
    <title>DeskMe | Sign Up</title>
    <link rel=" shortcut icon" href="../assets/favicon.png"/>
  </head>
  <body style="background-color: #f1f8fc;">

    <div class="mainform">
        <div class="container" id="container">
            <div class="form-container sign-in">
                <form method="post" action="register.php">
                    <h1>Sign Up</h1>
                    <input type="text" id="username" name="username" placeholder="Name:" required>
                    <input type="email" id="email" name="email" placeholder="Email:" required>
                    <input type="password" id="password" name="password_1" placeholder="Password:" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 characters." required>
                    <input type="password" id="cpassword" name="password_2" placeholder="Confirm Password:" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 characters." required>
                    <button class="btn" name="reg_user">Sign Up</button>
                    <a href="./login.php">Sign In</a>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, DeskMe!</h1>
                        <p>Unlock a world of possibilities! Register now and embark on your personalized journey with us. Your adventure begins with a single click!</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="../index.php" style="color: black; margin-top: 10px">Back to Home</a>
    </div>
  </body>
</html>
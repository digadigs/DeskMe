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
  <body>
    <nav>
      <div class="nav__logo" onclick="location.reload(true);" style="cursor: pointer;">DeskMe</div>
      <ul class="nav__links">
        <li class="link"><a href="../index.php">Home</a></li>
        <li class="link"><a href="#Team">About</a></li>
        <li class="link"><a href="#Desks">Services</a></li>
        <li class="link"><a href="#Subscribe">Contact</a></li>
      </ul>
      <a href="../pages/register.php"><button class="btn">Sign Up</button></a>
    </nav>

    <div class="mainform">
        <div class="container" id="container">
            <div class="form-container sign-in">
                <form>
                    <h1 style="padding: 10px;">Sign In</h1>
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <a href="#">Forget Your Password?</a>
                    <button>Sign In</button>
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
    </div>
    
    <footer class="footer" id="footer">
        <div class="section__container footer__container">
          <div class="footer__col">
            <h3>DeskMe:</h3>
            <p>DeskMe Booking System is a futuristic solution designed to redefine the way people reserve and manage workspace.
            </p>
            <p>
              Imagine a seamless and user-friendly platform that effortlessly connects users with their ideal work environments.
            </p>
          </div>
          <div class="footer__col">
            <h4>INFORMATION:</h4>
            <p><a href="#top" style="color: white;">Home</p>
            <p><a href="#Team" style="color: white;">About</p>
            <p><a href="#Desks" style="color: white;">Services</p>
            <p><a href="#Subscribe" style="color: white;">Contact</p>
          </div>
          <div class="footer__col">
            <h4>CONTACT:</h4>
            <p>Support</p>
          </div>
        </div>
        <div class="section__container footer__bar">
          <p>@BSIS 3 | Team Six | ISPM Project | DeskMe</p>
          <div class="socials">
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-twitter-fill"></i></span>
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-youtube-fill"></i></span>
          </div>
        </div>
      </footer>
  </body>
</html>
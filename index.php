<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/landing.css" />
    <title>DeskMe | Home</title>
    <link rel=" shortcut icon" href="./assets/favicon.png"/>
  </head>
  <body>
    <nav>
      <div class="nav__logo" onclick="location.reload(true);" style="cursor: pointer;">DeskMe</div>
      <ul class="nav__links"> 
        <li class="link"><a href="#top">Home</a></li>
        <li class="link"><a href="#Team">About</a></li>
        <li class="link"><a href="#Desks">Services</a></li>
        <li class="link"><a href="#Subscribe">Contact</a></li>
      </ul>
      <a href="./admin/./index.php"><button class="btn" style="margin-right: -250px; background-color: #F2F9FF; color: black">Admin</button></a>
      <a href="./pages/register.php"><button class="btn" style="margin-left: -155px;">Sign Up</button></a>
    </nav>
    <header class="section__container header__container">
      <h1 class="section__header">Experience life, book now.<br/>Start your journey with a click.</h1>
      <img src="assets/header.png" alt="header" />
    </header>

    <section class="section__container plan__container" id="Desks">
      <p class="subheader">BOOKING DESKS</p>
      <h2 class="section__header">Plan your booking with confidence</h2>
      <p class="description">
        Find help with your bookings and other services, and see what to expect
        along your journey.
      </p>  
      <div class="plan__grid">
        <div class="plan__content">
          <span class="number">01</span>
          <h4>Easy and friendly</h4>
          <p>"Experience the joy of effortless booking with our easy and friendly platform!
            Say goodbye to complexity and hello to the ease of booking made delightful.
            Your stress-free adventure starts here!"
          </p>
          <span class="number">02</span>
          <h4>Security Assurance</h4>
          <p>"Lock in confidence with our security assurance!
            Say goodbye to worries and hello to a vault of trust because when it comes to security, 
            we've set the gold standard. Your peace of mind starts here!"
          </p>
          <span class="number">03</span>
          <h4>Customer-centric compass</h4>
          <p>"Navigate your way to stress-free bookings with our customer-centric compass!
            From friendly tips to instant assistance, consider us your companion on the journey to effortless planning.
            Your dream booking is just a guided click away!"
          </p>
        </div>
        <div class="plan__image">
          <img src="assets/plan-1.jpg" alt="plan" />
          <img src="assets/plan-2.jpg" alt="plan" />
          <img src="assets/plan-3.jpg" alt="plan" />
        </div>
      </div>
    </section>

    <section class="memories" id="Memories">
      <div class="section__container memories__container">
        <div class="memories__header">
          <h2 class="section__header">
            Make memories along your journey with DeskMe!
          </h2>
          <button class="view__all">View All</button>
        </div>
        <div class="memories__grid">
          <div class="memories__card">
            <span><i class="ri-calendar-2-line"></i></span>
            <h4>Booking</h4>
            <p>
              With "Booking," you can sit back, unwind, and enjoy the
              journey while we take care of everything else.
            </p>
          </div>
          <div class="memories__card">
            <span><i class="ri-shield-check-line"></i></span>
            <h4>Smart Checklist</h4>
            <p>
              Introducing Smart Checklist with us, the innovative solution
              revolutionizing the way you book with our system.
            </p>
          </div>
          <div class="memories__card">
            <span><i class="ri-bookmark-2-line"></i></span>
            <h4>Tracking</h4>
            <p>Track, thrill, and book with confidence.
              Real-time updates at your fingertips, ensuring you're always in control.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container travellers__container" id="Team">
      <h2 class="section__header">Our Team</h2>
      <div class="travellers__grid">
        <div class="travellers__card">
          <img src="assets/traveller-1.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="assets/client-1.jpg" alt="client" />
            <h4>Peter Sthanlie Rayos</h4>
            <p>Project Manager</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="assets/traveller-2.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="assets/client-2.jpg" alt="client" />
            <h4>John Carlo Diga</h4>
            <p>Designer</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="assets/traveller-3.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="assets/client-3.jpg" alt="client" />
            <h4>Johnmark Faeldonia</h4>
            <p>Developer</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="assets/traveller-4.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="assets/client-4.jpg" alt="client" />
            <h4>Jayvee Brian Ibale</h4>
            <p>Assistant Developer</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="assets/traveller-5.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="assets/client-5.jpg" alt="client" />
            <h4>Jireh Belen</h4>
            <p>System Analyst</p>
          </div>
        </div>
        <div class="travellers__card">
          <img src="assets/traveller-6.jpg" alt="traveller" />
          <div class="travellers__card__content">
            <img src="assets/client-6.jpg" alt="client" />
            <h4>Algen Rey Ubang</h4>
            <p>Documentator</p>
          </div>
        </div>
      </section>

    <section class="section__container lounge__container" id="FAQs">
      <hr>
      <div class="lounge__image">
        <img src="assets/lounge-2.jpg" alt="lounge" />
        <img src="assets/lounge-1.jpg" alt="lounge" />
      </div>
      <div class="lounge__content">
        <h2 class="section__header">FAQs and Guides</h2>
        <div class="lounge__grid">
          <div class="lounge__details">
            <h4>Booking</h4>
            <p>Is the system designed with user-friendly features to ensure ease of use?
            </p>
          </div>
          <div class="lounge__details">
            <h4>Availability</h4>
            <p>Is the system consistently available for users without significant downtime?
            </p>
          </div>
          <div class="lounge__details">
            <h4>Security</h4>
            <p>How robust is the system's security infrastructure to protect user data and ensure confidentiality?
            </p>
          </div>
          <div class="lounge__details">
            <h4>Popularity</h4>
            <p>How popular is the system among users or within its target user base?
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="subscribe" id="Subscribe">
      <div class="section__container subscribe__container">
        <h2 class="section__header">Feel free to ask questions about DeskMe:</h2>
        <form class="subscribe__form">
          <input type="text" placeholder="Enter your email here:" />
          <button class="btn">Send</button>
        </form>
      </div>
    </section>

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

<script>

  window.onbeforeunload = function() {
      window.scrollTo(0, 0);
  };

</script>

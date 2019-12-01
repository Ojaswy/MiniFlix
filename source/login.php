<?php
session_start();
//Main Page - First Page
 ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<style>
body {
  background-color: black;
  font-family: cursive;
  }

.glow {
  font-size: 85px;
  color: #fff;
  background-image: url("images/neon.jpg");
  font-style: oblique;
  font-family: Garamond;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 25px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
</head>
<body>

<h1 class="glow">NeonFlix</h1>


    <title>NeonFlix</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <ul class="navbar-nav">
              <li class="nav-item"> <a href="#A" class="nav-link">About Us</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link">Sign In</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, Anytime! </h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>About Us</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> Streaming of Movies and Webseries on your mobile - Anywhere, Anytime! - Find us on AppStore, Playstore and the Windows store.
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> Share this Application with a friend, using this referal code, right here and get upto 50% off for the first month!
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br>Aaaaaand a Nerd pulled an ALL NIGHTER to create this application for you. You can buy him a coffee here. He is also into DC Collectibles. Just Saying.
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="">ojaswy11@gmail.com</a>
      </div>

    </footer>
  </body>
</html>

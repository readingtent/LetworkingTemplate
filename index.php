


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tittle  Tattle </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="937949552383-34oce7gfo22n1ioq99o4krkd2r910rv2.apps.googleusercontent.com">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
<!--FaceBook Login Code-->
<!--Facebook login code ends-->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome User!</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features"><b>Features</b></a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download"><b>About Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features"><b>Our Team</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><b>Contact</b></a>
            </li>

            <li class="nav-item">
             <a class="nav-link js-scroll-trigger"  data-toggle="modal" data-target="#login-modal"><b>Login | Register </b></a>
            </li>

            
          </ul>
        </div>
      </div>
    </nav>


  <!-- The Modal  for the login panel-->
     
    <div class="modal fade" id="login-modal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
            <div class="modal-dialog">
            <div class="loginmodal-container">
             <div class="imgcontainer">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             
            </div>
              <h1>Login </h1><br>
              <a href class="g-signin2"  data-onsuccess="onSignIn"></a>
               
              <br/>

              <form action="" method="post">
              <br/>
              <input type="text" name="username" placeholder="Username">
              <input type="password" name="password" placeholder="Password">
              <input type="submit"  class="login loginmodal-submit" value="submit">
              </form>

              <div class="login-help">
               <a href="register.html" style="color:black;font-size: 13px;font-family: arial;"><b>Register</b> </a>
              <a href="forget.html" style="float:right;color:black;font-size: 13px;font-family: arial;">Forgot Password</a>
              
            


             <script>     


              function onSignIn(googleUser) {
              var profile = googleUser.getBasicProfile();
              console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
              console.log('Name: ' + profile.getName());
              console.log('Image URL: ' + profile.getImageUrl());
              console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
             }
            </script>
              </div>
            </div>
          </div>
          </div>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5" >A community to learn and share!    <br><br>Let's practice the language you want. </h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger"><b>Take a tour!</b></a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading" style="color:white">About Us</h2>

            <h5 style="color:white;text-align: justify;"> Tittle-Tattle is platform which allows the user to practice any language they want via text, audio,  video chat. It's a community, which matches a random chat and find a language buddy to practice with. Our mission is to remove language barriers. What are you waiting for? Let's learn and share together.</h5>
          
            <br><br><br>


  <a href="#" class="social-container twitter">
    <div class="social-cube">
      <div class="front">
        Know More
      </div>
      <div class="bottom">
        Click Here!
      </div>
    </div>
  </a>

  

          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Unlimited Features, Unlimited Fun</h2>
          <p class="text-muted">Check out what you can do with this web-app!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Chat!</h3>
                    <p class="text-muted">The prime functionality is to give platform people to chat, in any language. Choose any language and starts Tattling.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Different Roles!</h3>
                    <p class="text-muted">It's just not a chatting app. It's a community of users, play different roles to open more functionalities.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Free to Use!</h3>
                    <p class="text-muted">Unlock the next level! This web-app gives you entire gamify experience to learn and share your knowledge.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Secure!</h3>
                    <p class="text-muted">We care for the privacy. Our application make sure that your data is safe. Feel free to use Tittle-Tattle</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2><u>S</u>top <u>W</u>aiting.<br><u>S</u>tart <u>T</u>attling.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact " id="contact">
      <div class="container">
        <h2><u>O</u>ur <u>T</u>eam</h2>

       <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/download.svg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"><br>Front-End Developer</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/download.svg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"><br>Back-End Developer</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="img/download.svg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"><br>Designer</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/download.svg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"><br>Database Admin</h4>
         <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

   
    </div>
  </div>
</div>
      </div>
    </section>

<hr>


    <section class="contact bg-prime" id="contact">
      <div class="container">
        <h2  style="color:white;" ><u>C</u>ontact <u>U</u>s</h2>
        <br><br><br>

  <form action="/action_page.php">

    <label for="fname" ><b>Name</b></label>

    <input type="text" id="name" name="firstname" placeholder="Your name..">

    <label for="lname"><b>Country</b></label>
    <script type= "text/javascript" src = "js/countries.js"></script>
    <select id="country" name ="country"></select>


    <label for="lname"><b>Email Id</b></label>
    <input type="text" id="email" name="email" placeholder="Your email..">

   

    <label for="subject"><b>Subject</b></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>

      </div>
    </section>

    <footer>
      <div class="container color-footer">
        <p>&copy; Caped-CrusaderS - 2017. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>
    <script src="countries.js"></script>
<script language="javascript">
  populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
  populateCountries("country2");
  populateCountries("country2");
</script>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>

  </body>

</html>

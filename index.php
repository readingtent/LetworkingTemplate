

<!--THE FRONT END STARTS HERE-->
<!DOCTYPE html>
<html lang="en">

  <head>


    <!--META-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/fav.ico">
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



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>


    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">



        <script>

          // CODE FOR THE PRELOADER

          // Wait for window load
          $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
          });
        </script>




        <style>
        ._5h0g ._5h0i td:first-child, ._5h0g ._xvp._5h0i td:last-child {
            width: 100px;
            height: 33px;
        }


        .hr-text {
          line-height: 1em;
          position: relative;
          outline: 0;
          border: 0;
          color: black;
          text-align: center;
          height: 1.5em;
          opacity: .5;
        }
        .hr-text:before {
          content: '';
          background: -webkit-linear-gradient(left, transparent, #818078, transparent);
          background: linear-gradient(to right, transparent, #818078, transparent);
          position: absolute;
          left: 0;
          top: 50%;
          width: 100%;
          height: 1px;
        }
        .hr-text:after {
          content: attr(data-content);
          position: relative;
          display: inline-block;
          color: black;
          padding: 0 .5em;
          line-height: 1.5em;
          color: #818078;
          background-color: #fcfcfa;
        }

        a:not([href]):not([tabindex]) {
            color: #fff;
             text-decoration: none; 
        }

        .contact_text{

          color: white;
        }

        /*Preloader Code*/
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url(img/loader-64x/Preloader_2.gif) center no-repeat #fff;
        }
        </style>


 </head>

  <body id="page-top">

    <!--Code for PreLoader-->

    <div class="se-pre-con"></div>

    <!--FaceBook Login Code-->

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '112093702895294',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.10'
        });
          
        FB.AppEvents.logPageView();   
          
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));


    </script>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=112093702895294';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
              <a class="nav-link js-scroll-trigger" href="#about"><b>About Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  href="#contact"><b>Contact</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ourteam"><b>Our Team</b></a>
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

              <a href class="g-signin2" style="margin-left:12px;" data-width="240" data-onsuccess="onSignIn"></a>  
               <div class="fb-login-button" style="margin-left:12px;" data-width ="100" data-size="large" data-button-type="login_with" data-dismiss="modal" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
              
              <br/>
              <hr class="hr-text" data-content="OR">
               <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-md-12">
        
         <div class="form-group">
            
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>

            </div>
<span style="text-decoration-color: black;"> <a href="register.php">Register</a></span> <span style="float:right;margin-left:15%;color:black; "> <a href="forgot.php">Forgot Password</a></span>
            </form>

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
              <a href="#about" class="btn btn-outline btn-xl js-scroll-trigger"><b>Take a tour!</b></a>
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



    <!--ABOUT US SECTION-->

    <section class="download bg-primary text-center" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading" style="color:white">About Us</h2>

            <h5 style="color:white;text-align: justify;"> Tittle-Tattle is platform which allows the user to practice any language they want via text, audio,  video chat. It's a community, which matches a random chat and find a language buddy to practice with. Our mission is to remove language barriers. What are you waiting for? Let's learn and share together.</h5>
           <br><br><br>
   
            <a href="#features" class="social-container twitter js-scroll-trigger">
              <div class="social-cube">
                <div class="front">
                  Know More
                </div>

                 <div class="bottom">
                  <!--Jump to downwards & apply smooth scroll-->
                   Click Here!
                   
                  </div>
                </div>
              
              </a>
            </div>
          </div>
      </div>
    </section>



    <!--FEATURES SECTION-->


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
          <a data-toggle="modal" data-target="#login-modal" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>



     <!--ABOUT TEAM SECTION--> 

          <section class="contact " id="ourteam">
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

  
    <!---CONTACT FORM-->
    <section class="ourteam cta"  id="contact">
      <div class="container contact_text">
        <h2 style="color:white;text-align: center;" ><u>C</u>ontact <u>U</u>s</h2>
        <br><br><br>

          <form method="POST" action="mail.php">

            <label for="lname" ><b>Name</b></label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="lname"><b>Email Id</b></label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="subject"><b>Message</b></label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" style="margin-left: 40%" width="70px;" value="Submit">

          </form>
    </div>
  </section>


    <!--FOOTER-->
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

  </body>

</html>


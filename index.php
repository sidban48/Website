<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>TinDog</title>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
  
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  
    <!-- Font Awesome -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    <script src="https://kit.fontawesome.com/2948bdaf73.js" crossorigin="anonymous"></script>
  
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdGVhMfAAAAAIQevrjvi-QscUJIp0zsqWo7JClL"></script>
    <script src="tindog_sid.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>


  </head>
<body>

  <section id="title">
    <div class="container-fluid">

    <!-- Nav Bar -->

<nav class="navbar navbar-expand-lg navbar-dark">

  <a class="navbar-brand" href=" ">tindog</a>
  <button class="navbar-toggler" type="button" data-toggle = "collapse" data-target="#sidnavheader">
    <span class = "navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="sidnavheader">
    <ul class="navbar-nav ml-auto ">
    <li class="nav-item">
        <a class="nav-link" href ="">Contact</a>
    </li>
    <li class = "nav-item">
      <a class="nav-link" href="">Pricing</a>
    </li>
    <li class = "nav-item">
      <a class="nav-link" href="">Download</a>
    </li>
    </ul>
    </div>
    <div class="login">
              <div class="footer-btn">
                <button type="button" class="btn btn-dark btn-sm"  data-toggle="modal" data-target = "#signupmodal">Sign up</button>
              </div>
              <div class="footer-btn">
                <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target = "#loginmodal">Login </button>
              </div>
              <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Sign Up form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>                            
                        </div>
                        <div class="modal-body">
                            <form class="pb-modalreglog-form-reg" action = "includes/signup.inc.php" method = "post" id = "signupform">
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">User ID</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="email" class="form-control form_data" id="inputEmail" placeholder="Email ID" name = "uid">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control form_data" id="inputPws" placeholder="Password" name="password">   
                                        <span class="fa-solid fa-eye show"></span>
                                    </div> 
                                          <script>

                                                        $(document).ready(function() { 
                                                            $("#inputPws").on("focus",function() {
                                                              $(this).css('border', 'none'); 
                                                            })
                                                              $("#inputPws").on("focusout",function() {
                                                              if($(this).val()=='') { 
                                                                      $(this).css('border', 'solid 5px red'); 
                                                                  }
                                                              else if($(this).val().match(/^[0-9]*$/)){
                                                                  $(this).css('border', 'solid 5px green');
                                                              }
                                                              else{
                                                                $(this).css('border', 'solid 5px red');
                                                              }
                                                            })
                                                          }); 




                                            $(".form-control").on("keyup", function() {
                                              if ($(this).val())
                                                $(this).next(".show").show();
                                              else
                                                $(this).next(".show").hide();
                                            }).trigger('keyup');

                                            $(".show").mousedown(function() {
                                              $(this).prev(".form-control").prop('type', 'text');
                                            }).mouseup(function() {
                                              $(this).prev(".form-control").prop('type', 'password');
                                            }).mouseout(function() {
                                              $(this).prev(".form-control").prop('type', 'password');
                                            });
                                            </script>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control form_data" id="inputConfirmPws" placeholder="Confirm Password" name = "confpass">
                                        <span class= "fa-solid fa-eye show"></span>
                                    </div>                                          
                                        <script>
                                            $("#inputConfirmPws").on("keyup", function() {
                                              if ($(this).val())
                                                $(this).next(".show").show();
                                              else
                                                $(this).next(".show").hide();
                                            }).trigger('keyup');

                                            $(".show").mousedown(function() {
                                              $(this).prev(".form-control").prop('type', 'text');
                                            }).mouseup(function() {
                                              $(this).prev(".form-control").prop('type', 'password');
                                            }).mouseout(function() {
                                              $(this).prev(".form-control").prop('type', 'password');
                                            });
                                            </script>                                      
                                </div>
                                <div class="form-group">
                                    <label for="First Name">First Name</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="text" class="form-control form_data" id="fname" placeholder="First Name" name = "fname">
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Last Name">Last Name</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="text" class="form-control form_data" id="lname" placeholder="Last Name" name = "lname">
                                          
                                    </div>
                                </div>
                                <div class="form-group">
                                  <form>
                                  <label for="Mobile Number">Mobile Number</label>
                                  <input type="text" class="form-control form_data" id="number" placeholder="Enter Mobile Number" name = "mnumber">
                                  <div id="recaptcha-container" style="padding:5px; display:none"></div>
                                  <button type="button" class="btn btn-primary" id="sendotpbtn" style="display:none" onclick="phoneAuth();">Send OTP</button>
                                  </form><br>
                                  <label for="Verification code" id = "vrfycdlbl" style="display:none">Enter Verification code</label>
                                  <input type="text" class="form-control" id="verificationCode" style="display:none" placeholder="Enter Verification code">
                                  <script>
                                    $(document).ready(function() { 
                                            $("#verificationCode").on("focus",function() {
                                              $(this).css('border', 'none'); 
                                              })
                                              $("#verificationCode").on("focusout",function() {
                                              if($(this).val()=='') { 
                                                      $(this).css('border', 'solid 5px red'); 
                                                  }
                                              else{
                                                codeverify();
                                              }
                                              })
                                          });

                                    </script>
                                  <!-- <form>
                                  <button type="button" class="btn btn-primary" id = "vrfycdbtn" style="display:none" onclick="codeverify();">Verify code</button>
                                  </form> -->
                                  <div class="form-group">
                                    <input type="checkbox" id="ch" name="chs" onchange="valueChanged()" class="form_data" style="display:none">
                                    <p style="display:none" id='tandc'>I agree with<a href="#"> Terms and Conditions.</a></p>
                                </div>
                                <div class="form-group">
                                  <span id="notandc" style="display: none;color:red">Please accept Terms and Conditions</span>
                                </div>                                  
                                    <!-- The core Firebase JS SDK is always required and must be listed first -->
                                      <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

                                      <!-- TODO: Add SDKs for Firebase products that you want to use
                                          https://firebase.google.com/docs/web/setup#config-web-app -->

                                      <script>
                                          // Your web app's Firebase configuration
                                          const firebaseConfig = {
                                          apiKey: "AIzaSyDFhtrGv_v6-G8jpcLO5TMvKXcZct3TBmA",
                                          authDomain: "sidnewproject-d5912.firebaseapp.com",
                                          projectId: "sidnewproject-d5912",
                                          storageBucket: "sidnewproject-d5912.appspot.com",
                                          messagingSenderId: "185632422579",
                                          appId: "1:185632422579:web:25f51cb7199ba258fb8ec6",
                                          measurementId: "G-5SM553W7BH"
                                        };
                                          // Initialize Firebase
                                          firebase.initializeApp(firebaseConfig);
                                      </script>
                                      <script src="NumberAuthentication_new.js" type="text/javascript"></script>
                                </div>
						            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" name="signupbtn" id = 'sgnbtn' style = "display:none" onclick="myFunction()">Sign up</button>
                            <script>

                              function myFunction() {
                                    document.getElementById('signupform').submit(); 
                              }
                              </script>
                        </div>					                        			 
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Login</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form class="pb-modalreglog-form-reg">
                              <div class="form-group">
                                  <div id="pb-modalreglog-progressbar"></div>
                              </div>
                              <div class="form-group">
                                  <label for="email">Email address</label>
                                  <div class="input-group pb-modalreglog-input-group">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <div class="input-group pb-modalreglog-input-group">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                      <input type="password" class="form-control" id="inputPws" placeholder="Password">
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Sign up</button>
                      </div>
                  </div>
              </div>
          </div> -->
    </div>
    
</nav>

    <!-- Title -->
<div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
<!-- -->



      <h1>Meet new and interesting dogs nearby.</h1>
      <button type="button" class="btn btn-dark btn-lg download-btn"> <i class="fa-brands fa-apple"> Download</i> </button>
      <button type="button" class="btn btn-outline-light btn-lg download-btn"><i class="fa-brands fa-google-play"> Download </i></button>
    </div>
    <div class="col-lg-6 col-md-12 col1-sm-12">
      <img class="titleimg" src="images/iphone6.png" alt="iphone-mockup">
    </div>
</div>
</div>
</section>


  <!-- Features -->

  <section id="features">
<div class="container-fluid">
  <div class="row">
    <div class="feature1 col-lg-4 h-100">
    <i class="fa-solid fa-circle-check""></i>
    <h3>Easy to use.</h3>
    <p>So easy to use, even your dog could do it.</p>
    </div>
    <div class="feature1 col-lg-4 h-100">
      <i class="fa-solid fa-bullseye"></i>
      <h3>Elite Clientele</h3>
      <p>We have all the dogs, the greatest dogs.</p>
    </div>
    <div class="feature1 col-lg-4 h-100">
      <i class="fa-solid fa-heart"></i>
      <h3>Guaranteed to work.</h3>
      <p>Find the love of your dog's life or your money back.</p>  
    </div>
  </div>
  </div>
  </section>


  <!-- Testimonials -->
<section id="testimonials">
  <div id = "testimonial-carousel" class = "carousel slide" data-ride = "carousel" data-pause = "hover" data-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active container-fluid">
            <h2 class="testimonial-text">I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
            <img class="testimonial-image" src="images/dog-img.jpg" alt="dog-profile">
            <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
  </div>
  <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
</div>
</section>


<!--Press -->

  <section id="press">
    <div class="container-fluid">
    <div class="row press-row">
    <img class = "press-logo col-lg-3 col-md-6 col-sm-12" src="images/techcrunch.png" alt="tc-logo">
    <img class = "press-logo col-lg-3 col-md-6 col-sm-12" src="images/tnw.png" alt="tnw-logo">
    <img class = "press-logo col-lg-3 col-md-6 col-sm-12" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class = "press-logo col-lg-3 col-md-6 col-sm-12" src="images/mashable.png" alt="mashable-logo">
    </div>
    </div>
  </section>

  <!-- Pricing -->

  <section id="pricing">
    <div class="pricing-text container-fluid">
      <div class = "pricing-text">
        <h2 class="pricing-text-head"><b>A Plan for Every Dog's Needs</b></h2>
        <p class="pricing-text-body">Simple and affordable price plans for your and your dog.</p>
      </div>
      <div>
</div>

<div class="row">
  <div class = "pricing-column col-lg-4">
  <div class = "card h-100">
    <div class="card-header">
    <h3>Chihuahua</h3>
    </div>
    <div class="card-body">
    <h2>Free</h2>
    <p>5 Matches Per Day</p>
    <p>10 Messages Per Day</p>
    <p>Unlimited App Usage</p>
    </div>
    <div class="card-footer">
    <button type="button" class="card-footer-btn btn btn-dark btn-lg download-btn">Sign Up</button>
  </div>
  </div>
  </div>
<div class = "pricing-column col-lg-4">
  <div class = "card h-100">
    <div class="card-header">
      <h3>Labrador</h3>
    </div>
    <div class="card-body">
    <h2>$49 / mo</h2>
    <p>Unlimited Matches</p>
    <p>Unlimited Messages</p>
    <p>Unlimited App Usage</p>
    </div>
    <div class="card-footer">
    <button type="button" class="card-footer-btn btn btn-dark btn-lg download-btn">Sign Up</button>
  </div>
  </div>
</div>
<div class = "pricing-column col-lg-4">
  <div class = "card h-100">
    <div class="card-header">
    <h3>Mastiff</h3>
    </div>
    <div class="card-body">
    <h2>$99 / mo</h2>
    <p>Pirority Listing</p>
    <p>Unlimited Matches</p>
    <p>Unlimited Messages</p>
    <p>Unlimited App Usage</p>
    </div>
    <div class="card-footer">
    <button type="button" class="card-footer-btn btn btn-dark btn-lg download-btn">Sign Up</button>
  </div>
  </div>
  </div>
  </div>
  
</div>
</section>
  <!-- Call to Action -->

  <section id="cta">
    <div class="container-fluid">
        <h1 class="cta-header">Find the True Love of Your Dog's Life Today.</h1>
        <div class="footer-btn">
          <button type="button" class="btn btn-dark btn-lg"> <i class="fa-brands fa-apple"> Download</i> </button>
        </div>
        <div class="footer-btn">
          <button type="button" class="btn btn-outline-light btn-lg"><i class="fa-brands fa-google-play"> Download </i></button>
        </div>
    </div>
  </section>


  <!-- Footer -->

  <footer id="footer">
<div class="footer-icon">
  <a class="fi" href = ""> <i class=" fa-brands fa-facebook-f"></i></a>
  <a class="fi" href = ""><i class=" fa-brands fa-twitter"></i></a>
  <a class="fi" href = ""><i class=" fa-brands fa-instagram"></i></a>
  <a class="fi" href = ""><i class=" fa-solid fa-envelope"></i></a>
</div>
    <p  class="footer-text">© Copyright 2018 TinDog</p>

  </footer>


</body>

<!-- <script>
  $("#recaptcha-container").ready(function() {
    $("#recaptcha-container").execute('6LdGVhMfAAAAAIQevrjvi-QscUJIp0zsqWo7JClL', {action: 'homepage'}).then(function(token) {
          console.log(token);
        //  document.getElementById("token").value = token;
      });
  });
  </script> -->
</html>

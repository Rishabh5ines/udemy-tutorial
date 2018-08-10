<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/login-reg.css">
</head>

<body>
    <section>
        <nav class="background-nav">
            <nav>
                <div class="nav-wrapper background-nav">
                    <img src="assets/image/logo.png" class="responsive-img img-logo brand-logo">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <!-- droup down -->
                    <a class='dropdown-trigger btn droup-down droup-box hide-on-med-and-down' href='#' data-target='dropdown1'>Course Detail!</a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                    </ul>
                    <!-- end -->
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li class="links"><a href="" class="link-size">Business Page</a></li>
                        <li class="links"><a href="" class="link-size">Tech Page</a></li>
                        <li>
                            <a class="waves-effect waves-light btn sign-in"><i class="material-icons right">lock_open</i>Sign In</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-light btn sign-up"><i class="material-icons right">lock_outline</i>Sign Up</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <ul class="sidenav" id="mobile-demo">
                <li class="links"><a href="" class="waves-effect waves-lightbtn link-size1">HOME</a></li>
                <li class="links"><a href="" class="waves-effect waves-lightbtn link-size1">BUSINESS PAGE</a></li>
                <li class="links"><a href="" class="waves-effect waves-lightbtn link-size1">TECH PAGE</a></li>
                <li class="sub-links"><a href="" class="waves-effect waves-lightbtn link-size1">START MY FREE MONTH</a></li>
                <li class="sub-links"><a href="" class="waves-effect waves-lightbtn link-size1">CONTACT US</a></li>
                <li class="sub-links"><a href="" class="waves-effect waves-lightbtn link-size1">START MY FREE MONTH</a></li>
                <li class="sub-links"><a href="" class="waves-effect waves-lightbtn link-size1">CONTACT US</a></li>
                <li><a class="waves-effect waves-lightbtn sign-in link-size1">SIGN IN</a></li>
                <li><a class="waves-effect waves-lightbtn sign-up link-size1">SIGN UP</a></li>
            </ul>
        </nav>
    </section>
    <nav class="nav-two ">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="sub-nav">
                <li class="sub-links">
                    <a href="" class="mobile-view">Start My Free Month</a></li>
                <li class="sub-links"><a href="" class="mobile-view">Contact Us</a></li>
                <li class="sub-links"><a href="" class="mobile-view">Share :</a></li>
                <li class="sub-links fixed-action-btn">
                    <a href="" class="">
              <img src="assets/image/share-flat.png" class="responsive-img shar-icon">
            </a>
                    <ul>
                        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <!-- login-register -->
    <section class="login-register" id="call">
        <div class="row">
            <div class="col m12 s12 l12">
                <div class="container-fluide">
                    <div class="s12 m12 l12">
                        <div class="user_options-text">
                            <div class="col m12 s12 l12">
                                <div class="user_options-unregistered">
                                    <h2 class="user_unregistered-title">Don't have an account?</h2>
                                    <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
                                    <p class="user_unregistered-text">If You don't have an account . please register it</p>
                                    <!-- <button class="user_unregistered-signup" id="signup-button">Sign up</button> -->
                                    <a href="register.php" class="waves-effect waves-light btn btn-form">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m6 s12 l6">
                        <div class="user-account" id="user-account">
                            <center><img src="assets/image/login/login.png" class="responsive-img login-page"></center>
                            <h2 class="forms_title text-center">LOG IN</h2>
                            <form class="forms_form">
                                <div class="row">
                                    <div class="pdd50">
                                        <div class="input-field col s12 m12">
                                            <input id="last_name" type="email" class="validate" required="">
                                            <label for="last_name">Enter your Email</label>
                                        </div>
                                        <div class="input-field col s12 m12">
                                            <input id="last_name" type="text" class="validate1" required="" minlength="10">
                                            <label for="last_name">Enter Your Password</label>
                                        </div>
                                    </div>
                                    <div class="col s6 m6">
                                        <div class="p-top">
                                            <a href="#" type="button" class="forms_buttons-forgot for-password">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="col s6 m6 padd-btn ">
                                        <!--  <input type="submit" value="Submit" class="waves-effect waves-light btn-small text-right"> -->
                                        <button><a class="waves-effect waves-light btn" type="submit" value="Submit" reruired="" >Submit</a></button>
                                    </div>
                                </div>
                            </form>
                            <div class="or-value">
                                <center>
                                    <p>(OR) </p>
                                </center>
                                <div class="text-center">
                                    <p class="tearms">Login in by </p>
                                    <p class="tearms">By signing up, you agree to our <a>Terms of Use</a> and <a>Privacy Policy.</a> </p>
                                </div>
                                <div class="text-center">
                                    <span class="font-aws"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
                                    <span class="font-aws"><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
                                    <span class="font-aws"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                                    <span class="font-aws"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container-fluide">
        <div class="col m12 s12 l12">
            <div class="message-box">
                <div class="row">
                    <div class="col s12 m8 l8">
                        <div class="input-field message-input ">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" ></textarea>
                            <label for="icon_prefix2">Enter your Message</label>
                        </div>
                    </div>
                    <div class="col m4 s12 l4">
                        <div class="message-submit">
                            <button><a class="waves-effect waves-light btn" type="submit" value="Submit" reruired="" >Submit Your Meassage</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- footer -->
    <section>

        <footer class="page-footer footer">
            <div class="container-fluide1">
                <div class="row">
                    <div class="col l5 m12 s12">
                        <div class="about-us">
                            <h5 class="black-text link-head">About Us</h5>
                            <div class="line7"></div>
                            <p class="black-text text-lighten-4 null-para"> Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                                Cras dapibus.</p>
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="col l4 m12 s12">
                        <div class="about-us">
                            <h5 class="black-text link-head">Support</h5>
                            <div class="line7"></div>
                            <ul>
                                <li><a class="black-text text-lighten-3 link" href="#!">Privacy policy</a></li>
                                <li><a class="black-text text-lighten-3 link" href="#!">Tearms & Condition</a></li>
                                <li><a class="black-text text-lighten-3 link" href="#!">Business</a></li>
                                <li><a class="black-text text-lighten-3 link" href="#!">Blogs</a></li>
                                <li><a class="black-text text-lighten-3 link" href="#!">Topics</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l3 m12 s12">
                        <div class="about-us">
                            <h5 class="black-text link-head">Connect with Us</h5>
                            <div class="line7"></div>
                            <img src="assets/image/fb.png" class="responsive-img fb-img">
                            <img src="assets/image/insta.png" class="responsive-img fb-img">
                            <img src="assets/image/twitter.png" class="responsive-img fb-img">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <section>
        <div class="footer-copyright">
            <div class="container">
                <div class="col l12 m12 s12 xl12">
                    <center>
                        <div class="copy-right white-text">© 2018 Copyright 5ines.com </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->



    <!-- js -->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/login.js"></script>
</body>

</html>
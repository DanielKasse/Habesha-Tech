<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habesha Tech</title>
    <link rel="stylesheet" href="css/careers.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="images/image.png">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="js/main.js"></script>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><img src="images/image.png" alt=""></a>
        <div class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="about-us.php">about</a></li>
                <li><a href="index-2.html#service">services</a></li>
                <li><a href="index-2.html#portfolio">portfolio</a></li>
                <li><a href="index-2.html#team">team</a></li>
                <li><a href="careers.php">career</a></li>
                <li><a href="index-2.html#contact">contact</a></li>
                <li><a href="index-2.html#faq">FAQ</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="home">
        <h2>Home / Careers</h2>
    </section>

    <section id="career-heading" class="career-heading">
        <h1 class="heading">Career</h1>
        <p>Job Opening in IT Company. Apply Now!</p>
    </section>
    <div class="career">
        <div class="career-form">
            <form action="https://priyansh42.github.io/IT-Company-Website/careers.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Name" class="career-form-txt" required>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="Contact number" maxlength="10" class="career-form-phone">
                <input type="email" name="email" placeholder="Email" class="career-form-email" required>
                <div class="radio-class">
                    <h2 class="name">Apply For Which Post?</h2>
                <label class="radio">
                  <input class="radio-one" type="radio" checked="checked" name="status" value="Web Designer">
                  <span class="checkmark"></span>
                  Web Designer
                </label>
                <label class="radio">
                  <input class="radio-two" type="radio" name="status" value="Web Developer">
                  <span class="checkmark"></span>
                  Web Developer
                </label>
                <label class="radio">
                  <input class="radio-three" type="radio" name="status" value="Mobile App Designer">
                  <span class="checkmark"></span>
                  Mobile App Designer
                </label>
                <label class="radio">
                    <input class="radio-four" type="radio" name="status" value="Mobile App Developer">
                    <span class="checkmark"></span>
                    Mobile App Developer
                  </label>
                <label class="radio">
                  <input class="radio-five" type="radio"  name="status" value="Digital Marketer">
                  <span class="checkmark"></span>
                  Digital Marketer
                </label>
                </div>
                <input type="number" id="experience" name="experience" required placeholder="Years of Experience" class="career-form-experience">
                <textarea placeholder="Other Details" name="details" class="career-form-txtarea" required></textarea>
                <div class="file">
                    <h2 class="name">Upload Your Resume</h2>
                    <input class="upload" type="file" name="fileToUpload" accept=".doc,.docx,.pdf"><br><br><br>
                </div>
                <input type="submit" value="Submit" name="submit" class="career-form-btn">
            </form>
        </div>
    </div>

      <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>About Us</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#home">Home</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#about">About us</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#service">Our services</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#home">Terms & condition</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#home">Privacy policy</a></li>
                        </ul>
                    </div>
  
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#portfolio">Portfolio</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#team">Team</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="careers.html">Career</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#contact">Contact</a></li>
                            <li><i class="ion-ios-arrow-forward"></i> <a href="index-2.html#faq">FAQ</a></li>
                        </ul>
                    </div>
  
                    <div class="col-lg-3 col-md-6 footer-contact" style="font-size: 1.5rem;">
                        <h4>Contact Us</h4>
                        <p>
                            No. 87  Signal Mall<br>
                            Bahir Dar, Amhara<br>
                            Ethiopia <br>
                            <strong>Phone:</strong> +2519 2346 7881<br>
                            <strong>Email:</strong> habesha@tech.com<br>
                        </p>
  
  
                        <div class="social-links">
                            <a href="https://www.facebook.com/"><i class="ion-logo-facebook"></i></a>
                            <a href="https://twitter.com/login?lang=en"><i class="ion-logo-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="ion-logo-linkedin"></i></a>
                            <a href="https://www.instagram.com/"><i class="ion-logo-instagram"></i></a>
                            <a href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"><i class="ion-logo-googleplus"></i></a>
                        </div>
  
                    </div>
  
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Subscription</h4>
                        <p>With Our Skills Put Together, You Get An Ensemble Capable Of Doing Anything And Everything Your Brand Needs. Subscribe Here To Get Our Latest Updates.</p>
                        <form action="#" method="post">
                            <input type="email" name="email"><input type="submit"  value="Subscribe">
                        </form>
                    </div>
  
                </div>
            </div>
        </div>
  
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 copyright" style="color: #fff; font-size: 1.3rem;">
                    Copyright &copy; 2024 Habesha Tech. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

</body>
</html>
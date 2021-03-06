<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico?v=2" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>Contact Us</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="css/logo.png"> <span class="navbar-brand w-100"></span>
            <div class="navbar-collapse collapse w-100 justify-content-center" id="navbar5">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">LISTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.html">CONTACT US </a>
                    </li>
                </ul>
            </div>

        </nav>

    </header>


    <div class="container-fluid">
        <div class="row contact-us">

            <div class="col-lg-6 col-md-12 col-sm-12">
                <p id="contact-text">Get in Touch</p>

                <?php

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $text = $_POST['text'];


                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $from = $email;
                    $to = "mailto:contact@gravityhomesandproperties.com";
                    $subject = "From Contact Form";
                    $message = $text;
                    $headers = "From:" . $from;
                    "Content-Type:text/html";
                    mail($to, $subject, $message, $headers);

                    echo '<p class="success">Thank You for contacting us,we will get in touch within the next 24hrs</p>';
                }


                ?>

                <form id="frm" method="post">
                    <!--Defining form group for emails -->
                    <div class="form-group">
                        <!--Label for Input type email -->
                        <label for="InputEmail1" id="contact2">Email address</label>
                        <!--Defining Input type for form field -->
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your Email">
                    </div>


                    <div class="form-group">
                        <!--Label for Input type TextArea -->
                        <label for="textarea" id="contact2">Your message</label>
                        <!--Defining Input type for form field -->
                        <textarea class="form-control" name="text" aria-describedby="emailHelp" rows="6" placeholder="Your message"></textarea>
                    </div>
                    <!--Defining Button -->
                    <button type="submit" name="submit" class="btn" id="submit">Send</button>

                </form>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 map-section">

                <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18858.36276462225!2d3.268910112413013!3d6.46039988372276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b89953df8a867%3A0x79b394521daad938!2sFestac%20PhaseII%20Land!5e0!3m2!1sen!2sng!4v1637135511991!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img class="mx-auto" src="css/phone.png" alt="phone">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p id="phone-text">+2348023479850</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img class="mx-auto" src="css/mail.png" alt="phone">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p id="phone-text">info@gravityhomes.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img class="mx-auto" src="css/loacation.png" alt="phone">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p id="phone-text">4-18 7th Avenue, A1 Cl, Trade Fair Complex, Lagos</p>
                    </div>
                </div>
            </div>/
        </div>
    </div>
    <div class="container-fluid">
        <section>
            <div class="row footer">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <img src="css/logo2.png"><br>
                    <p id="logo_title">Gravity Homes and Properties. Your dream home at the palm of your hand</p>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12">
                    <p class="footer-title">Discover</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Festac</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Ikeja</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Victoria Island</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Lekki</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12">
                    <p class="footer-title">Listings</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Apartments</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Condos</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Offices</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="footer-link">Villas</p>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-lg-3 col-sm-12">
                    <p class="footer-title">Subscribe to our newsletter</p>
                    <form action="" method="post">
                        <input type="email" name="email" class="form-control2" placeholder="Email Address" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <input type="submit" name="txt" value="subscribe" id='submit2'>




                    </form>
                </div>
            </div>
        </section>
    </div>


    <!-- jQuery first-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!--- Script for bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</body>

</html>
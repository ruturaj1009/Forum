<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <title>Bootstrap 4 Footer Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: green;
            --bg-color: #151414;
            --light-black: #373636;
            --light-black-2: #2e2e2e;
            --light-black-3: #202020;
            --white-color: #fff;
            --dark-gray: #757575;
            --dark-gray-2: #7e7e7e;
            --dark-gray-3: #878787;
            --facebook: #3b5998;
            --twitter: #55acee;
            --instagram: #e93b81;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        ul {
            margin: 0px;
            padding: 0px;
        }

        .footer-section {
            background: var(--bg-color);
            position: relative;
        }

        .footer-cta {
            border-bottom: 1px solid var(--light-black);
        }

        .single-cta i {
            color: var(--primary-color);
            font-size: 30px;
            float: left;
            margin-top: 8px;
        }

        .cta-text {
            padding-left: 15px;
            display: inline-block;
        }

        .cta-text h4 {
            color: var(--white-color);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .cta-text span {
            color: var(--dark-gray);
            font-size: 15px;
        }

        .footer-content {
            position: relative;
            z-index: 2;
        }

        .footer-logo {
            margin-bottom: 30px;
        }

        .footer-logo img {
            max-width: 200px;
        }

        .footer-text p {
            margin-bottom: 14px;
            font-size: 14px;
            color: var(--dark-gray-2);
            line-height: 28px;
        }

        .footer-social-icon span {
            color: var(--white-color);
            display: block;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-social-icon a {
            color: var(--white-color);
            font-size: 16px;
            margin-right: 15px;
        }

        .footer-social-icon i {
            height: 40px;
            width: 40px;
            text-align: center;
            line-height: 38px;
            border-radius: 50%;
        }

        .facebook-bg {
            background: var(--facebook);
        }

        .twitter-bg {
            background: var(--twitter);
        }

        .instagram-bg {
            background: var(--instagram);
        }

        .footer-widget-heading h3 {
            color: var(--white-color);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 40px;
            position: relative;
        }

        .footer-widget-heading h3::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -15px;
            height: 2px;
            width: 50px;
            background: var(--primary-color);
        }

        .footer-widget ul li {
            display: inline-block;
            float: left;
            width: 50%;
            margin-bottom: 12px;
        }

        .footer-widget ul li a:hover {
            color: var(--primary-color);
        }

        .footer-widget ul li a {
            color: var(--dark-gray-3);
            text-transform: capitalize;
        }

        .subscribe-form input {
            width: 75%;
            margin-top: 20px;
            padding: 14px 28px;
            background: var(--light-black-2);
            border: 1px solid var(--light-black-2);
            color: var(--white-color);
        }

        .subscribe-form button {
            margin-top: 20px;
            background: var(--primary-color);
            padding: 13px 20px;
            border: 1px solid var(--primary-color);
            top: 0;
        }

        .subscribe-form button i {
            color: var(--white-color);
            font-size: 22px;
            transform: rotate(-6deg);
        }

        .copyright-area {
            background: var(--light-black-3);
            padding: 25px 0;
        }

        .copyright-text p {
            margin: 0;
            font-size: 14px;
            color: var(--dark-gray-3);
        }

        .copyright-text p a {
            color: var(--primary-color);
        }

        .footer-menu li {
            display: inline-block;
            margin-left: 20px;
        }

        .footer-menu li:hover a {
            color: var(--primary-color);
        }

        .footer-menu li a {
            font-size: 14px;
            color: var(--dark-gray-3);
        }

        @media (max-width:1030px) {
            .mb-30 {
                margin-bottom: 30px;
            }

            .footer-text p,
            .footer-social-icon {
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta py-5">
                <div class="row">
                    <div class="col-sm-6 col-xl-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Ravenshaw University,Cuttack-753003</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 7077227961</span><br>
                                <span>+91 9337655466</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>ravenshawcampuscommune@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img decoding="async" src="images/logo.png" class="img-fluid"></a>
                            </div>
                            <div class="footer-text">
                                <p>
                                    The forum mainly allows students and teachers to exchange ideas by posting their
                                    respective queries.Discussion can take the form of debate or reflective
                                    sharing,giving learner the opportunity to expand upon and clarify their
                                    understanding of key
                                    ideas.Posting on a forum is a quick,easy and accessible way of asking
                                    questions,getting
                                    answers,and retrieving information.
                                </p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">log In</a></li>
                                <li><a href="#">Sign Up</a></li>
                                <li><a href="#">Go To Home Page</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Go To Ravenshaw</a></li>
                            </ul>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.042196894755!2d85.89329177511341!3d20.463459981048196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190d7a181999fd%3A0xe48e3475c7591d81!2sRavenshaw%20University%2C%20Cuttack!5e0!3m2!1sen!2sin!4v1682318795406!5m2!1sen!2sin"
                            width="300" height="200" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Service</h3>
                            </div>
                            <div class="footer-text m-4">
                                <ul>
                                    <li><a href="#">Knowledge</a></li>
                                    <li><a href="#">Creatives</a></li>
                                    <li><a href="#">Feed</a></li>
                                    <li><a href="#">Communication</a></li>
                                </ul>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright © 2021, All Right Reserved <a href="#">Ravenshaw Campus Commune</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 text-right d-none d-lg-block">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
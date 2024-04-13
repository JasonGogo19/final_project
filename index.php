<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width_device-width, initial-scale=1.0">
    <title>J Event's</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="css/index.css">
</head>
<body> 

    <!--Navbar-->
    <div class="navbar">
        <div class="container">
            <a href="#" class="brand">J's Events</a>
            <ul class="nav-links">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login/login.php">Log in</a></li>
                <li><a href="login/register.php">Sign up</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div id="hero">
        <div class="container">
            <h1 class="heading-xl"><span id="hero-title"></span></h1>
            <a href="#" class="scoll-down"><i class="las la-arrow-down"></i></a>
        </div>
    </div>


    <!--Services-->
    <section id="services">
        <div class="services container">
            <div class="section-intro" data-aos="zoom-in-down">
                <h1 class="heading-2">Our Services</h1>
            </div>
            <div class="grid three-col-grid">
                <div class="service">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p> We are passionate about what we do</p>
                </div>
                <div class="service">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p> We are passionate about what we do</p>
                </div>
                <div class="service">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p> We are passionate about what we do</p>
                </div>
                <div class="service">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p> We are passionate about what we do</p>
                </div>
                <div class="service">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p> We are passionate about what we do</p>
                </div>
                <div class="service">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p> We are passionate about what we do</p>
                </div>
            </div>
        </div>
    </section>

    <!--Work-->
    <section id="work">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">Our Recent Works</h1>
            </div>
            <a href="#" class="grid two-col-grid">
                <div class="project">
                    <img src="images/wedding.jpeg" alt="">
                    <div class="overlay">
                        <div><h2 class="heading-3">E&T 24</h2>
                            <p>Wedding booked on our platform for MR and Mrs St.Patick on the 2/03/24.</p>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <img src="images/executive.jpg" alt="">
                    <div class="overlay">
                        <div><h2 class="heading-3">J Company</h2>
                            <p>Executive meeting for the Board of Directors.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!--Blog-->
    <section id="blog">
        <div class="container">
            <div class="section-intro">
                <h1 class="heading-2">Blog</h1>
            </div>
            <div class="grid three-col-grid">
                <div class="blog-post">
                    <img src="images/blog post1.jpeg" alt="">
                    <h3><a href="#">Birthday Party</a></h3>
                    <p>Birthday party details on our platform for Mr. Tariq</p>
                </div>
                <div class="blog-post">
                    <img src="images/blog post2.jpeg" alt="">
                    <h3><a href="#">World Cup Game</a></h3>
                    <p>World Cup game details</p>
                </div>
                <div class="blog-post">
                    <img src="images/blog post 3.webp" alt="">
                    <h3><a href="#">NBA Playoffs</a></h3>
                    <p>Playoff Game details</p>
                </div>

            </div>
        </div>
    </section>

    <!--Contact-->
    <section id="contact">
        <div class="container">
            <div class="grid">
                <div class="contact-info">
                    <div class="section-intro">
                        <h1 class="heading-2">Contact info</h1>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Email</h3>
                        <ul>
                            <li>jason.gogo@ashesi.edu.gh</li>
                            <li>jasongogo877@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Phone</h3>
                        <ul>
                            <li>+233 54-425-0451</li>
                            <li>+1 400-538-7557</li>
                        </ul>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Location</h3>
                        <ul>
                            <li>724 Jockey's Cir
                                Avon Lake OH 44012
                                United States
                            </li>
                        </ul>
                    </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">
            <p>Copyright © 2023. All rights are reserved.</p>
            <div class="social-icon">
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-facebook"></i></a>
                <a href="#"><i class="lab la-youtube"></i></a>
                <a href="#"><i class="lab la-snapchat"></i></a>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/index.js"></script>
</body>
</html>

<?php


// add a function below to generate the navigation menu
$nav= ' <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar">
                        <a class="navbar-brand" href="index.html">Navbar</a>
                        <button class="navbar-toggler" type="button" data-target="#navigation">
                            <span class="fa-solid fa-bars"></span>
                        </button>
                        <div class="navigation collapse" id="navigation">
                            <ul class="navbar-nav">
                                <li class="active">
                                    <a href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li>
                                    <a href="about.php">About
                                    </a>
                                </li>
                                <li class="dropdown collapse">
                                    <a class="dropdown-toggle" href="#">Menu</a>
                                    <div class="dropdown-menu">
                                        <a href="all.html">Menu</a>
                                        <a href="test.php">Juice</a>
                                        <a href="cleanses.php">Cleanses</a>
                                        <a href="snacks.php">Snacks</a>
                                        <a href="coffee.php">Coffee</a>
                                        <a href="grabgo.php">Grab and Go</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="contact.php">Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    <script src="js/app.js"></script>';

// you can obtain the HTML code for the navigation menu from the demo pages or the previous exercise



    $footer = '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-4 text">
                    <h3>Cold Press Cafe</h3>
                    <p>Our goal at Cold Press Cafe is to bring you the best 100% organic, gluten free and vegan products that we can! We are Colleyville’s first cold pressed, all organic juice bar and we cold press all our juices fresh in house!</p>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-2 menu">
                        <ul class="unstyled footer-nav hyper">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="projects.html">Menu</a></li>
                            <li><a href="contact-me.html">Contact us!</a></li>
                        </ul>
                </div>
                <div class="col-xs-12 col-lg-5 mail">
                    <h4>Join Our Mailing List</h4>
                    <form>
                        <div class="form-group row">
                                <label for="email" class="col-xs-12 col-form-label">Enter your email address</label>
                                <div class="col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="user@email.com"/>
                                </div>
                        </div>
                        <a href="#" class="btn btn-secondary">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mockup">
                        <p>&copy; 2023 Mockup. CTEC 4309 </p>
                    </div>
                    <div class="col-md-4">
                        <ul class="inline social-media">
                            <li><a href="https://www.facebook.com/thecoldpresscafe/" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/coldpress_cafe/" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.yelp.com/biz/cold-press-cafe-colleyville-2" target="_blank" title="Yelp"><i class="fa-brands fa-yelp"></i></a></li>
                            <li><a href="https://food.google.com/chooseprovider?restaurantId=/g/11fpscyl5d&g2lbs=ANTchaNIVvWBIjMIEznyeUiU5MPRCWQwaThKvyXjl7wkFqq_aLqu7VKisvhs5Upi17z7PlYUqsruYU9RM-0_EbJfKIGekAY5yWWEOmD4e3XASfXBGE7urzc6F8J41Ko6DbjCdge7mcAS&hl=en-US&gl=us&cs=1&ssta=1&fo_m=MfohQo559jFvMUOzJVpjPL1YMfZ3bInYwBDuMfaXTPp5KXh-&gei=XgpQZd6HHc3Q0PEP5L2o2Ao&ei=XgpQZd6HHc3Q0PEP5L2o2Ao&fo_s=OA&opi=89978449&sei=CfoT_Oop_puxEcFOOVt966Sk&utm_campaign&utm_source=search" target="_blank" title="Google"><i class="fa-brands fa-google"></i></a></li>
                            <li><a href="https://www.google.com/maps/dir//cold+press+cafe+google+reviews/@32.961606,-97.320332,10z/data=!4m8!4m7!1m0!1m5!1m1!1s0x864e7fbfeec58365:0x339c73941f1b1036!2m2!1d-97.1507041!2d32.8669563?entry=ttu" target="_blank" title="Maps"><i class="fa-solid fa-map-pin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="windowSize"></div>

    <script src="js/app.js"></script>';
    return $footer;

?>

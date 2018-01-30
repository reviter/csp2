<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet" type="text/css">
        <script src="resources/js/script.js"></script>
        <title>Design Fusion</title>
    </head>
    <body>
       
    <?php require "partials/nav.php"; ?>

       <section class="section-features">
            <div class="row">
                <h2>Personalized &mdash; Quality &mdash; Fast Delivery</h2>
                <p class="long-copy">Hello, we’re Design Fusion, your new premium furniture shop with awesome service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!</p>
            </div>

            <div class="row">
                <div class="col span-1-of-4">
                    <i class="ion-person icon-big"></i>
                    <h3>Personalized Furnitures</h3>
                    <p>If you are looking for quality custom built furniture in the Philippines, then we can help! This is a premium service that is not available from other furniture dealers!</p>
                </div>

                <div class="col span-1-of-4">
                    <i class="ion-ios-time icon-big"></i>
                    <h3>Amazing Customer Service</h3>
                    <p>Our goal is to help transform your house into a beautiful home. If you have inquiries, you can contact us via mobile, landline, chat or email and we will help you ASAP.</p>
                </div>

                <div class="col span-1-of-4">
                    <i class="ion-leaf icon-big"></i>
                    <h3>100% Eco-Friendly Furnitures</h3>
                    <p>Sustainable, contemporary furniture that’s better for the environment.</p>
                </div>

                <div class="col span-1-of-4">
                    <i class="ion-android-cart icon-big"></i>
                    <h3>Fast Delivery</h3>
                    <p>Once your order is ready, we will deliver your furniture straight to your home or office, and assemble the furniture for you.</p>
                </div>
            </div>
       </section>

       <section class="section-furniture">
           <h2>Featured Items</h2>
            <ul class="furniture-showcase clearfix">
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/bedroom1.jpeg">
                    </figure>
                </li>
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/bedroom2.jpeg">
                    </figure>
                </li>
            </ul>    
            <ul class="furniture-showcase clearfix">
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/sala1.jpeg">
                    </figure>
                </li>
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/sala2.jpeg">
                    </figure>
                </li>
            </ul>
            <ul class="furniture-showcase clearfix">
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/dining1.jpeg">
                    </figure>
                </li>
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/dining2.jpeg">
                    </figure>
                </li>
            </ul>
            <ul class="furniture-showcase clearfix">
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/chair1.jpeg">
                    </figure>
                </li>
                <li>
                    <figure class="furniture-photo">
                        <img src="resources/img/chair2.jpeg">
                    </figure>
                </li>
            </ul>
       </section>

       <section class="section-steps">
           <div class="row">
                <h2>How to order? &mdash; Simple as 1, 2, 3</h2>
           </div>
           <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the item that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your favorite furniture using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Your order will be delivered in less than 20 minutes. See you the next time!</p>
                    </div>

                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
           </div>
       </section>

       <section class="section-form">
            <div class="map-box">
                <div class="map">
                    <div class="form-box">
                            <div class="row">
                                <h2>We're currently in this city</h2>
                            </div>
                            <div class="row">
                                <div class="col span-2-of-2">
                                    <iframe class="map center" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d241.0512725508403!2d120.2811279!3d14.8353368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4026e561f6d118dc!2sDesign+Fusion+Furniture!5e0!3m2!1sen!2sph!4v1517233500103" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="row">
                                <h2>Olongapo City</h2>
                            </div>
                        </div>
                </div>
            </div>
        </section>

       <section class="section-form">
           <div class="map1"></div>
            <div class="row">
                <h2>Message Us</h2>
            </div>

            <div class="row">
                <form action="mailer.php" method="post" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends">Friends</option>
                                <option value="search">Search Engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send!">
                        </div>
                    </div>
                </form>
            </div>            
       </section>

       <?php require "partials/footer.php"; ?>

    </body>
</html>

<!--  -->
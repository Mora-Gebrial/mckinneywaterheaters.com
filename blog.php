<?php
// Do not modify anything yet
$loca = dirname(__FILE__);
include($loca.'/admin/route.php');
$blog = new BlogData();

// with a slash at the end
$blog->my['siteurl'] = 'https://mckinneywaterheaters.com/';
$blog->my['blogtitle'] = 'Blog - Mckinney Water Heaters';
$blog->my['blogdescription'] = 'Blog - Our experienced technicians can provide quick and effective air duct repairs with only a phone call.';

// Checker
$blog->checkall();
$blog->sitemap();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<base href="https://mckinneywaterheaters.com/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php
// in head instead of ( Title, description, keywords, canonical )
$blog->head(); ?>

<meta name="revisit-after" content="1 month" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="Safe For Kids" />
    <meta name="robots" content="index,all" />
    <meta name="copyright" content="Mckinney Water Heaters" />
    <meta name="classification" content=" Water Heater" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.webp">

    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <meta property="og:title" content="Blog - Mckinney Water Heaters" />
    <meta property="og:description" content="Mckinney Water Heaters supplies Efficient gas, tankless, & traditional options for reliable, eco-friendly, and modern hot water solutions." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mckinneywaterheaters.com/" />
    <meta property="og:image" content="https://mckinneywaterheaters.com/images/logo.webp" />
    <meta property="og:site_name" content="Mckinney Water Heaters">
    <meta name="twitter:card" content=summary_large_image>
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Blog - Mckinney Water Heaters">
    <meta name="twitter:description" content="Mckinney Water Heaters supplies Efficient gas, tankless, & traditional options for reliable, eco-friendly, and modern hot water solutions.">
    <meta name="twitter:image" content="https://mckinneywaterheaters.com/images/" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Mckinney Water Heaters ",
            "image": "https://mckinneywaterheaters.com/images/logo.webp",
            "url": "https://mckinneywaterheaters.com/",
            "telephone": "214-571-9255",
            "email": "service@mckinneywaterheaters.com",
            "description": "Mckinney Water Heaters supplies Efficient gas, tankless, & traditional options for reliable, eco-friendly, and modern hot water solutions.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "2851 Craig Dr STE 100",
                "addressLocality": " McKinney",
                "addressRegion": "TX",
                "postalCode": "77584",
                "addressCountry": "USA"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "335",
                "bestRating": "5",
                "worstRating": "3"
            },
            "priceRange": "$"
        }
    </script>


    <!-- favicon -->

    <link rel="shortcut icon" href="images/favicon.webp" type=image/webp title="shortcut icon" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,400;0,500;0,800;1,600;1,900&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />




    <style media="screen">
/*Blog*/
.blogbox{text-align:justify;padding:20px;background-color:#FFF;box-sizing:border-box;clear:both;overflow:hidden;margin-bottom:15px;box-shadow:3px 3px 7px rgba(0,0,0,0.2)}
.blogbox .blogimg img {float: right; width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.blogbox .read-more a{background-color:#ccc;color:#2D2D2D;padding:10px;border-radius:5px;border:1px solid #2D2D2D}
.blogbox .read-more a:hover {background-color:#2D2D2D;color:#FFF;letter-spacing: 2px;padding:10px 15px}
.blogpost {text-align: justify;padding:20px;background-color: #FFF;box-sizing: border-box}
.blogpost h1, .blogbox h1 {margin:0;font-size:28px;color:#222;}
.blogpost h2, .blogbox h2 {margin:0;font-size:24px;color:#222;}
.blogpost .blog_wrapper img {float: right; max-width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.socialbox{overflow:hidden;position:relative;text-align:center;width:100%;}
.social-share-btns{display:inline-block;overflow:hidden}
.social-share-btns .share-btn{float:left;margin:0 5px;padding:8px 16px;border-radius:3px;color:#fff;font-size:14px;line-height:18px;vertical-align:middle;transition:background .2s ease-in-out;display:flex;align-items:center;}
.social-share-btns .share-btn svg {fill:currentColor;height:1rem;width:1rem;margin-right:10px;}
.share-btn{background-color:#95a5a6}
.share-btn:hover{background-color:#798d8f}
.share-btn-twitter{background-color:#00aced}
.share-btn-twitter:hover{background-color:#0087ba}
.share-btn-facebook{background-color:#3b5998}
.share-btn-facebook:hover{background-color:#2d4373}
.share-btn-linkedin{background-color:#007bb6}
.share-btn-linkedin:hover{background-color:#005983}
@media only screen and (max-width:700px){
.blogbox .blogimg img{max-width:90%;width:auto}
}
</style>
</head>

<body>
<!-- Header Start -->

<header>

<nav class="navbar navbar-expand-lg position-fixed navbar-light w-100 ">
    <div class="container">
        <a class="navbar-brand" href="https://mckinneywaterheaters.com/"><img src="images/logo.webp" alt="logo" title="Mckinney Water Heaters" style="height: 100px; width: 120px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: black;">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px;border-radius: 10px; margin-top: 10px; ">
            <a href="tel:2145719255" style="color: black; margin-left: 10%; font-size: 25px;font-weight: 500;"><i class="fa-solid fa-phone-volume" style="color: #ec2f22; margin-right: 10px;"></i>214-571-9255</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #ec2f22;" aria-current="page" href="https://mckinneywaterheaters.com/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;  ">
           Our Services
          </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(255, 255, 255, 0.8); border-color: black; ">
                        <li><a class="dropdown-item" style=" color: black;" href="plumbing.html">Plumbing</a></li>
                        <li><a class="dropdown-item" style=" color: black;" href="tankless_heater.html">Tankless Heater</a></li>
                        <li><a class="dropdown-item" style=" color: black;" href="drain-cleaning.html">Drain Cleaning</a></li>
                        <li><a class="dropdown-item" style=" color: black;" href="water-leak.html">Water Leak</a></li>
                        <li><a class="dropdown-item" style=" color: black;" href="sewer-repair.html">Sewer Repair</a></li>
                        <li><a class="dropdown-item" style=" color: blacke;" href="toilet-repair.html">Toilet Repair</a></li>
                        <li><a class="dropdown-item" style=" color: black;" href="garbage-disposal.html">Garbage Disposal</a></li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color: black; " href="blog/">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color:black; " href="contact-us.html">Contact Us</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
<div class="clip">
    <div class="clip-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-12 col-xs-2 ">
                    <h1>Mckinney Water Heaters</h1>
                    <p>Mes Quite Water Heaters supplies an extensive choice of water heaters made to meet your unique needs. We have the ideal solution for you, whether you're searching for an advanced tankless water heater that heats water on demand
                        or an old-fashioned storage tank water heater that can store and heat a large amount of water.</p>

                    <a href="tel:2145719255‬9"> <button class="btn" style="background-color: #ec2f22; width: 150px; color: white;">Call Now</button></a>
                </div>

            </div>

        </div>

    </div>

</div>
</header>







<!-- Header End -->




    <div class="container">
  <div class="row"><div class="col-12">
  <?php
// in content box
$blog->content(); ?>
  </div>
</div>
</div>





    <!-- start footer -->

    <footer class="text-center text-lg-start bg-body-tertiary text-muted">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>



            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa-brands fa-blogger-b"></i>
                </a>

            </div>

        </section>



        <section class="" style="background-color: #BFCDD6; padding: 20px; color: black;">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <a href="">
                            <img src="images/logo.webp" alt="logo" title="Mckinney Water Heaters" style="width: 180px; height: 150px;margin-bottom: 30px; margin-top: -20px;">
                        </a>

                    </div>



                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4" style="color: #ec2f22; font-size: 25px;">
                            Links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Our Services</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blog</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Contact Us</a>
                        </p>
                    </div>



                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4" style="color: #ec2f22; font-size: 25px;">
                            Our Services
                        </h6>
                        <p>
                            <a href="plumbing.html" class="text-reset">Plumbing</a>
                        </p>
                        <p>
                            <a href="tankless_heater.html" class="text-reset">Tankless Heater</a>
                        </p>
                        <p>
                            <a href="drain-cleaning.html" class="text-reset">Drain Cleaning</a>
                        </p>
                        <p>
                            <a href="water-leak.html" class="text-reset">Water Leak</a>
                        </p>
                        <p>
                            <a href="sewer-repair.html" class="text-reset">Sewer Repair</a>
                        </p>
                        <p>
                            <a href="toilet-repair.html" class="text-reset">Toilet Repair</a>
                        </p>
                        <p>
                            <a href="garbage-disposal.html" class="text-reset">Garbage Disposal</a>
                        </p>
                    </div>



                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4" style="color: #ec2f22; font-size: 25px;">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> 2851 Craig Dr STE 100,McKinney, TX</p>
                      
                        <p><i class="fas fa-phone me-3"></i> 214-571-9255</p>
                        <p><i class="fa-solid fa-globe me-3"></i>www.mckinneywaterheaters.com</p>

                        <p>
                            <i class="fas fa-envelope me-3"></i> <span id="obfuscatedEmail">Please enable JavaScript to view the email address</span>
                        </p>
                      
                    </div>

                </div>

            </div>
        </section>



        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="https://www.mckinneywaterheaters.com/">www.mckinneywaterheaters.com</a>
        </div>

    </footer>
    <!-- Footer -->




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- live chat -->
    <script id=af367f62fd3aaeb7765a213daaecd73b src="//webserviceexpress.com/script.php?id=af367f62fd3aaeb7765a213daaecd73b" defer></script>

</body>
</html>
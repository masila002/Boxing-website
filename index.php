<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="Boxing" />
  <meta name="description" content="Boxing Training" />
  <meta name="author" content="Francis Masila" />

  <title>Elit Boxing Club</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?php
        include("php/config.php");
        ?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="header_nav">
          <a class="navbar-brand brand_desktop" href="index.php">
            <img src="images/logo.png" alt="" />
          </a>
          <div class="main_nav">
            <div class="top_nav">
              <ul class=" ">
                <li class="">
                  <a class="" href="">
                    <img src="images/telephone.png" alt="" />
                    <span> +2547123456789</span>
                  </a>
                </li>
                <li class="">
                  <a class="" href="">
                    <img src="images/mail.png" alt="" />
                    <span>francismasila12494@gmail.com</span>
                  </a>
                </li>
                
                <li class="">
                  <a class="" href="">
                    <img src="images/location.png" alt="" />
                    <span>Kenya</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="bottom_nav">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand brand_mobile" href="index.php">
                  <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php"> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="class.php"> Classes </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="form.php">Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php"> Log out</a>
                      </li>
                      
                    </ul>
                    <form class="form-inline">
                      <button class="btn ml-3 ml-lg-5 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 offset-md-2">
            <div class="slider_heading">
              <h2>
                   Bo <span>xing</span>
              </h2>
            </div>
          </div>
          <div class="col-md-8 mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="box">
                    <div class="detail-box">
                      <h1>
                        Boxing <br />
                        Center
                      </h1>
                      <hr />
                      <div class="btn-box">
                        <a href="contacts.php" class="btn-1">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="box">
                    <div class="detail-box">
                      <h1>
                        Boxing <br />
                        Gear
                      </h1>
                      <hr />
                      <div class="btn-box">
                        <a href="contacts.php" class="btn-1">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="box">
                    <div class="detail-box">
                      <h1>
                        Boxing <br />
                        Couch
                      </h1>
                      <hr />
                      <div class="btn-box">
                        <a href="contacts.php" class="btn-1">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 ml-auto pr-0">
          <div class="about_container">
            <div class="row">
              <div class="col-lg-3 col-md-5">
                <div class="detail-box">
                  <div class="heading_container">
                    <h2>
                      About Class
                    </h2>
                  </div>
                  <p>
                    We as <strong>ELIT BOXER</strong> believe in delivering the best to all our clients. Our classes are available both physically and online. Online classes are conducted at different days of the week while physical classes are fully available at our training center every day of the week.
                  </p>
                  <hr />
                  <a href="class.php">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- class section -->

  <section class="class_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
          <div class="class_container">
            <div class="row">
              <div class="col-lg-9 col-md-10">
                <div class="heading_container">
                  <h2>
                    Our Classes Videos
                  </h2>
                  <p>
                    These are some of our sessions where we train of clients different fighting and defence techniques. 
                  </p>
                </div>
              </div>
            </div>
            <div class="class_box-container">
              <div class="owl-carousel owl_carousel1">
                <div class="item">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/c1.jpg" alt="">
                      <div class="detail-box">
                        <button>
                          <img src="images/play-icon.png" alt="">
                        </button>
                        <h2>
                          Michael Park
                        </h2>
                      </div>
                    </div>
                    <div class="btn-box">
                      <a href="class.php">
                        See More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/c2.jpg" alt="">
                      <div class="detail-box">
                        <button>
                          <img src="images/play-icon.png" alt="">
                        </button>
                        <h2>
                          Defence
                        </h2>
                      </div>
                    </div>
                    <div class="btn-box">
                      <a href="class.php">
                        See More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/images.jpeg" alt="">
                      <div class="detail-box">
                        <button>
                          <img src="images/play-icon.png" alt="">
                        </button>
                        <h2>
                          Boxing
                        </h2>
                      </div>
                    </div>
                    <div class="btn-box">
                      <a href="class.php">
                        See More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/Home_Hero.jpg" alt="">
                      <div class="detail-box">
                        <button>
                          <img src="images/play-icon.png" alt="">
                        </button>
                        <h2>
                          Warm Up
                        </h2>
                      </div>
                    </div>
                    <div class="btn-box">
                      <a href="class.php">
                        See More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end class section -->


  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 ml-auto">
          <div class="heading_container">
            <h2>
              Latest Blog
            </h2>
            <p>
              The <strong>ELIT BOXER</strong> has brought a new training couch to onboard. The couch who goes by the name <strong>Emmanuel Packer</strong> will be training the newbies from June 2024. 
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pl-0">
          <div class="box b1">
            <div class="img-box">
              <img src="images/b1.jpg" alt="">
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-10 ml-auto">
                <div class="detail-box">
                  <div class="img_date">
                    <h6>
                      17 <br>
                      Feb
                    </h6>
                  </div>
                  <h3>
                    Couch Emanuel Packer
                  </h3>
                  <p>
                    The couch who goes by the name <strong>Emmanuel Packer</strong> will be training the newbies from June 2024. He is a professional couch who has been in boxing for over 7 years with enough experience. He is also a renowned boxer from USA who has fought several heavy weight champions before retiring from boxing.
                  </p>
                  <a href="blog.php">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 pr-0">
          <div class="box b2">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-10 mr-auto">
                <div class="detail-box">
                  <div class="img_date">
                    <h6>
                      17 <br>
                      Jun
                    </h6>
                  </div>
                  <h3>
                    Boxer Joniya Daro
                  </h3>
                  <p>
                    Joniya Daro has qualified for the heavy weights boxing championship that will be held in Denmark on August. This is after gathering several wins from the previous competitions that he has been taking part in.He now joins the list of our most talented and successful boxers of the year in our team.
                  <a href="blog.php">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
          <div class="client_container">
            <div class="heading_container">
              <h2>
                What  Our students Say
              </h2>
              <p>
                Here are different opinions from some of our best students 
              </p>
            </div>
            <div class="client_box-container">
              <div class="carousel-wrap ">
                <div class="owl-carousel">
                  <div class="item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client1.png" alt="" />
                      </div>
                      <div class="detail-box">
                        <h4>
                          Jone Moe
                        </h4>
                        <p>
                          Elit Boxer has taught me descipline in whatever I do. it's one of the best places where I have learnt obedience and being calm in every situition. These are key virtues in life that can pnly be acquired at this place.</p>
                        <img src="images/quote.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client2.png" alt="" />
                      </div>
                      <div class="detail-box">
                        <h4>
                          Lio Uji
                        </h4>
                        <p>
                          It has been a long journey at <strong>Elit Boxer</strong> where I have become physically feet.
                        Following my diet and the classes as well has made me be a very desciplined person. This is the Home to virtues The best couches in oxing are also found here. </p>
                        <img src="images/quote.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client1.png" alt="" />
                      </div>
                      <div class="detail-box">
                        <h4>
                          Jone Moe
                        </h4>
                        <p>
                          Humility is one of the key virtues that I have gained from this forum. This has taken me places to compete world wide and win different competitions. No matter how strong or talented you are, humility is paramount.</p>
                        <img src="images/quote.png" alt="" />
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <div class="info_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 ml-auto">
          <div class="row info_main-row">
            <div class="col-md-6 pr-0">

              <!-- contact section -->

              <section class="contact_section">
                <h2>
                  Request A Call Back
                </h2>
                <form action="">
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" class="message-box" placeholder="Message" />
                  </div>
                  <div class="d-flex ">
                    <button>
                      SEND
                    </button>
                  </div>
                </form>
                <div class="map_container">
                  <div class="map">
                    <div id="googleMap" style="width:100%;height:300px;"></div>
                  </div>
                </div>
              </section>

              <!-- end contact section -->


              <!-- footer section -->
              <section class=" footer_section ">
                <div class="social_box">
                  <a href="#">
                    <img src="images/facebook.png" alt="">
                  </a>
                  <a href="#">
                    <img src="images/twitter.png" alt="">
                  </a>
                  <a href="#">
                    <img src="images/linkedin.png" alt="">
                  </a>
                  <a href="#">
                    <img src="images/instagram.png" alt="">
                  </a>
                  <a href="#">
                    <img src="images/youtube.png" alt="">
                  </a>
                </div>
                <p>
                  &copy; 2020 All Rights Reserved. Design by  Frank254.
                  
                </p>
              </section>
              <!-- footer section -->

            </div>
            <div class="col-md-6  px-0">
              <div class="img-box">
                <img src="images/footer-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end info section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
    }
  </script>

  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    });


    $(".owl_carousel1").owlCarousel({
      loop: true,
      margin: 25,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

  <script>
    /** google_map js **/

    var map;
      var markers = [];
      function myMap() {
        var mapProp = {
          center: new google.maps.LatLng(40.712775, -74.005973),
          zoom: 18,
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
      }

      function addMarker(lat, lng) {
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(lat, lng),
          map: map,
        });
        markers.push(marker);
      }

      function updateMap() {
        // Simulate live updates with random markers
        setInterval(function () {
          var lat = -3.2833668  + (Math.random() - 0.5) / 1000;
          var lng = 24.9185243 + (Math.random() - 0.5) / 1000;
          addMarker(lat, lng);
        }, 2000);
      }

      window.onload = function() {
        myMap();
        updateMap();
      };

  </script>
  <!-- Google Map -->
  <script src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127642.4292913348!2d36.8214016!3d-1.2779519999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1719475043586!5m2!1sen!2ske"</script>
  <!-- End Google Map -->


</body>

</html>
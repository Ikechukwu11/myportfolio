<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="theme-color" content="#243B55"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kekesmovic Web Designs</title>
   
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />

        <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />

    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <style>
      html {
        scroll-behavior: smooth;
      }

      section:before {
      height: 70px;
      content: "";
      display:block;
    }

    section::after {
      height: 10px;
      content: "";
      display: block;
    }

    .mask {
      background: #141E30;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .navbar {
       background: #141E30;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .navbar-dark .navbar-nav .nav-link {
        color: ;
    }
     .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
        color: gray;
    }

    .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .show>.nav-link {
        color:white;
        font-weight: bold;
    }

footer {
  background: #141E30;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.text-demo{
  color: #243B55 !important;
}

.btn-outline-demo {
    color: #243B55 !important;
    border-color: #243B55;
    background-color: white;
    /*border-radius: 0 !important;*/
}

.btn-outline-demo-dark {
    color: white !important;
    border-color: #243B55;
    background-color:#243B55 ;
    /*border-radius: 0 !important;*/
}

  
   .parallax {
      /* The image used */
    background: #141E30;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      /* Full height */
      height: 100%;
      width: 100%; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

     @media (max-width: 367px) {
      .avatarimg {
        width: 100px !important;
      }
    }

    @media (min-width: 368px) and (max-width: 567px) {
      .avatarimg {
        width: 150px !important;
      }
    }

     @media (max-width: 991px) {
      .avatarimg {
        width: 210px;
      }
    }

     @media (min-width: 992px) {
      .avatarimg {
        width: 250px;
      }
      .progress {
       margin-left: -120px;
      }
    }

    @media (max-width: 991px) {
      .progress {
       margin-left: -20px;
      }
    }

</style>
  </head>
  <body>
    <header id="home">
     <nav class="shadow fixed-top scrolling-navbar navbar navbar-expand-lg navbar-dark bg-light" style="background-color: white !important">
        <!-- Container wrapper -->
        <div class="container">
           <!-- Navbar brand -->
          <a class="navbar-brand" href="#">
            <img
              src="img/avatar2.png"
              height="30 "
              class="d-none rounded-circle"
              alt=""
              loading="lazy"
            />
            <span class="font-weight-bold"></span>
          </a>

          <!-- Toggle button -->
          <button
            class="font-weight-bold btn-rounded text-white btn btn-outline-demo-dark navbar-toggler"
            
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >MENU
            
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav mt-3 m-auto text-center mb-2 mb-lg-0">
              <?php 
                echo '<li class="nav-item" id="homelink">
                <a class="nav-link scroll-link" href="#home">Home</a>
              </li>
             
              <li class="nav-item" id="aboutlink">
                <a class="nav-link scroll-link" href="#about">About</a>
              </li>

              <li class="nav-item" id="portfoliolink">
                <a class="nav-link scroll-link" href="#portfolio">Portfolio</a>
              </li>

              <li class="nav-item" id="contactlink">
                <a class="nav-link scroll-link" href="#contact">Contact</a>
              </li>';
              
            
              ?>
              
            </ul>
            <!-- Left links -->

          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav>
        
        <!-- Carousel wrapper -->
      <div id="carouselBasicExample" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active bg-image" data-interval="10000">
            <img
              src="img/bg.jpg"
              class="d-block w-100"
              alt="..."
             style="max-height: 400px;" />
             <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
            <div class="carousel-caption d-md-block">
              <div class="row">
              <div class="col-12 col-lg-3 col-lg-6 m-auto"><h3 class="heading text-uppercase">Ikechukwu kevin</h3>
                <p class="heading text-uppercase">Full Stack Web Developer </p></div>
              <div class="d-none d-md-block col-12 col-md-3 col-lg-6 m-auto"><img src="img/avatar1.png" class="avatarimg rounded-circle" width=""></div>
            </div>
            </div>
          </div>
   
        </div>
        <!-- Inner -->

      </div>
        <!-- Carousel wrapper -->




    </header>
    <main class="my-5">
      <div class="container">
        <!-- Section: Features -->
        <section class="text-center" id="features">
          <h3><strong></strong></h3>

          <div class="row">
            <div class="col-lg-3 col-md-6">
              <i class="fas fa-tachometer-alt fa-2x text-demo"></i>
              <h5 class="my-4">Fast</h5>
              <p class="mb-md-3">
                Blazing fast load times is my highest priority
              </p>
            </div>
            <div class="col-lg-3 col-md-6">
              <i class="fas fa-mobile-alt fa-2x text-demo"></i>
              <h5 class="my-4">Responsive</h5>
              <p class="mb-md-3">
                My layouts will look perfect on any device, regardless of screen
                size.
              </p>
            </div>
            <div class="col-lg-3 col-md-6">
              <i class="far fa-lightbulb fa-2x text-demo"></i>
              <h5 class="my-4">Intuitive</h5>
              <p class="mb-md-3">
                Easy to use, intuitive UX/UI out of the box.
              </p>
            </div>
            <div class="col-lg-3 col-md-6">
              <i class="fas fa-rocket fa-2x text-demo"></i>
              <h5 class="my-4">Dynamic</h5>
              <p class="mb-md-3">
                Website don't have to be boring. I love to give them a life.
              </p>
            </div>
          </div>
        </section>
        <!-- Section: Features -->

        <hr class="my-5" />
        <!-- Section: About me -->
        <section class="text-center" id="about" style="background: ">
          <h3 class="my-5">
            <strong></strong>
          </h3>

          <div class="row">
            <div class=" mb-4">
              <img
                src="img/avatar1.png"
                class="rounded-circle  shadow-1-strong mb-4"
                alt="Avatar" width="200"
              />
              <p><strong>Who's this guy?</strong></p>
              <p>
                My name is Kevin. I studied 
                I'm a self taught Full Stack Developer still on the learning path. I have
                passion for creating simple but yet efective UI  for
                dynamic user experiences. Let's make something special.
                Dedicated and Top-Notch IT Professional with a fervor for tackling human-based problems with the use of Computer Technologies whilst having competency in all areas of system support, programming and having the ability to succeed in a demanding work environment.

Highly articulated and effective communicator, work well with individuals at levels, looking forward to making significant contributions in an ambitious and exciting company that offers genuine opportunities for progression.
              </p>

              <!-- Facebook -->
              <a
                class="btn btn-demo btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://facebook.com/kevin.uzoma"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a
                class="btn btn-demo btn-floating m-1"
                style="background-color: #55acee;"
                href="https://twitter.com/kekesovic1"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Instagram -->
              <a
                class="btn btn-demo btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://instagram.com/kekesmovic"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
            <div class=" mb-4">
              <!-- First row -->
              <p><strong>Proficient (3+ years):</strong></p>
              <div class="row">
                <div  style="color:#e34c26 " class="col-3 col-md-3 mb-4">
                  <i class="fab fa-html5 fa-2x"></i>
                  <p class="font-weight-bold text-uppercase">HTML</p>
                </div>
                <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#e34c26;width: 95%;">
                    </div>
                  </div>
                </div>

                <div style="color:#563d7c" class="col-3 col-md-3 mb-4">
                  <i class="fab fa-css3 fa-2x"></i>
                  <p class="font-weight-bold text-uppercase">CSS</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#563d7c;width: 91%;">
                    </div>
                  </div>
                </div>


                <div  style="color:#784ab4" class="col-3 col-md-3 mb-4">
                  <i class="fab fa-bootstrap fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">BOOTSTRAP</p>
                </div>
                <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#784ab4;width: 90%;">
                    </div>
                  </div>
                </div>

                <div style="color:#edd718" class="col-3 col-md-3 mb-4">
                  <i class="fab fa-js fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">JAVASCRIPT</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#edd718;width: 91%;">
                    </div>
                  </div>
                </div>

                <div style="color:#6c8e9c"  class="col-3 col-md-3 mb-4">
                  <i class="fas fa-database fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">Mysql</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#6c8e9c;width: 70%;">
                    </div>
                  </div>
                </div>


                <div style="color:#6c8e9c"  class="col-3 col-md-3 mb-4">
                  <i class="fab fa-php fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">PHP</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#6c8e9c;width: 85%;">
                    </div>
                  </div>
                </div>

              </div>
              <!-- First row -->

              <!-- Second row -->
              <p><strong>Learning (1+ month):</strong></p>
              <div class="row">
                <div style="color:#3c823b" class="col-3 col-md-3 mb-4">
                  <i class="fab fa-node-js fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">Node.js</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#3c823b;width: 1%;">
                    </div>
                  </div>
                </div>


                <div style="color:#55d1f3" class="col-3 col-md-3 mb-4">
                  <i class="fab fa-react fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">React</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#55d1f3;width: 40%;">
                    </div>
                  </div>
                </div>


                <div style="color:#e83a2d" class="col-3 col-md-3 mb-4">
                  <i class="fab fa-laravel fa-2x m-2"></i>
                  <p class="font-weight-bold text-uppercase">Laravel</p>
                </div>
                 <div class="mt-4 col-9 col-lg-3 mb-4">
                  <div style="height: 7px;" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"role="progressbar"aria-valuenow="75"aria-valuemin="0"aria-valuemax="100"style="background-color:#e83a2d;width: 5%;">
                    </div>
                  </div>
                </div>

              </div>
              <!-- Second row -->

             
            </div>
          </div>
        </section>
        <!-- Section: About me -->
        <!-- Section: My projects -->

        <section id="portfolio" class="text-center">
          
          <h3 class="my-5"><strong></strong></h3>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card projects">
                <div
                  class="bg-image mt-3 "
                  data-ripple-color="light"
                >
                  <img class="project-img" src="img/calc.png" height="150" />
                  <div class=""></div>
                  
                  <a href="#!">
                    <div
                      class=""
                      style="background-color: rgba(251, 251, 251, 0.15);"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Javascript Calculator</h5>
                  <p class="card-text">
                    A simple calculator built with HTML, CSS, Bootstrap and Javascript 
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card projects">
                <div
                  class="bg-image mt-3 "
                  data-ripple-color="light"
                >
                  <img class="project-img" src="img/quote.png" height="150" />
                  <div class=""></div>
                  
                  <a href="#!">
                    <div
                      class=""
                      style="background-color: rgba(251, 251, 251, 0.15);"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Randome Quote Machine</h5>
                  <p class="card-text">
                    A random quote machine built with HTML, CSS, Bootstrap and Javascript 
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card projects">
                <div
                  class="bg-image mt-3 "
                  data-ripple-color="light"
                >
                  <img src="img/tracker.png" class="project-img" height="150" />
                  <div class=""></div>
                  
                  <a href="#!">
                    <div
                      class=""
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Simple Task Tracker</h5>
                  <p class="card-text">
                    A simple task tracker project practice as part of my React learning process built with React
                  </p>
                  
                </div>
                 <div
                  class="bg-image mt-3 "
                  data-ripple-color="light"
                >
                  <img src="img/tracker.png" class="project-img" height="10" />
                  <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);"></div>
                  
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15);"
                    ></div>
                  </a>
                </div>
              </div>
             
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="card projects">
                <div
                  class="bg-image mt-3  "
                  data-ripple-color="light"
                >
                  <img src="img/projects/unit.png" class="project-img" height="150" />
                  <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);"></div>
                  
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15);"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">New design landing page</h5>
                  <p class="card-text">
                    Corporate page for famous furniture designer Anthony Marc
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="card projects">
                <div
                  class="bg-image mt-3  "
                  data-ripple-color="light"
                >
                  <img src="img/projects/fede.png" class=" project-img" height="150" />
                   <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);"></div>
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15);"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">New design landing page</h5>
                  <p class="card-text">
                    Corporate page for famous furniture designer Anthony Marc
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: My projects -->
        <!-- Section: Contact -->
        <section class="container-fluid mb-5" id="contact" style="background-color: #f5f7fd">
            <h2 class="text-center mt-3">Leave A Message</h2>
            <div class="container">
              <div class="row mt-3 mb-5">
                <h4 class="col-md-6 text-md-center"><i class="fas fa-envelope"></i> 
                  <a class="text-dark" href="mailto:hello@leve.com"></a>
                </h4>
                <h4 class="col-md-6 text-md-center"><i class="fas fa-envelope"></i> 
                  <a class="text-dark" href="mailto:hello@leve.com"></a>
                </h4>
                <h4 class="col-md-6 text-md-center"><i class="fas fa-comments"></i>
                  <span>Click on the chat icon for live support</span>
                </h4>
              </div>
              <form>
                <div class="row">
                  <!-- Name input -->
                <div class="col-md-6 ml-auto mb-4">
                  <label class="form-label" for="form4Example1">Name *</label>
                  <input required type="text" id="form4Example1" class="form-control" />
                </div>

                <!-- Email input -->
                <div class="col-md-6 ml-auto mb-4">
                  <label class="form-label" for="form4Example2">Email Address *</label>
                  <input required type="email" id="form4Example2" class="form-control" />
                </div>

                <!-- Message input -->
                <div class= "mb-4">
                  <label class="form-label" for="form4Example3">Message *</label>
                  <textarea  required class="form-control" id="form4Example3" rows="4"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn text-white btn-demo btn-block mb-4">Send</button>
                </div>
              </form>
              
            </div>
              
          </section>
       
        <!-- Section: Contact -->
      </div>
    </main>
    <main class="d-none mb-5">
      <div class="container-fluid">
        <!--Section-->
        <section class="container-fluid" id="about">
          <div class="row mt-3">
            <p class="intro font-weight-bold">
              We commit people, capital and ideas to help our clients, shareholders and the communities we serve to grow. We advise companies on buying and selling businesses, raising capital and managing risks, which enables them to grow. We help local, state and national governments finance their operations so they can invest in infrastructure, like schools, hospitals and roads. We help markets remain efficient and liquid, so investors and companies can meet their needs, whether to invest, raise money or manage risk. We preserve and grow assets for institutions, including mutual funds, pension funds and foundations, as well as individuals.
              Our ethics is defined by core values that showcases what we trust in. They lead and inspire us on how to make impact and do what’s extremely good. These values set the tone for our ethics and bring us together across the globe and business management.Kekesmovic Web Designs is known as one of the most trusted banks worldwide. This detection is salient as trust is the foundation on which we differentiate us and develop client communication..
            </p class="font-weight-bold">
          </div>
        </section>

         <!--Section-->
        <section class="container-fluid" id="portfolio">
          <div class="row mt-3">
            <p class="intro font-weight-bold">
              
            </p>
          </div>
        </section>

        <!--Contact-->
         <section class="container-fluid mb-5" id="contact" style="background-color: #f5f7fd">
            <h2 class="text-center mt-3">Leave A Message</h2>
            <div class="container">
              <div class="row mt-3 mb-5">
                <h4 class="col-md-6 text-md-center"><i class="fas fa-envelope"></i> 
                  <a class="text-dark" href="mailto:support@Kekesmovic Web Designsbk.com">support@Kekesmovic Web Designsbk.com</a>
                </h4>

                <h4 class="col-md-6 text-md-center"><i class="fas fa-comments"></i>
                  <span>Click on the chat icon for live support</span>
                </h4>
              </div>
              <form id="contact-form" method="POST" action="">
                <div class="row">
                  <div class="text-center m-auto" id="status"></div>
                  <!-- Name input -->
                <div class="col-md-4 ml-auto mb-4">
                  <label class="form-label text-demo font-weight-bold" for="form4Example1">Name *</label>
                  <input name="name" required type="text" id="name" class="form-control font-weight-bold" />
                </div>

                <!-- Email input -->
                <div class="col-md-4 ml-auto mb-4">
                  <label class="form-label text-demo font-weight-bold" for="form4Example2">Email Address (Use a valid email) *</label>
                  <input name="email" required type="email" id="email" class="form-control font-weight-bold" />
                </div>

                <!-- Subject input -->
                <div class="col-md-4 ml-auto mb-4">
                  <label class="form-label text-demo font-weight-bold" for="form4Example2">Subject *</label>
                  <input name="subject" required type="text" id="subject" class="form-control font-weight-bold" />
                </div>
                <!-- Message input -->
                <div class= "mb-4">
                  <label class="form-label text-demo font-weight-bold" for="form4Example3">Message *</label>
                  <textarea name="message"  required class="form-control font-weight-bold" id="message" rows="4"></textarea>
                </div>

                <!-- Submit button -->
                <div class= "mb-4">
                  <button type="submit" id="sendmail" class="btn text-white btn-demo btn-block">Send Message</button>
                </div>
              </form>
              
            </div>
              
          </section>
        <!--Contact-->  

        </div>
      
      </div>
    </main>
    

    <footer>
      <footer class="text-center text-lg-left">
        <!-- Copyright -->
        
        <div
          class="text-center p-3 text-white"
        >
          © <?php echo date('Y')?> :
          <a class="font-weight-bold text-white">Kekesmovic Web Designs All Rights Reserved&nbsp;</a>
          
          
        </div>
        <!-- Copyright -->
      </footer>
    </footer>
    <!--jquery-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

  
      <!--End of Tawk.to Script-->
  <!-- Custom scripts -->
  <!-- Custom scripts -->   
         <script>
      setInterval(function() {
    if ( document.location.href.indexOf('#portfolio') > -1 ) {
        $('#portfoliolink a').addClass("active");
    } else {
       $('#portfoliolink a').removeClass("active");
    }

    if ( (document.location.href.indexOf('#') < 1) || (document.location.href.indexOf('#home') > -1)  ) {
        $('#homelink a').addClass("active");
    } else {
       $('#homelink a').removeClass("active");
    }

     /*if (document.location.href.indexOf('#home') > -1 ) {
        $('#homelink a').addClass("active");
    } else {
       $('#homelink a').removeClass("active");
    }*/

   
    if ( document.location.href.indexOf('#contact') > -1 ) {
        $('#contactlink a').addClass("active");
    } else {
       $('#contactlink a').removeClass("active");
    }

      if ( document.location.href.indexOf('#about') > -1 ) {
        $('#aboutlink a').addClass("active");
    } else {
       $('#aboutlink a').removeClass("active");
    }

}, 100);
    </script>
     
  </body>
</html>

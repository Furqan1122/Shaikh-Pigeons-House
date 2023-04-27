<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- font awaisom  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Rubik+Iso&display=swap" rel="stylesheet">
<link rel="icon" href="images/footer-img.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>  Shaikh Pigeons House</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
      <!-- top bar for 900 screen  -->
       <div class="top-bar-sm-size">
         <form class="d-flex " role="search">
        <i class="fa fa-whatsapp search-btn-nav-1" aria-hidden="true" onclick= whatsapplink()> </i>
         <i class="fa fa-facebook search-btn-nav-1" aria-hidden="true" onclick= facebooklink()></i>
         <i class="fa fa-youtube search-btn-nav-1" aria-hidden="true" onclick= youtubelink()></i>
         <i class="fa fa-instagram search-btn-nav-1" aria-hidden="true" onclick= instagramlink()></i>
        <i class="fa fa-search search-btn-nav-1" aria-hidden="true" onclick= searchnavbar()></i>
      </form>
       </div>



    <!-- Navigation BAr  -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-setting">
    <div class="container-fluid">
      <!-- tital  -->
    <a  class="navbar-brand" href="index.html">Shaikh Pigeons House</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Cargo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contect Us</a>
        </li>
                <li class="nav-item">
          <a class="nav-link " href="history.html">History</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gallary
          </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                    <img class="teddy-eye-navbar" src="images/main/teddy-eye-navbar.jpg" alt="">
                    &nbsp; Teddy Pigeons</a>
                <a class="dropdown-item" href="#">
                    <img class="teddy-eye-navbar" src="images/main/golden-eye-navbar.jpg" alt="">
                    &nbsp; Golden Pigeons</a>
                <a class="dropdown-item" href="#">
                        <img class="teddy-eye-navbar" src="images/main/sialkoti-eye-navbar.jfif" alt="">
                        &nbsp; Sialkoti Pigeons</a>
                <a class="dropdown-item" href="#">
                            <img class="teddy-eye-navbar" src="images/main/rampuri-eye-navbar.jfif" alt="">
                            &nbsp; Rampuri Pigeons</a>
                            <a class="dropdown-item" href="#">
                                <img class="teddy-eye-navbar" src="images/main/imam-din-eye-navbar.jpg" alt="">
                                &nbsp; Imam-Din Pigeons</a>
                        <a class="dropdown-item" href="#">
                                    <img class="teddy-eye-navbar" src="images/main/kamagar-eye-nabvar.jfif" alt="">
                                    &nbsp; Kamagar Pigeons</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-success font-weight-bold text-center" href="#">Other Pigeons</a>
              </div>
        </li>

               <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Videos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
 
        

        



      </ul>
      <div id="right-nav-hidden">
      <form class="d-flex " role="search">
        <i class="fa fa-whatsapp search-btn-nav" aria-hidden="true" onclick= whatsapplink()> </i>
         <i class="fa fa-facebook search-btn-nav" aria-hidden="true" onclick= facebooklink()></i>
         <i class="fa fa-youtube search-btn-nav" aria-hidden="true" onclick= youtubelink()></i>
         <i class="fa fa-instagram search-btn-nav" aria-hidden="true" onclick= instagramlink()></i>
        <i class="fa fa-search search-btn-nav" aria-hidden="true" onclick= searchnavbar()></i>
      </form>
      </div>

    </div>
  </div>
</nav>

       <!-- hide after click on cross  -->
       <div id="hidden-call-whatsapp">
      <!-- Call button at bootom right corner  -->

        <div class="call-btn " onclick="callmelink()">
          <button class="call-me-bottom bg-warning">
               <i class="fa fa-phone" aria-hidden="true"></i>
          </button>
      </div>


              <!-- whatsapp button at bootom right corner  -->
              <div class="whatsapp-btn ">
                
                    <button class="whatsapp-me-bottom bg-success" onclick="whatsapplink()">
                        <i class="fa fa-whatsapp text-white" aria-hidden="true"></i>
                   </button>
                

            </div>
        
           <!-- whatsapp button at bootom right corner  -->
                     <div class="cross-btn ">
                        <button class="cross-bottom bg-transparent" onclick="crossfunc()">
                          <img class="cross-btn-img" src="images/main/cross.png" alt="">
                        </button>
                    </div>
                </div>


    
     <!-- first container for pic and text inline  -->
    <div class="first-container">
      <div class="main-page-pic">
        <img src="images/main/main-logo.png" alt="Main Page Picture" style="width: 100%;">
      </div>
      <div class="main-pic-text">
        <p class="main-txt-1">Shaikh Pigeons House</p>
        <p class="main-txt-2">Introduced By "Shaikh Muhammad Aslam", since (1993)</p>
      </div>
    </div>



      <div class="index-all-content">
    <!-- first container text with read me -->
       <div class="about-us-main-paragraph" style="margin-top: -3%;">
        <p class="intro-paragraph">
          Our high flyer pigeons are carefully selected from the best bloodlines and are bred for superior flying ability,
           endurance, and agility. We have a variety of breeds available, including racing pigeons, tumbling pigeons,
            and tippler pigeons, each with their unique characteristics and traits. 
            <button id="read-more-btn-1"  onclick="showPara()">Read more</button> <br>

            <div id="hidden-intro" style="display: none; text-align: justify; ">
               At our business, we believe that the key to success lies in providing excellent care and nutrition for our birds. 
              We use only the finest quality feed and supplements to ensure that our pigeons are in peak physical condition,
              and we provide them with spacious, clean living quarters that are regularly maintained and sanitized. <br>

              Our team of experts is highly knowledgeable and experienced in all aspects of pigeon breeding and care, and we are always available to answer 
               any questions or provide guidance to our customers. Whether you are a seasoned breeder or just starting out, we are here to help you succeed 
               in your pigeon breeding endeavors.

                  <ul>
                    <li>Best Pigeons Seller in Pakistan.</li>
                    <li>We deal with all kind of Pure blood lines</li>
                  </ul>
                  <strong>One of the best Bloods are;</strong> 

                  <ol>
                    <li>Teddy Pigeons (Chaydhary Sakhi Teddy)</li>
                    <li>Teddy Pigeons (Mehro Wala, Saitho wala, ROYAL)</li>
                    <li>Golden Pigeons</li>
                    <li>Sialkoti Pigeons</li>
                    <li>Kamagar Pigeosn (All Kinds)</li>
                    <li>Rampuri Pigeons</li>
                    <li>Sialkoti Pigeons</li>
                    <li>Ali wala Pigeons</li>
                    <li>Dab wala Pigeons</li>
                    <li>Imam Din Pigeons</li>
                    <li>lakha Pigeons</li>
                    <li>lakha Pigeons</li>
                    <li>lakha Pigeons</li>

                  </ol>l
                  


               Thank you for considering our business for your high flyer pigeon needs. We look forward to the opportunity to work with you and provide you with 
                      the best quality pigeons and services available. <br>
                    <button id="read-less-btn-1"  onclick="hidePara()">Read less</button> <br>

   
                </div>

       </div>

       <!-- cards  -->

    <!-- cards  -->
       <h3 class="cards-heading">Saith wala Teddy</h3>
      <div class="my-cards">

           <!-- card no 1  -->
           <a href="">
            <div class="card ">
              <img class="card-img" src="images/CARDS/1.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Saith wala Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>

           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/2.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Teddy with Yarkan Eyes</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/3.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Teddy Outclass Pair</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/4.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Saith wala Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>




      </div>


    <!-- cards  -->
       <h3 class="cards-heading">Chaudhary Sakhi Teddy</h3>
      <div class="my-cards">

           <!-- card no 1  -->
           <a href="">
            <div class="card ">
              <img class="card-img" src="images/CARDS/ch/chaudhary1.jpg" alt="chaudhary wala Teddy" style="width: 100%;">
              <p class="card-heading">Chaudhary Sakhi Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>

           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/ch/chaudhary2.jpg" alt="chaudhary wala Teddy" style="width: 100%;">
              <p class="card-heading">Chaudhary Sakhi Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/ch/chaudhary3.jpg" alt="chaudhary wala Teddy" style="width: 100%;">
              <p class="card-heading">Chaudhary Sakhi Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/ch/chaudhary4.jpg" alt="chaudhary wala Teddy" style="width: 100%;">
              <p class="card-heading">Chaudhary Sakhi Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>




      </div>



          <!-- cards  -->
       <h3 class="cards-heading">Unique Sakhi Teddy</h3>
      <div class="my-cards">

           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/royal-black/2022-09-20-17-02-04-681.jpg" alt="Black Teddy" style="width: 100%;">
              <p class="card-heading">Unique Color Teddy</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>

           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/royal-black/2022-09-22-15-07-47-850.jpg" alt="Black Teddy" style="width: 100%;">
              <p class="card-heading">Black Teddy</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/royal-black/2022-11-24-17-25-21-807.jpg" alt="Black Teddy" style="width: 100%;">
              <p class="card-heading">Royal Teddy</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/royal-black/2023-02-11-18-22-26-454.jpg" alt="Black Teddy" style="width: 100%;">
              <p class="card-heading">Original Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>




      </div>



          <!-- cards  -->
      <div class="my-cards">

           <!-- card no 1  -->
           <a href="">
            <div class="card ">
              <img class="card-img" src="images/CARDS/1.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Saith wala Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>

           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/2.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Teddy with Yarkan Eyes</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/3.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Teddy Outclass Pair</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>
           <!-- card no 1  -->
           <a href="">
            <div class="card">
              <img class="card-img" src="images/CARDS/4.jpg" alt="Saith wala Teddy" style="width: 100%;">
              <p class="card-heading">Saith wala Teddy Pigeons</p>
              <a href="">
                <i class="fa fa-home font-weight-bold text-dark" aria-hidden="true"><span> Order Now</span></i>
              </a>
            </div>
           </a>




      </div>
    
    
      </div>


    


























<div class="footer">

  <div class="footer-test">


 <div class="footer-pic">
    <img class="w-100
     pr-3" src="images/footer-img.png" alt="Footer logo image" >
  </div>
  <div class="footer-contect-us">
    <p class="footer-contect-heading">Contect us</p>
    <button class="footer-contect-btns" onclick="callmelink()">
     <i class="fa fa-phone" aria-hidden="true"></i>
    </button>

        <button class="footer-contect-btns"onclick="whatsapplink()">
     <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </button>

        <button class="footer-contect-btns"onclick="facebooklink()">
     <i class="fa fa-facebook" aria-hidden="true"></i>
    </button>

            <button class="footer-contect-btns"onclick="youtubelink()">
     <i class="fa fa-youtube" aria-hidden="true"></i>
    </button>

            <button class="footer-contect-btns" onclick="instagramlink()">
           <i class="fa fa-instagram" aria-hidden="true"></i>
         </button>
    <br> <br>

    <i class="fa fa-location-arrow" aria-hidden="true" >
      <span class="text-dark"> &nbsp; 26-S-5, New Shalimar Colony Multan Road, Lahore, Pakistan</span></i>
       <div class="payment-methods">
      <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
      <i class="fa fa-bank" aria-hidden="true"></i>
      <i class="fa fa-id-card" aria-hidden="true"></i>
      <i class="fa fa-cc-paypal" aria-hidden="true"></i>
      <i class="fa fa-cc-amex" aria-hidden="true"></i>
       </div>

</div>
  <div class="footer-img-galary">

    <div class="footer-img-glry w-100">
      <div class="footer-galary-r1">
            <img src="images/saith/119241678_657548345158062_2740872762250560360_o.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/saith/2020-12-06-11-33-29-834.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/saith/2020-12-17-12-20-55-417.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/saith/2021-01-23-11-53-17-841.jpg" alt="saith wala teddt footer" width="100%">
      </div>
    </div>

        <div class="footer-img-glry w-100">
      <div class="footer-galary-r1">
            <img src="images/CARDS/ch/chaudhary1.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/CARDS/ch/chaudhary2.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/CARDS/ch/chaudhary3.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/CARDS/ch/chaudhary4.jpg" alt="saith wala teddt footer" width="100%">
      </div>
    </div>

        <div class="footer-img-glry w-100">
      <div class="footer-galary-r1">
            <img src="images/CARDS/royal-black/2022-09-20-17-02-04-681.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/CARDS/royal-black/2022-09-22-15-07-47-850.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/CARDS/royal-black/2022-11-24-17-25-21-807.jpg" alt="saith wala teddt footer" width="100%">
      </div>
      <div class="footer-galary-r1">
            <img src="images/CARDS/royal-black/2023-02-11-18-22-26-454.jpg" alt="saith wala teddt footer" width="100%">
      </div>
    </div>
  </div>



  </div>
</div>
  <div class="footer-reserved">
    <p>
        ©1998-© <span class="current-year-footer"></span> 
        <a href="https://www.facebook.com/shaikh.pigeonshouse">Shaikh Pigeons House</a>
         All Rights Reserved    </p>
  </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="functions.js"></script>
  </body>
</html>

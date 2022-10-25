<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELUXE</title>
     <!-- add icon link -->
     <link rel = "icon" href="https://raw.githubusercontent.com/abdel18aziz/Jsontesting/main/logo/beluxe.png" type = "image/x-icon">

    <!--css bootstrap 4.5-->    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C69KT1PS6K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C69KT1PS6K');
</script>
</head>
<body>

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark ">
        <!-- <a class="imlogo navbar-brand mbr-fonts-style " href="index.php"><i class="fas fa-tshirt"></i>&nbsp;HALLIN</a> -->

        <a href="/index.php">
          <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg27425" viewbox="430 300 200 170" height="56px" width="210px" version="1.1">
              <lineargradient spreadmethod="pad" y2="30%" x2="-10%" y1="120%" x1="30%" id="3d_gradient2-logo-5b6cab2c-781c-4026-84e1-aff30441c61c">
                <stop id="stop27406" stop-opacity="1" stop-color="#ffffff" offset="0%"></stop>
                <stop id="stop27408" stop-opacity="1" stop-color="#000000" offset="100%"></stop>
              </lineargradient>
              <lineargradient gradienttransform="rotate(-30)" spreadmethod="pad" y2="30%" x2="-10%" y1="120%" x1="30%" id="3d_gradient3-logo-5b6cab2c-781c-4026-84e1-aff30441c61c">
                <stop id="stop27411" stop-opacity="1" stop-color="#ffffff" offset="0%"></stop>
                <stop id="stop27413" stop-opacity="1" stop-color="#cccccc" offset="50%"></stop>
                <stop id="stop27415" stop-opacity="1" stop-color="#000000" offset="100%"></stop>
              </lineargradient>
              <g id="logo-group">
                <g id="logo-center" transform="translate(5.684341886080802e-14 0)">
                  <g id="slogan" style="font-style:normal;font-weight:700;font-size:32px;line-height:1;font-family:'Maven Pro';font-variant-ligatures:none;text-align:center;text-anchor:middle" transform="translate(0 0)"></g>
                  <g id="title" style="font-style:normal;font-weight:700;font-size:72px;line-height:1;font-family:'Brandmark1 Bold Color';font-variant-ligatures:normal;text-align:center;text-anchor:middle" transform="translate(0 0)">
                    <g id="path27434" aria-label="B" transform="translate(0 322.68448) translate(209.79471249999995 14.0612) scale(1.67) translate(-381.65975 53.64)"> <path class="c1" d="M79.62231,71.91748h19.22607c5.68066,0,10.19531,1.15186,13.42188,3.42041 c1.81445,1.27441,3.21094,2.90186,4.1543,4.83154c0.9502,1.95117,1.43262,4.2124,1.43262,6.7251 c0,3.06055-0.82813,5.94043-2.39746,8.3457c-0.71289,1.09424-1.56934,2.06641-2.55664,2.91602 c1.43359,0.81396,2.69336,1.83643,3.75879,3.03174c2.42676,2.74316,3.71582,6.36523,3.71582,10.47656 c0,4.9043-1.74219,9.01563-5.04785,11.90234c-3.44141,2.99609-8.33105,4.51563-14.53809,4.51563H79.62231V71.91748z M104.4353,92.56152c1.3252-0.94336,1.97363-2.39795,1.97363-4.44287c0-2.60645-1.21777-3.58594-1.61328-3.90283 c-1.33203-1.07275-3.60742-1.6416-6.58105-1.6416l-7.2876,0.05029v11.32666h7.99268 C101.25269,93.95117,103.16089,93.46875,104.4353,92.56152z M106.76831,115.71143c1.36133-1.00781,2.0166-2.49805,2.0166-4.55078 c0-2.12402-0.67676-3.68652-2.08105-4.78809c-1.5918-1.24609-4.15527-1.9082-7.42383-1.9082H90.927V117.354h9.28857 C103.0603,117.354,105.32104,116.78467,106.76831,115.71143z" transform="translate(302.03744 -125.55748)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#ffffff" stroke="#ffffff"></path> </g>
                    <g id="path27436" aria-label="E" transform="translate(0 322.68448) translate(319.51892289999995 14.0612) scale(1.67) translate(-427.36287 53.64)"> <path class="c1" d="M81.8186,128.08252h36.36279v-10.51367H81.8186V128.08252z M81.8186,105.47217h36.36279v-10.729H81.8186 V105.47217z M81.8186,71.91748v10.729h36.36279v-10.729H81.8186z" transform="translate(345.54427 -125.55748)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#ffffff" stroke="#ffffff"></path> </g>
                    <g id="path27438" aria-label="L" transform="translate(0 322.68448) translate(424.3114228999999 14.0612) scale(1.67) translate(-470.11287 53.64)"> <path class="c1" d="M81.71045,75.51782l11.30469-3.6001v45.43604h25.27441v10.72852h-36.5791V75.51782z" transform="translate(388.40242 -125.55772)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#ffffff" stroke="#ffffff"></path> </g>
                    <g id="path27440" aria-label="U" transform="translate(0 322.68448) translate(521.2113024999999 14.0612) scale(1.67) translate(-508.13675 53.64)"> <path class="c1" d="M91.35181,126.53125c-2.64258-1.11621-5.01855-2.72266-7.05664-4.75977 c-2.03711-2.03809-3.63623-4.41455-4.75928-7.05713c-1.15918-2.74316-1.75-5.65234-1.75-8.64795V71.71973h11.30518v34.34668 c0,6.0127,4.89648,10.90918,10.90918,10.90918s10.9082-4.89648,10.9082-10.90918V71.71973h11.30566v34.34668 c0,2.99561-0.59082,5.90479-1.75,8.64795c-1.11621,2.64258-2.72168,5.01904-4.75977,7.05713 c-2.03809,2.03711-4.41406,3.63574-7.05664,4.75977c-2.74316,1.15918-5.65234,1.74902-8.64746,1.74902 C97.00415,128.28027,94.09595,127.69043,91.35181,126.53125z" transform="translate(430.35086 -125.35973)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#ffffff" stroke="#ffffff"></path> </g>
                    <g id="path27442" aria-label="X" transform="translate(0 322.68448) translate(630.0111846 14.0612) scale(1.67) translate(-553.28638 53.64)"> <polygon class="c1" points="112.69824,71.91748 100.02539,90.66797 87.28711,71.91748 73.95898,71.91748 92.78125,99.99268 73.70703,128.08252 87.06445,128.08252 99.9248,109.32471 99.9408,109.34808 125.66718,71.91748 " transform="translate(479.57935 -125.55748)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#ffffff" stroke="#ffffff"></polygon> <polygon class="c3" points="116.85968,114.24286 103.29663,114.24286 112.78516,128.08252 126.29297,128.08252 " transform="translate(479.57935 -125.55748)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#585858" stroke="#585858"></polygon> </g>
                    <g id="path27444" aria-label="E" transform="translate(0 322.68448) translate(753.4840875 14.0612) scale(1.67) translate(-607.22225 53.64)"> <path class="c1" d="M81.8186,128.08252h36.36279v-10.51367H81.8186V128.08252z M81.8186,105.47217h36.36279v-10.729H81.8186 V105.47217z M81.8186,71.91748v10.729h36.36279v-10.729H81.8186z" transform="translate(525.40365 -125.55748)" stroke-width="0" stroke-linejoin="miter" stroke-miterlimit="2" fill="#ffffff" stroke="#ffffff"></path> </g>
                        </g>
                </g>
              </g>
            </svg>
      </a>
      


        <!--  -->
  <button class="navbar-toggler btn-outline-anonymous" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" aria-pressed="true">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-2 pt-2 mb-2">
      <li class="nav-item active ">
        <a class="nav-link mbr-fonts-style " href="brands.html">Brands</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link mbr-fonts-style " href="Men.html">Men</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link mbr-fonts-style " href="Women.html">Women</a>
      </li>
      
    </ul>

    <div class="float-right">
      <a class="nav-link text-light mbr-fonts-style " href="MyCart.html"><svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class= "bi bi-bag" viewbox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
      </svg> &nbsp;Cart <span class="badge badge-dark" id="shpncrt">0</span></a>
      </div>

    <div class="float-right">
      <a class="nav-link mbr-fonts-style text-light align-content-center d-flex "  href="/<?php if (isset($user_data)) {echo "account.php";} else { echo "login.php"; } ?>">
        <span class="material-symbols-outlined " >
          account_circle
          </span> &nbsp;Account</a>
</div>

    <!-- <form class="form-inline  my-lg-0 ">
      <input class="form-control sear mbr-fonts-style " type="search" placeholder="Search" aria-label="Search">
     <div class="p-1"></div>
      <button class="btn btn-outline-light my-2 my-sm-0 mbr-fonts-style " type="submit">Search</button>
    </form> -->

  </div>
       </nav>
        <!-- this div for deviding container from nav--> 
        <div class="mydiv"></div>
        <!-- end-->

        <!-- <div class=" bg-light diiv  p-2 " > -->

<!-- <div class="float-left pl-5">
          <a class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle mbr-fonts-style text-dark " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              &nbsp;English</a>
            <div class="dropdown-menu  bg-light  " aria-labelledby="navbarDropdown2">
              <a class="dropdown-item active bg-transparent text-dark mbr-fonts-style " href="#">Frensh</a>
              <div class="dropdown-divider"></div> 
                <a class="dropdown-item active bg-transparent text-dark mbr-fonts-style " href="#">jeans</a>
              <div class="dropdown-divider"></div>
               <a class="dropdown-item active bg-transparent text-dark mbr-fonts-style " href="#">boots</a> 

            </div>
            
          </a>
</div> -->



<!-- 2nd nav -->


<!-- body start -->
<div class="fadin wallpaper " style="background-image:url('ae.webp');">
  <div class="pssp">
  <!-- <div class="pt-4"></div> -->

  <div class="fadin2 d-flex justify-content-center">
    <div class=" col-md-9">
    <h2 class="FontSizeOnResolution text-white p-2 text-center justify-content-center" id="FontSizeOnResolutions" style="font-style:normal;font-weight:450;font-size:46px;line-height:1;font-family:'Brandmark Dots 1 Color';font-variant-ligatures:normal;text-align:center;text-anchor:middle;">Find the best deals on the largest marketplace for stylish clothes.</h2>
    </div>
  </div>

  <div class="" style="padding: 2vh;"></div>

  <!-- <p class="text text-light display-1 pl-4 "  >50% OFF </p>
  <h5 class=" text-light  pl-4">This promotion is valid for models that higher than 100$</h5> -->
  <div class="container">
    <div class="col-12">  
      <div class="fadin input-group d-flex justify-content-center" >
        <input id="homeSearch" type="search" placeholder="Search for the best deals through our website " class="form-control col-8" style="height: 50px;" aria-label="Text input with segmented dropdown button">
        <div class="input-group-append">
          <button type="button" class="btn btn-outline-secondary bg-dark text-light" id="searchbtn" style="width: 10em; height: auto;font-style:normal;font-weight:550;font-size:16px;line-height:1;font-family:'Brandmark Dots 1 Color';font-variant-ligatures:normal;text-align:center;text-anchor:middle;">Search</button>
        </div>
      </div>

    </div>
  </div>
</div>

</div>

<!--  -->

<div class="exploreinventory d-flex justify-content-center text-center bg-dark text-light h2 p-2 pt-3 pb-3 m-0" style="font-family: 'Oxygen', sans-serif ;">Explore Our Inventory</div>


<div class="container-fluid bg-dark pt-3 pb-3 ">
  <div class=" justify-content-center row">

<!---->
     <video  controlslist="nodownload nofullscreen" muted loop autoplay style="width:310px; height: fit-content;">
                    <source src="https://beluxe.today/data/cartiern.webm" type="video/webm">
                    Your browser does not support the video tag.
     </video>

    
     <video  controlslist="nodownload nofullscreen" muted loop autoplay style="width:310px; height: fit-content;">
      <source src="https://beluxe.today/data/blue.webm" type="video/webm">
      Your browser does not support the video tag.
</video>

<video  controlslist="nodownload nofullscreen" muted loop autoplay style="width:310px; height: fit-content;">
  <source src="https://beluxe.today/data/cartiericedW.webm" type="video/webm">
  Your browser does not support the video tag.
</video>

<video  controlslist="nodownload nofullscreen" muted loop autoplay style="width:310px; height: fit-content;">
  <source src="https://beluxe.today/data/black.webm" type="video/webm">
  Your browser does not support the video tag.
</video>

       <!---->
  

</div>
</div>

<!-- <div class=" h3 text-dark m-0  text-center " style="height: 44px;">MEN INVENTORY</div> -->
<!-- <div class="p-5 d-flex justify-content-center h5 " style="font-family: Georgia, 'Times New Roman', Times, serif;">MEN</div> -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
 
  <div class="carousel-inner">
    <div class=" carousel-item active">
      <!-- <img src="./a.jpg" class=" w-100" style="height: 80vh;width: 100vh;" alt="..."> -->
      <div style="background-image: url('/ff.webp');height: 90vh;background-position: center;-webkit-background-size: cover;background-repeat: no-repeat;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;background-size: cover;"></div>
      <div class="fadin5 carousel-caption mb-5">
        <h3>We Get You The Most Stylish Men Clothes</h3>
        <p style="font-size: large;">Be Luxe and Have stylish lifestyle With Us </p>
        <button class="btn btn-outline-light " id="viewm" style=" border-radius: 0 0 0 0;">View More</button>

      </div>
    </div>
    <div class=" carousel-item">
      <div  style="background-image: url('/hh.webp');height: 90vh;background-position: center;-webkit-background-size: cover;background-repeat: no-repeat;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;background-size: cover;"></div>
      <!-- <img src="./h.jpg" class="d-block w-100" style="height: 80vh;width: 100vh;" alt="..."> -->
      <div class="fadin5 carousel-caption mb-5">
        <h3>The Most Stylish Clothes For Women</h3>
        <p style="font-size: large;">Be Luxe and Have stylish lifestyle With Us </p>
        <button class="btn btn-outline-light " id="vieww" style=" border-radius: 0 0 0 0;">View More</button>
      </div>
    </div>
    

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br>
<!-- <hr> -->
<div class="fadin container-fluid bg-white pt-4 pb-1" style="font-family: Georgia, 'Times New Roman', Times, serif;" >
  <div class="h1 text-center"  >Why You Should Choose Us.</div>
  <div class="col-12" >
    <div class="row p-5">
  <div class="col-lg-4 ">
    <h1 class="display-1 text-secondary">01.</h1>
    <h4 class="font-weight-bold">Quality products</h4>
    <p class="lead">We make sure that our customers are satisfied with the high-quality products that we provide, it's all about the small details.</p>
  </div>
  
  <div class="col-lg-4">
    <h1 class="display-1 text-secondary">02.</h1>
    <h4 class="font-weight-bold">Pricing</h4>
    <p class="lead">Our prices are competitive and fair. There are no surprise bills. Any unexpected or additional expenses must be pre-approved by you. That’s how we would like to be treated, and that is how our clients are treated.
</p>
  
  </div>
  
  <div class="col-lg-4">
    <h1 class="display-1 text-secondary">03.</h1>
    <h4 class="font-weight-bold">Secure Payments</h4>
    <p class="lead">All transactions are made by an external third party such as (Payoneer, wise, advcash & cryptocurrencies ), no payment is made through beluxe.today.</p>
  
  </div>
  
    </div>
  </div>
  </div>


  <!-- <hr> -->
<!-- TrustBox widget - Micro Review Count -->
<div class="trustpilot-widget pt-3" data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="61479f62f36082001da9d0d4" data-style-height="50px" data-style-width="100%" data-theme="light">
  <a href="https://www.trustpilot.com/review/beluxe.today" target="_blank" rel="noopener">Trustpilot</a>
</div>
<!-- End TrustBox widget -->
<!-- <hr> -->

  <!-- footer strat -->

  <footer class="bg-dark container-fluid">
    <div class="row">
    
    <div class="col-md-5 pt-3 d-flex justify-content-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">
    <div class="form-group text-white h5 ">
    <label class="" for="exampleInputEmail1">Subscribe & Save</label>
    <small id="emailHelp" class="form-text text-muted mb-3">Subscribe to get special offers, and once-in-a-lifetime deals.</small>
    <div class="d-flex justify-content-start ">
    <input type="email" class="form-control ax" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <button class="btn btn-light ml-3" type="submit">SignUp</button>
    </div>
    </div>
    </div>
    
    
    <div class=" col-md-6 d-flex justify-content-around p-3">
    <div>
    <ul class="no-bullets site-footer__linklist">
     <li><a href="brands.html">Brands</a></li>
    <!-- <li><a href="/pages/unique-watches">Collections</a></li> -->
    <li><a href="/Men.html">Men</a></li>
    <li><a href="/Women.html">Women</a></li>
    <li><a href="/reviews.html">Reviews</a></li>
    <!-- <li><a href="/collections/new-watches">New</a></li> -->
    <!-- <li><a href="/collections/watches-on-sale">Flash Sale</a></li> -->
    </ul>
    </div>
    <div>
        <ul class="no-bullets site-footer__linklist">
            <!-- <li><a href="https://www.watches.com/account/login">My Account</a></li> -->
            <li><a href="/shipping-policy.html">Shipping</a></li>
            <li><a href="/returns.html">Returns</a></li>
            <li><a href="/Support.html">FAQ</a></li>
            <li><a href="mailto:beluxetoday@gmail.com">Contact Us</a></li>
    </ul>
    </div>
    </div>
    
    
    </div>
    <div class="ml-5 pl-5 d-flex justify-content-start align-items-center">
        <a href="https://www.facebook.com/beluxe.international">
          <h4 class="p-4"><i class=" clas fa fa-facebook-official" aria-hidden="true"></i></h4>
        </a>
        <a href="https://www.instagram.com/beluxe.international">
          <h4 class="p-4"><i class=" clas fa fa-instagram" aria-hidden="true"></i></h4>
        </a>
        <!-- <a href="">
        <h4 class="p-4"><i class=" clas fa fa-twitter" aria-hidden="true"></i></h4>
        </a> -->
        
      </div>
    <div class="p-3 text-light d-flex text-center justify-content-center"> © 2021 BELUXE All Rights Reserved</div>
    </footer>
    


  <script type="text/javascript" src="cart.js"></script>
<script>

// search
  const menP ="https://raw.githubusercontent.com/abdelaziz-belhachmi/Jsontesting/main/products/men/data";
  const womenP ="https://raw.githubusercontent.com/abdelaziz-belhachmi/Jsontesting/main/products/women/data";
  
const searchBar = document.getElementById("homeSearch");
const searchB = document.getElementById("searchbtn");

searchBar.addEventListener('keyup',async (e)=> {

  const dt= await fetch(menP); 
  const dat =await dt.json();
  const data = dat.menproducts;

  const wdt= await fetch(womenP); 
  const wdat =await wdt.json();
  const wdata = wdat.womenproducts;

  const FullData =data.concat(wdata);

  // console.log(e.target.value);
  // console.log(data);
  const searchStrings = e.target.value;
  const searchString =searchStrings.toUpperCase();
   const filtredChar = FullData.filter((character) => {
        return character.name.toUpperCase().includes(searchString);
  } );
  
  localStorage.setItem('sString',searchStrings);
  localStorage.setItem('searchedItemFromHomePage',JSON.stringify(filtredChar));
  // console.log(filtredChar);
  // document.getElementById("").innerHTML =`${filtredChar.map(generateCard).join('')}`;
});


searchB.addEventListener('click', ()=> {
  location.href="/p/products.html";
});

const viewm = document.getElementById("viewm");
const vieww = document.getElementById("vieww");

//arrow function  
/*

function name (parametre ){
pareametre++;
return parametre
}




*/

viewm.addEventListener('click',()=>{ 
  location.href="/Men.html"} 
);

vieww.addEventListener('click',()=>{
  location.href="/Women.html"
});

</script>

 <!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/96174db884.js" crossorigin="anonymous"></script>
</body>
</html>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<style>div[class="disclaimer"]{display:none;}</style>
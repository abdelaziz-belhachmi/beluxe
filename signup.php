<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELUXE</title>
     <!-- add icon link -->
     <link rel = "icon" href="https://raw.githubusercontent.com/abdelaziz-belhachmi/Jsontesting/main/logo/beluxe.png" type = "image/x-icon">

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

    <!-- <div class="float-right">
      <a class="nav-link mbr-fonts-style text-light align-content-center d-flex "  href="/login.php">
        <span class="material-symbols-outlined " >
          account_circle
          </span> &nbsp;Account</a>
</div> -->

    <!-- <form class="form-inline  my-lg-0 ">
      <input class="form-control sear mbr-fonts-style " type="search" placeholder="Search" aria-label="Search">
     <div class="p-1"></div>
      <button class="btn btn-outline-light my-2 my-sm-0 mbr-fonts-style " type="submit">Search</button>
    </form> -->

  </div>
       </nav>
        <!-- this div for deviding container from nav--> 
        <!-- <div class="mydiv"></div> -->
        <!-- end-->

        <div class="container-fluid wallpaper2">
             <div style="height:10vh;"></div>
          <div class="text-light p-5 d-flex justify-content-center mt-5">
            <div class="bg-dark p-5 rounded" style="font-family:Arial, Helvetica, sans-serif ">
            <form method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  class="form-control" name="user_name" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">keep me Loged in</label>
              </div> -->
              <br>
              <button type="submit"  value="Signup" class="btn btn-secondary">Sign UP</button>
            </form>
            <br>
              <a class="text-secondary p-0" href="/login.php">Already have an Account?</a>

          </div>
            </div>
          </div>

        
  <!-- footer strat -->

  <footer class="bg-dark container-fluid">
    <div class="row" >
      
      
        <!-- col6 1-->
        <div class="col-md-5 pt-3 d-flex justify-content-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">
          <div class="form-group text-white h5 ">
            <label class="" for="exampleInputEmail1"  >Subscribe & Save</label>
            <small  id="emailHelp" class="form-text text-muted mb-3">Subscribe to get special offers, and once-in-a-lifetime deals.</small>
            <div class="d-flex justify-content-start ">
            <input type="" class="form-control ax" id="" aria-describedby="emailHelp" placeholder="Enter email">
            <button class="btn btn-light ml-3" type="">SignUp</button>
            </div>
          </div>
        </div>
<!-- col6 1 end-->
<!-- col6 2 -->

<div class=" col-md-6 d-flex justify-content-around p-3">
  <div >
  
      <ul class="no-bullets site-footer__linklist">
        
          <li><a href="brands.html">Brands</a></li>
        
          <li><a href="/pages/unique-watches">Collections</a></li>
        
          <li><a href="/collections/mens-watches">Men</a></li>
        
          <li><a href="/collections/womens-watches">Women</a></li>
        
          <li><a href="/collections/new-watches">New</a></li>
        
          <li><a href="/collections/watches-on-sale">Flash Sale</a></li>
        
      </ul>
    
  </div>
  
  <div>
            <ul class="no-bullets site-footer__linklist">
               
             <li><a href="/account/login">My Account</a></li>
           
             <li><a href="/pages/reviews">Reviews</a></li>
           
             <li><a href="/pages/shipping-policy">Shipping</a></li>
           
             <li><a href="https://www.watches.com/a/returns">Returns</a></li>
           
             <li><a href="/pages/faq">FAQ</a></li>
           
             <li><a href="/pages/contact-us">Contact Us</a></li>
           
         </ul>
  </div>
  
  </div>
        
<!-- col6 2 end  -->

       
    <!--col12 end-->
    </div>
      
      
 
      <div class="ml-5 pl-5 d-flex justify-content-start align-items-center">
          <h4 class="p-4"><i class=" clas fa fa-facebook-official" aria-hidden="true"></i></h4>
          <h4 class="p-4"><i class=" clas fa fa-instagram" aria-hidden="true"></i></h4>
          <h4 class="p-4"><i class=" clas fa fa-twitter" aria-hidden="true"></i></h4>
        
      </div>
      <div class="p-3 text-light d-flex justify-content-center"> © 2020 All Rights Reserved

      </div>
  </footer>
        
 <!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
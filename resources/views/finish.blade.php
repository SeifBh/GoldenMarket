
<html>
<head>


<title>Félicitation !</title>
<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary JavaScript plugins) -->
{!! HTML::script('js/jquery-1.11.1.min.js'); !!}
    <link href="{{ asset("/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->


    <link href="{{ asset("/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
<!-- Custom Theme files -->
<link href="{{ asset('/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('/css/megamenu.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('/css/golden.css') }}" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script type="text/javascript" src="/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="/js/menu_jquery.js"></script>
<script src="/js/simpleCart.min.js"> </script>
</head>
<body>
<div id="tophd" class="top_bg" >
    <div class="container">
        <div class="header_top">
            <div class="top_right">
                <ul>


                    
          <li><a href="auth/login">{{  isset(Auth::user()->name) ? Auth::user()->name  : 'Connexion' }}</a></li>|
          <li><a href="auth/register">{{  isset(Auth::user()->name) ? Auth::user()->email  : 'Inscription' }}</a></li>|
          <li><a href="auth/register">{{  (Auth::check() && Auth::user()->isAdmin()) ? 'Admin'  : 'user' }}</a></li>|
          <li ><a target="_blank" href="Admin/dashboard">{{  (Auth::check() && Auth::user()->isAdmin()) ? 'Tableau de board'  : '' }}</a></li>
          <li><a href="auth/logout">Auth/logout</a></li>|
                </ul>
            </div>

            <div class="top_left">

        <h2><span class="blink_me"></span> Contactez nous : {{$num}}</h2>

            </div>
                <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header -->
<div class="header_bg">
        <div class="header"></div>

        <nav id="xx5" class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="logpos" class="navbar-brand" title="Acceuil" href="/">
                       <img  src="images/logo.png"  >
                    </a>
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                <li id="satyalive"><a href="index.html">Acceuil</a></li>

                             @foreach($LMenu as $MenuList)

                        <li><a href="{{$MenuList->menu_name }}">{{$MenuList->menu_name }}</a></li>
                                      @endforeach

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    
        <!-- start header menu -->
    <!-- start header menu -->

<div  class="container" >
    <div class="row">


        <div id="xx2" class="col-sm-1"  ></div>

        <div id="xx2" class="col-sm-10"  ></br>
    <center><span  class="gag"> <b>Félicitation </b></span></center></br></br>
    <center><span  class="gag"> <b>Vous avez entrer dans le tirage au sort de cette semaine . </br>Bon chance </b></span></center>




    </div>
            <div id="xx2" class="col-sm-1"  ></div>


</div></div>

   </br>
    </br>
    </br>
    </br>
    </br>


<div id ="xx1"class="container" class="col-sm-4 col-md-2 col-lg-12" >
   <span class="gag"> <b>Cliquez sur le cadeaux de votre choix pour le gagner</b></span>

    </br>

    @foreach($prod as $pro)
    <div class="col-sm-4 col-md-2">
      <div id="xx" class="ss">
        <a href="{{ $pro->id_prod }}"></a>
          <center><b>Gagner le</b></center>
            <div class="divimg1" >
            <a href="../Produit/{{ $pro->id_prod }}" >
            <img href="../Produit/{{ $pro->id_prod }}" src="../images/product_images/{{$pro->path_file}}" id="imgx" class="img-responsive" alt="" >
            </a>

              <input class="{{ $pro->id_prod }}" name="ProdID" type="hidden" value="{{ $pro->id_prod }}">
            		<center><span>{{ $pro->name_prod }}</span></center>
            </div>
      </div>
      </br>
    </div>
    @endforeach

</div>
</div>



</div>
<footer class="flex-rw">
  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About Pavilion</h4></li>
    <li><a href='/shop/about-mission' class="generic-anchor footer-list-anchor" itemprop="significantLink">GET TO KNOW US</a></li>
    <li><a href='/promos.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">PROMOS</a></li>
    <li><a href='/retailers/new-retailers.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">BECOME A RETAILER</a></li>

    <li><a href='/job-openings.html' itemprop="significantLink" class="generic-anchor footer-list-anchor">JOB OPENINGS</a></li>

    <li><a href='/shop/about-show-schedule' class="generic-anchor footer-list-anchor" itemprop="significantLink">EVENTS</a></li>
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">The Gift Selection</h4></li>


    <li><a href='/Angels/cat/id/70' class="generic-anchor footer-list-anchor">ANGEL FIGURINES</a></li>
    <li><a href='/Home-Decor/cat/id/64' class="generic-anchor footer-list-anchor">HOME DECOR</a></li>
    <li><a href='/Mugs/cat/id/32' class="generic-anchor footer-list-anchor">MUGS</a></li>
    <li><a href='/Pet-Lover/cat/id/108' class="generic-anchor footer-list-anchor">PET LOVER</a></li>
    <li><a href='/Ladies-Accessories/cat/id/117' class="generic-anchor footer-list-anchor" target="_blank">HANDBAGS & JEWELRY</a></li>
  </ul>
  <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">Please Help Me</h4></li>
    <li><a href='/shop/about-contact' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
    <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
    <li id='find-a-store'><a href='/shop/store-locator' class="generic-anchor footer-list-anchor" itemprop="significantLink">STORE LOCATOR</a></li>
    <li id='user-registration'><a href='/shop/user-registration?URL=' class="generic-anchor footer-list-anchor" itemprop="significantLink">NEW USERS</a></li>
    <li id='order-tracking'><a href='/shop/order-status' itemprop="significantLink" class="generic-anchor footer-list-anchor">ORDER STATUS</a></li>
  </ul>


</footer>
  <center>

<div class="row" id="ttfoter">
  

<div class="col-md-12">
Designed and managed by Claims Legal Ltd © 2015 - 2016
</div>
</div>

</center>
</body>
</html>
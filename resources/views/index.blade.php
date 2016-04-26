<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<title>.:: GoldeN Market .::</title>
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
  <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

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

<script type="text/javascript" src="/js/typed.js"></script>

<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="/js/menu_jquery.js"></script>
<script src="/js/simpleCart.min.js"> </script>
<script type="
text/javascript">
(function blink() { 
    $('.blink_me').fadeOut(500).fadeIn(500, blink); 
})();
</script>

<script>


      $(function(){
        $(".element").typed({
          strings: ["Un jeu simple et facile.^1000 donnez vous une chance de gagner un chéque de 1000€  ou des voyages pour deux personnes.","Allez choisissez votre cadeaux rappidement."],
          typeSpeed: 20,
          backDelay: 3000,
            // false = infinite
            loopCount: true,

        });




      });
      

</script>

</head>
<body>
<!-- header_top -->
<div id="tophd" class="top_bg" >
	<div class="container">
		<div class="header_top">

			<div class="top_right">
				<ul class="nav navbar-nav">


                    
          <li><a href="auth/login">{{  isset(Auth::user()->name) ? Auth::user()->name  : 'Connexion' }}</a></li>
          <li><a href="auth/register">{{  isset(Auth::user()->name) ? ''  : 'Inscription' }}</a></li>
          <li><a href="/contenue/principe">Le principe</a></li>
          <li ><a target="_blank" href="Admin/dashboard">{{  (Auth::check() && Auth::user()->isAdmin()) ? 'Tableau de board'  : '' }}</a></li>
          <li><a href="auth/logout">{{  isset(Auth::user()->name) ? 'Déconnexion'  : '' }}</a></li>
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
                        <span class="icon-bar">1</span>
                        <span class="icon-bar">2</span>
                        <span class="icon-bar">3</span>
                    </button>
                    <a id="logpos" class="navbar-brand" title="Acceuil" href="/">
                       <img  src="images/logo.png"  >
                    </a>

                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                <li id="satyalive"><a href="/">Acceuil</a></li>

                             @foreach($LMenu as $MenuList)

                        <li><a href="{{$MenuList->name_cat }}">{{$MenuList->name_cat }}</a></li>
                                      @endforeach

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	
		<!-- start header menu -->


<div class="container" >
    <div class="row">
<div class="col-sm-12 col-md-4">
<div class="box box-success">
<i><b>Les gangants précedents

</b></i>
  <table class="table table-bordered table-hover dataTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom&Prenom</th>
        <th>Pays</th>

      </tr>
    </thead>
    <tbody>
         @foreach($pros_fake as $fake)
      <tr>
        <td>{{$fake->pros_id }}</td>
        <td>{{$fake->name_pros }}</td>
        <td>{{$fake->pays }}</td>


      </tr>
               @endforeach
    </tbody>
  </table>
 </div>
 </div>

<div class="col-sm-12 col-md-4">
<div class="box box-danger" id="compteurfont">
<center>
<h2> <span class="element" ></span>

<span class="typed-cursor"></span>

</br>
<img  src="images/ex2.gif"  />

</h2></center>

<script language="JavaScript">
TargetDate ="{{$month}}/{{$day}}/{{$years}} 12:00 AM";
BackColor = "white";
ForeColor = "red";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Jours, %%H%% Heures, %%M%% Minutes, %%S%% Secondes.";
FinishMessage = "veuillez patientez..";
</script>
<script language="JavaScript" >
  

function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}

function CountBack(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn").innerHTML = FinishMessage;
    return;
  }
  DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
  DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
  DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
  DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

  document.getElementById("cntdwn").innerHTML = DisplayStr;
  if (CountActive)
    setTimeout("CountBack(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
}

function putspan(backcolor, forecolor) {
 document.write("<center><span id='cntdwn' style='font-size:24px;background-color:" + backcolor + 
                "; color:" + forecolor + "'></span>");
}



CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
  CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
putspan(BackColor, ForeColor);
var dthen = new Date(TargetDate);
var dnow = new Date();
if(CountStepper>0)
  ddiff = new Date(dnow-dthen);
else
  ddiff = new Date(dthen-dnow);
gsecs = Math.floor(ddiff.valueOf()/1000);
CountBack(gsecs);


</script>


 </div>
 </div>

<div class="col-sm-12 col-md-4">
<div class="box box-warning">
<i><b>Tirage au sort en cours...</b>
</i>

  <table class="table table-bordered table-hover dataTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom&Prenom</th>
        <th>Pays</th>
      </tr>
    </thead>
    <tbody>
         @foreach($pros_winner as $winner)
      <tr>
        <td>{{$winner->pros_id }}</td>
        <td>{{$winner->name_pros }}</td>
        <td>{{$winner->pays }}</td>


      </tr>
               @endforeach

    </tbody>
  </table>
 </div>
 </div>



			<div class="clearfix"> </div>
		</div>


<div class="container">
    <div class="row">

        <div class="col-md-4" id="step1">
    <img  src="images/step1.png"  >
        </div>
        <div class="col-sm-12 col-md-4" id="step2">
    <img  src="images/step2.png"  >

        </div>
        <div class="col-sm-12 col-md-4" id="step3">
    <img  src="images/step3.png"  >

        </div>
    </div>
</div>
</BR>
<div id ="xx1" class="container" class="col-sm-4 col-md-2 col-lg-12" >
  <span class="gag"> <b>Cliquez sur le cadeaux de votre choix pour le gagner</b></span>
    </br>

    @foreach($prod as $pro)
    <div class="col-sm-4 col-md-2">
      <div id="xx" class="ss" >
          <center><b>Gagner le</b></center>
            <div class="divimg1" >
            <a href="Produit/{{ $pro->id_prod }}" >
            <center><img href="Produit/{{ $pro->id_prod }}" src="images/product_images/{{$pro->path_file}}" id="imgx" class="img-responsive" alt="" ></center>
            </a>

              <input class="{{ $pro->id_prod }}" name="ProdID" type="hidden" value="{{ $pro->id_prod }}">
            		<b><center><span id="nameprodx">{{ $pro->name_prod }}</span></center></b>
            </div>
      </div>
      </br>
    </div>
    @endforeach

</div>
</div>



</div>
</br>
</br>


<!--Some of this HTML is directly from Pavilion.  You can change it to whatever you want if you want to mimic this design.-->
<footer class="flex-rw">
  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header"></h4>  <img  src="images/logo.png"  ></li>

    <li id="textdef">

      Golden-market.com 
       est un site français de jeux basé sur le principe de l'Instant Gagnant.
        Il permet de gagner  des cadeaux ( Voyage, Automobile, appareils photo, lecteurs MP3, ...). L'inscription au site est gratuite et
         les gains sont garantis. 
    </li>
  
  </ul>
    <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">FAQ</h4></li>
    <li><a href='/shop/about-contact' class="generic-anchor footer-list-anchor" itemprop="significantLink">Aide</a></li>
    <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">Le réglement</a></li>
    <li id='find-a-store'><a href='/shop/store-locator' class="generic-anchor footer-list-anchor" itemprop="significantLink">Principe</a></li>
  </ul>

  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Golden Market</h4></li>


    <li><a href='/Angels/cat/id/70' class="generic-anchor footer-list-anchor">Inscription</a></li>
    <li><a href='/Home-Decor/cat/id/64' class="generic-anchor footer-list-anchor">Connexion</a></li>
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
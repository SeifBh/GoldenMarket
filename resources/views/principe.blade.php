<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>


<title>Code non valide</title>
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
<script type="text/javascript" src="/js/typed.js"></script>
<script type="
text/javascript">
(function blink() { 
    $('.blink_me').fadeOut(500).fadeIn(500, blink); 
})();
</script>

<script>


      $(function(){
        $(".gag5").typed({
          strings: ["Code non valide."],
          typeSpeed: 20,
          backDelay: 3000,
                      startDelay: 1000,


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
        <div id="xx2" class="col-sm-12 "  ></br>
    </br></br></br>
    <center><span  class="gag">

 Comment jouer et gagner ?

Pour gagner le lot de votre choix, vous devez jouer avec un code de jeu.

Comment obtenir un code de jeu ? 

1. Composez le 08 99 23 02 52 (1,35 €/appel + 0,34 €/min)

2. Saisissez le code obtenu dans le pavé noir puis cliquez sur "Valider le code"

3. Découvrez le résultat instantanément.

Vous pouvez jouer autant de fois que vous le souhaitez.

 Comment ça marche ?

Pas de tirage au sort, pas de hasard, résultat instantané !

Cliquez-Gagnez.com fonctionne sur le principe de l’instant gagnant...

Le fonctionnement est simple : Le jeu est doté d'un lot et d'un nombre de parties nécessaires pour le gagner. A chaque partie jouée, le compteur du jeu diminue jusqu'à ce que le cadeau soit gagné.


Chaque participation se fait en validant un code obtenu par audiotel ou SMS. Vous savez instantanément si vous êtes le gagnant.

 Qu'est ce que Cliquez-Gagnez.com ?

Cliquez-Gagnez.com est un site français de jeux basé sur le principe de l'Instant Gagnant.

Il permet de gagner de l'argent et des cadeaux (Voitures, scooters, consoles de jeux, télévisions, ordinateurs, jeux vidéo, appareils photo, lecteurs MP3, ...).

L'inscription au site est gratuite et les gains sont garantis.

 Vous avez gagné ?

Lorsque vous avez gagné un des lots, vous êtes automatiquement redirigé vers une page vous demandant le code gagnant utilisé, puis vos coordonnées. Nous sommes prévenus en même temps que le gagnant.

A chaque fois qu'un lot est gagné, le compteur associé à ce jeu est remis à zéro. Si vous n'avez pas gagné, vous savez immédiatement combien de parties il reste avant de gagner. Vous pouvez donc rejouer stratégiquement !

 Connaitre le nombre de participations avant de gagner ?

Pour cela, il suffit de jouer une partie, un compteur s’affichera et vous indiquera en temps réel le nombre de code restant à jouer pour gagner.

 Pourquoi s'inscrire ?

Vous recevez des alertes quand un lot est sur le point d'être gagné pour tenter votre chance !

Vous savez quand il y a eu un gagnant.

 Je n'habite pas en France, puis-je jouer ?

Notre plateforme de jeux est réservée aux résidents français.

 Comment être certain que Cliquez-Gagnez.com est un site sérieux ?

Cliquez-Gagnez.com est enregistré au RCS de Blois sous le Numéro 503454175. Cliquez-Gagnez.com garantie l'envoi des gains. Le règlement du jeu a été déposé chez un huissier de justice :

SCP Treiber - Julien - Nonclercq - Regina - Laleure
1 rue du Chataignier
06400 CANNES
 <b></b></span>
</br></br>
<a class="btn btn-info" href="{{ URL::previous() }}">Retourner vers la page précedente</a>
</center>

    </div>

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
<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/reset.css">
<link rel="stylesheet" href="style/main.css">
<link href="lib/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/fresco.js"></script>
<script src="js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="style/fresco/fresco.css" />
<script src="lib/jquery.bxslider.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Gaming-gen</title>
<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(43.459238, 5.479023),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script><script type="text/javascript">
$(document).ready(function() {
    $(".content").css("display", "none");
 
    $(".content").fadeIn(350);
 
    $(".nav a").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $(".content").fadeOut(200, redirectPage);     
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
});
</script>
</head>
<body>

<!-- Modal -->
<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
					<div class="insider">
						<h1>LOGIN</h1><button onclick="window.location.replace('#');" class="insmodal btn btn-ins btn-insb icon-file"><span><a href="#">Créer un compte</a></span></button>
                    	<hr/>
                        <div class="awake">
                            <div class="user"><img src="img/user.png"><input form="Nom d'utilisateur" placeholder="Nom d'utilisateur"></div>
                            <div class="verrou"><img src="img/verrou.png"> <input form="Mot de passe" placeholder="Mot de passe"><button class="loupe goconnect" value="submit"><img src="img/goconnect.png"></button></div> 
                        </div>
                        <div class="mdp">
                        <a href="forgot.php">Mot de passe oublié?</a>
                        </div>
                    </div>
				
					<button class="md-close">X</button>
				
			</div>
		</div>
<!-- /Modal -->
<div class="welcomeuser">
<span class="user">
<a href="http://gaming-gen.fr/dev/component/users" data-modal="modal-1">Login</a>&nbsp;&nbsp;<a href="http://gaming-gen.fr/dev/component/users/?view=registration" data-modal="modal-1">Créer un compte</a>

</div>
<div class="conteneurgnral">
<section class="header">
			<div class="top grid grid-pad">
                <div class="logo col-4-12">
                <img src="img/logo.png">
                </div><!--logo-->
                    <div class="nav col-8-12">
                             <ul>
                                     <li><a href="index.php">Accueil</a></li>
                                     <li><a href="#">Tournois</a>
                                        <ul class="sousmenu">
                                        <li><a href="more.php">CS:GO</a></li>
                                           <li><a href="autres.html">Autres tournois</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="festival.html">Festival du Jeu</a></li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="partner.php">Partenaires</a></li>
                                    <li><a href="galerie.php">Galerie</a></li>
                                    <li><a href="asso.php">L'association</a>
                                     <ul class="sousmenu media">
                                     	<li><a href="asso.php">L'équipe</a></li>
                                        <li><a href="media.html">Press kit</a></li>
                                        </ul>
                                        </li>
                            </ul>
                    </div><!--nav-->
            </div><!--top--><ul class="bxslider">
                                      <li><img src="slide/Slider-Tournois-et-Festival_v3.jpg" /></li>
                                      <li><img src='slide/Slider-Tournois-et-Festival_v2.jpg' /></li>
                                   </ul>
</section><!--header-->
<section class="ddle">
        <div class="content grid grid-pad">
                    <div class="titrearticle col-9-12">
                                <h1><span>UNE &Eacute;QUIPE DE PASSIONN&Eacute;S</span></h1> 
                              
                    </div><!--titrearticle-->
                   			  <div class="articletxt col-9-12">
                             <h5>Passionnés par l’univers du Jeu dans son ensemble, nous sommes une bande de gens sympas.</h5>
                                          <br/>
                                            <h4>Notre 1er événement date de 2005 (CS Arena, 60 joueurs), mais l’association "loi 1901" a été créé officiellement en 2007, avec 9 membres.<br/> En 2015, la Gaming Generation c’est une quarantaine de membres (25% de demoiselles), de 18 à 50 ans, aux profils variés. Nous nous réunissons régulièrement pour préparer les événements, mais aussi -et surtout- autour d’un verre (#apero).<br/><br/>
La Gaming Gen recrute toutes sortes de compétences : événementiel, webdesign, admin. de tournois, dév., sourire d’enfer, snack, passionné de jeu (-vidéo ou pas)… Si l’aventure te tente, <a href="contact.php">contacte-nous.</a></h4>
                                            <div class="col-11-12">
                                             <br/><br/><h1 style="color:#000;float:left;">L'&Eacute;QUIPE</h1><hr class="titrehr"/>
                                                       <br/>
                                                       <br/>
                                                       <div class="trombicont">
                                                        <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Zo.png">
                                                          <figcaption>Zo<a href="#" class="poste">Président</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Je.png">
                                                          <figcaption>Jé<a href="#" class="poste">Admin.<br/>Réseaux</a>
                                                          </figcaption>
                                                          </figure>
                                                           <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Renaud.png">
                                                          <figcaption>Renaud<a href="#" class="poste">Admin.<br/>Réseaux</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Dav.png">
                                                          <figcaption>Dav<a href="#" class="poste">Responsable<br/>Orga. Générale</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Radouane.png">
                                                          <figcaption>Radouane<a href="#" class="poste">Responsable<br/>Orga. Générale</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Kamelou.png">
                                                          <figcaption>Kamel<a href="#" class="poste">Responsable<br/>Accueil</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Eddy.png">
                                                          <figcaption>Eddy<a href="#" class="poste">Responsable<br/>Accueil</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Lucas.png">
                                                          <figcaption>Lucas<a href="#" class="poste">Responsable<br/>Accueil</a>
                                                          </figcaption>
                                                          </figure>
                                                           <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Bikette.png">
                                                          <figcaption>Bikette<a href="#" class="poste">Resonsable Snack</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Del.png">
                                                          <figcaption>Del<a href="#" class="poste">Snack</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Milie.png">
                                                          <figcaption>Milie<a href="#" class="poste">Snack</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Lala.png">
                                                          <figcaption>Lala<a href="#" class="poste">Communication</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Powlp.png">
                                                          <figcaption>Powlp<a href="#" class="poste">Webdesigner</a>
                                                          </figcaption>
                                                          </figure>
                                                           <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Fred.png">
                                                          <figcaption>Fred<a href="#" class="poste">Webdesigner</a>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Mate.png">
                                                          <figcaption>Maté<a href="#" class="poste">Responsable<br/>Subventions</a>
                                                          </figcaption>
                                                          </figure>
                                                          
                                                          <figure class="trombi col-2-12">
                                                          <img src="img/equipe/Thibault.png">
                                                          <figcaption>Thibault G.<a href="#" class="poste">Responsable<br/>Partenaires</a>
                                                          </figcaption>
                                                          </figure>
                                                          
                                                         
                                                          </div>
                                                         </div>
                                                     
                                                                
                             </div><!--articletxt-->
                            							   
                                                            
                              <div class="hotfix col-3-12">
                                     <h6>RECHERCHER</h6>
                                             <div class="rechloupe">
                                                <input form="Recherche">
                                                <button class="loupe" value="submit"><img src="img/loupe.jpg"></button>
                                             </div><!--rechloupe-->
                                                 <div class="lastarticle">
                                                              <div class="stats"> <span class="csgoimg col-1-4"></span> <h3>COUNTER-STRIKE:GO</h3> <h4>30 Teams / 32 Slots</h4>
                                                             
                                                                <progress id="avancement" value="85" max="100"></progress><br/>
                                                                
                                                            <a href="inscrits.html">Voir les inscrits/équipes</a>
                                                            </div>
                                                           
                                                 </div><!--lastarticle-->
                                 <div class="surleforum">
                                 </div><!--surleforum-->
                             </div><!--hotfix-->
                                                    
                                                                
                      			
        </div><!--content-->
        										<div class="grid grid-pad">
                                               	    <div class="iconact col-6-12">
                                                        <span><a href="membres.php">Membres</a><img src="img/membres.gif"></span>
                                                        <span><a href="inscrits.html">Teams</a><img class="lazy" src="img/team.gif"></span>
                                                        <span><a href="galerie.php">Galeries</a><img src="img/galerie.gif"></span>
                                                        <span><a href="contact.php">Contact</a><img src="img/contact.gif"></span>
                                                        <span><a href="media.html">Media</a><img src="img/media.gif"></span>
                                                    </div><!--iconact-->
                                                    <div class="socialico push-right">
                                                        <span class="fbsoc col-3-12">
                                                        <a href="https://fr-fr.facebook.com/gaming.gen.lan" target="_blank"></a>
                                                        </span>
                                                        <span class="twisoc col-3-12">
                                                        <a href="https://twitter.com/gaminggenlan" target="_blank"></a>
                                                        </span>
                                                    </div><!--socialico-->
                                                </div><!--iconact-->
                                                <div class="pushfoot"></div>
                                                
                                                <footer>
                                                <div class="menufooter">
                                                <span class="ment">
                                                <a href="index.php">Accueil</a>
                                                <a href="asso.php">Qui sommes nous?</a>
                                                <a href="mentleg.php">Mentions légales</a>
                                                </span>
                                                </div>
                                                </footer><!--footer-->
                                                
</section><!--ddle-->
</div><!--conteneurgnral-->
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modalEffects.js"></script>
</body>
</html>

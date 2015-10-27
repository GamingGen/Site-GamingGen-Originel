<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/reset.css">
<link rel="stylesheet" href="style/main.css">
<link href="lib/jquery.bxslider.css" rel="stylesheet" />

<link rel="icon" href="img/favicon.ico" />
<link rel="icon" type="image/png" href="img/favicon.png" />
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
                                <h1><span>NOS PARTENAIRES</span></h1> 
                    </div><!--titrearticle-->
                   			  <div class="articletxt col-9-12">
                                                       <div class="partnerslot">
                                                       <h1 style="text-align:center;">VOUS MOURREZ D'ENVIE DE PARTICIPER A L'AVENTURE GAMING-GEN, <a href="contact.php" target="_blank">CONTACTEZ-NOUS!</a></h1>
                                                         <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/gardanne.png" alt="gardanneimg"></i>
                                                          <figcaption><h2><strong>Ville de gardanne</strong></h2><br/>
                                                          <h3>La municipalité ainsi que le Service Jeunesse de Gardanne sont nos partenaires depuis nos premiers pas.<br/>
Grâce à leur aide logistique, matériel et humaine la Gaming Gen a pu se développer.</h3><br/>
                                                          <h3><a href="http://asso.ville-gardanne.fr/index.php" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/hw.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Hardware Informatique</strong></h2><br/>
                                                          <h3>L’expert en informatique, image & son à Gardanne.<br/> L’un de nos plus précieux partenaires, qui apporte notamment de nombreux lots pour les vainqueurs des tournois.
</h3><br/>
                                                          <h3><a href="http://www.hardware-informatique.fr/" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                           <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/discount.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Discount PC serveur</strong></h2><br/>
                                                          <h3>Merci à DISCOUNT PC SERVEUR pour nous prêter l'ensemble du matériel réseau et des PC serveurs nécessaires à la gestion des tournois.
</h3><br/>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/qpad.jpg" alt="hardware"></i>
                                                          <figcaption><h2><strong>Qpad</strong></h2><br/>
                                                          <h3>Qpad est une marque de matériel gaming connue et reconnue par tous les gamers, qui n'hésite pas à soutenir le mouvement e-Sport et les tounois de jeux-vidéo.<br/>
A l'occasion de la GG4, vous pourrez gagner des tapis Qpad spécial Gaming Gen !
</h3><br/>
                                                          <h3><a href="http://qpad.com/" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                         <figure class="partnersloteach col-6-12">
            <i><img src="img/antec.png" alt="hardware"></i>
            <figcaption><h2><strong>Antec</strong></h2><br/>
                                                          <h3>Antec est le premier constructeur de composants et accessoires informatiques d’assemblage (boitiers PC, alimentations, ventilateurs…).<br/>
Antec fournit des lots pour les vainqueurs du tournoi CS GO notamment.
</h3><br/>
                                                          <h3><a href="http://www.antec.com/index.php" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/gigabyte.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Gigabyte</strong></h2><br/>
                                                          <h3>Gigabyte est le leader des innovations high-tech sur le marché des cartes mères, cartes graphiques et autres composants PC.<br/>
Gigabyte fournit des lots pour les vainqueurs du tournoi CS GO notamment.
</h3><br/>
                                                          <h3><a href="http://www.gigabyte.fr/?f=g" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/deco.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Deco n Pix – Retro Gaming</strong></h2><br/>
                                                          <h3>Deco n Pix proposera un atelier mêlant le graffiti au retro-gaming, le tout de manière très ludique : raconter l’histoire de l’évolution technologique du jeu-vidéo, du 8 au 64 bit, de la 2D à la 3D.<br/>
Un graff sur planche en bois, réalisé pendant la GG4, sera à gagner lors d’un tournoi retro-gaming.
</h3><br/>
                                                          <h3><a href="https://www.flickr.com/photos/127513127@N02/sets" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                           <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/masters.jpg" alt="hardware"></i>
                                                          <figcaption><h2><strong>Masters du jeu vidéo</strong></h2><br/>
                                                          <h3>Organisé par LAN Alliance, le circuit des Masters Français du Jeu-Vidéo permet aux joueurs de concourir toute la saison lors de tournois homologués, comme la GG4. Ce championnat aboutit à une finale nationale qui sacre les champions de France.
</h3><br/>
                                                          <h3><a href="http://www.mastersjeuvideo.org/event/gaming-gen-4/view" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/ludo.jpg" alt="hardware"></i>
                                                          <figcaption><h2><strong>Ludothèque Gardanne</strong></h2><br/>
                                                          <h3>La Ludothèque-Puzzle de Gardanne propose aux familles, enfants, adolescents et personnes âgées de s'adonner aux 
joies du jeu sur son grand espace dédié à la GG4.
</h3><br/>
                                                          <h3><a href="http://www.ville-gardanne.fr/Ludotheque-Puzzle" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/boutgeek.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>La Boutique du Geek</strong></h2><br/>
                                                          <h3>Situé en centre-ville de Marseille, la Boutique du Geek propose des produits et gadgets originaux, de la robotique au modélisme, en passant par l'informatique, elle comblera toutes les attentes du geek !<br/>
La BdG offre plusieurs lots pour les tournois de la GG4, ainsi qu’une démonstration de drones.
</h3><br/>
                                                          <h3><a href="https://www.facebook.com/laboutiquedugeek/timeline" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/guilde.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>La Guilde des Joueurs</strong></h2><br/>
                                                          <h3>Association Gardannaise qui promeut les jeux de rôle, de figurines, de plateaux…
Lors de la GG4, la GdJ organisera un grand tournoi Splendor ainsi que de l’initiation et des démonstrations.
</h3><br/>
                                                          <h3><a href="http://www.lgdj.org/" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/oren.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>La Boutique d'Oren</strong></h2><br/>
                                                          <h3>Spécialiste des jeux de plateau, de réflexion et d'ambiance, Oren saura vous proposer des jeux adaptés à vos envies.
Lors de la GG4, a BdO organisera 2 tournois Magic et participera à la dotation du tournoi Splendor.
</h3><br/>
                                                          <h3><a href="http://www.lesjeuxdoren.com/" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/azur.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Azur Games</strong></h2><br/>
                                                          <h3>Association spécialisée dans les jeux musicaux, l'association Azur Games sait mettre l'ambiance.
Un stand et 3 jeux durant la Gaming Gen 4, ainsi qu'un tournoi et de nombreuses surprises.
</h3><br/>
                                                          <h3><a href="http://www.azurgames.fr/" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/esupcom.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Ecole EsupCom</strong></h2><br/>
                                                          <h3>L'école EsupCom Aix forment les futurs communiquants, publicitaires et artistes de demain.
Créée par les étudiants de l'école, une exposition sur le thème du Jeu sera mise en place durant la GG4.
</h3><br/>
                                                          <h3><a href="http://www.esupcom.com/presentation-ecole-communication-aix.htm" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/confiserie.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Confiserie GAIOR</strong></h2><br/>
                                                          <h3>Cette confirserie ambulante gérée par deux gamers saura faire saliver vos papilles.
La confiserie GAIOR participera également à la dotation du tournoi CS GO.
</h3><br/>
                                                          <h3><a href="#" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/awale.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Awale PACA</strong></h2><br/>
                                                          <h3>Cette association fait la promotion de l'Awale, ce magnifique jeu de plateau africain.
Au programme durant la Gaming Gen 4 : initiations et tournois, avec plateaux d'Awale à gagner.
</h3><br/>
                                                          <h3><a href="https://sites.google.com/site/lawaleenpaca/home" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                           <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/midiloisirs.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Midi loisirs</strong></h2><br/>
                                                          <h3>Midi Loisirs, le spécialiste des animations gonflables de la région, viendra à la Gaming Gen 4 avec 3 animations pour votre plus grand plaisir : machine à pop-corn, taureau mécanique et combats de sumos !
</h3><br/>
                                                          <h3><a href="http://kaiman-multimedia.com/kidsball/index.php" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                          <figure class="partnersloteach col-6-12">
                                                          <i><img src="img/ravens.png" alt="hardware"></i>
                                                          <figcaption><h2><strong>Ravensburger</strong></h2><br/>
                                                          <h3>Spécialiste de jeux pour enfants, jeux éducatifs, jeux de société... La renommée de Ravensburger n'est plus à faire !
De nombreux jeux Ravensburger en accès libre seront disponibles et certains seront même à gagner...
</h3><br/>
                                                          <h3><a href="https://www.ravensburger.com/fr/start/index.html" target="_blank">Site du partenaire</a></h3>
                                                          </figcaption>
                                                          </figure>
                                                         
                                                          
                                                       
                                                                                                                 
                                                          
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

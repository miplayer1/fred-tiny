<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>

    <title>Fred petits travaux et rénovations</title>  
    <meta name="publisher" content="cooldev.xyz">
    <meta name="description" content="Un professionnel fiable et proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison" />
	 <meta name="keywords" content="petits travaux Ceyreste, rénovations, remises en état, bricolage, La Ciotat, Aubagne" />	 
	 <link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16" />    
    <?php
	include('private/views/head.php');
?>
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Fred petits travaux et rénovations - Un professionnel proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison" />
	<meta property="og:site_name" content="Fred travaux et rénovations">
	<meta property="og:url" content="http://projets.cooldev.xyz/fred-tiny" />
	<meta property="og:description" content="Un professionnel proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://projets.cooldev.xyz/fred-tiny/assets/og-img.png" />
  </head>
  <body >

    <?php
      include('private/views/nav.php');
    ?>

    <header>
      <div class="show-on-med-and-up" id="video-header">
        <div id="video-overlay"></div>
        <video autoplay loop muted><source src="http://localhost/fred-tiny/assets/video-bricolage.mp4" type="video/mp4" alt="Petits travaux, remise en état, bricolage"></video>
      </div>
    <div class="content">
        <div class="row">
          <div class="col s12 center-align">
				<img class="responsive-img" src="assets/logo-fred-petits-travaux.png" alt="Proche de vous et professionnel pour tous vos petits travaux, rénovation et bricolage" width="180px">
          </div><!--LOGO-->
          <div class="col s12 tagline">
            <h1 class="center-align white-text">
              Pas le temps ? Pas les outils ? Faites appel à Fred !<br><br>
              <span class=" blue-grey darken-1">
                <ul>
                  <li class="display">Installer une cuisine</li>
                  <li>Changer un robinet</li>
                  <li>Changer un interrupteur</li>
                  <li>Peindre des volets</li>
                  <li>Poser une tringle</li>
                  <li>Installer une salle de bain</li>
                  <li>Poser un parquet</li>
                  <li>Relooker une pièce</li>
                  <li>Poser une terrasse en bois</li>
                  <li>Poser un luminaire</li>
                  <li>Changer une prise</li>
                  <li>Installer un WC</li>
                  <li>Poser un revêtement mural</li>
                  <li>Installer un abri de jardin</li>
                  <li>Et plus encore...</li>
                </ul>
              </span>
            </h1>
            <div class="separator col s4 offset-s4 divider">
            </div><!--DIVIDER-->
          </div><!--TAGLINE-->
                    <div class="col s12 social center-align">
            <span class="white-text"><i class="material-icons">&#xE325;</i><br>+336 12 34 31 70</span>
           </div>
           <div class="col s12 social center-align"><span class="white-text"><i class="material-icons">&#xE88A;</i><br>J' interviens sur<br>Ceyreste, La Ciotat, Aubagne et alentours</span></div>
			</div>
			<div class="col s12 center-align">
				                 <a href="https://www.facebook.com/fred.renovationstravaux" target="_blank" ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook"></a>
			</div>
         <div class="fixed-action-btn horizontal">
    			<a href='tel:33684205036' class="btn-floating btn-large red"><i class="material-icons">&#xE325;</i></a>
   			 <ul>
      			<li>
  						<div class="chip">
   						+336 12 34 31 70
  						</div>
        			</li>
    			</ul>
 			 </div>
        </div><!--ROW-->
      </div><!--CONTENT-->

    </header><!--HEADER-->
	<section id="section1" class="row scrollspy">
    <div class="col s12 m8 offset-m2 white-text">
    <h2 class="center-align blue-grey-text darken-1-text">Choisir n'est pas simple. Mais je peux vous aider ;)</h2>
    </div>
    <div class="separator col s2 offset-s5 divider"></div>

	<?php
	include('private/views/cards-add.php');
  ?>
	</section><!--SECTION 1-->

<section id="section2" class="scrollspy blue-grey darken-1">
	 <div class="container">
	 	<div class="row">
      	<div class="col s12 m8 offset-m2 white-text">
        <h2 class="center-align white-text">C'est eux qui le disent :)</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div class="col s12 center-align">
          <div class="slider">
            <ul class="slides">
              <?php

                include 'private/src/testimonials.php';
                foreach ($testimonials as $key => $value) {
              ?>
              <li>
                <div class="caption center-align">
                  <h3 class="white-text"><?= $key ?></h3>
                  <blockquote class="white-text"><?= $value ?></blockquote>
                </div>
              </li>
              <?php
                }
               ?>
            </ul>
          </div>
        </div>
       </div>
      </div>
</section><!--SECTION 2-->

<section id="contact" class="scrollspy">
	<div class="container">
		<div class="row">	    
	    <div class="col s12 m8 offset-m2">
	      <h2 class="blue-grey-text darken-1-text center-align">Parlez-moi de votre projet</h2>
	    </div>
	   
	      <div class="separator col s2 offset-s5 divider"></div>
	      </div>
	  <div class="row">
	    <form class="col s12" action="#contact" method="POST">
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">account_circle</i>
	          <input placeholder="John Doe" id="name" name="nom" type="text" class="validate" required>
	          <label for="name">Votre nom</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">email</i>
	          <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate" required>
	          <label for="email">Votre adresse mail</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">subject</i>
	          <input placeholder="Objet de votre message" id="subject" name="objet" type="text" class="validate" required>
	          <label for="subject">Sujet</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">textsms</i>
	          <textarea placeholder="Votre message" id="message" name="message" type="text" class="materialize-textarea" required></textarea>
	          <label for="message">Votre message</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col s12 center-align">
	          <button class="btn waves-effect waves-light cyan darken-3 pulse" id="submit" type="submit" name="submit">Envoyer
	            <i class="material-icons right">send</i>
	          </button>
	        </div>
	      </div>
	      <div id="feedback">
	        <?php echo $feedback; ?>
	      </div>
	    </form>
		</div>
	  </div>
	</section><!--SECTION CONTACT FORM-->
   <footer class="page-footer blue-grey darken-1">
          <div class="container  ">
            <div class="row ">
                            <div class=" col m4 s12 center-align">
                <h5 class="center-align white-text">Contacts</h5>
                <div class="separator col s2 offset-s5 divider"></div>
                <div class="col s12  center-align">
               	 <p class="center-align grey-text text-lighten-4">fred.travauxrenovations@gmail.com</p>
                </div>
                <div class="col s12 m12 center-align ">
               	<p class="center-align grey-text text-lighten-4">06 12 34 31 70</p>
                </div>
              </div>
              <div class="center-align social col m4  s12">
               <h5 class="white-text">Réseaux sociaux </h5>

               <div class="separator col s2 offset-s5 divider"></div>
                <div class="col  s12 center-align">
                 <a href="https://www.facebook.com/fred.renovationstravaux" target="_blank" ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook"></a>

                </div>
              </div>
              <div class="center-align col m4 s12">
                <h5 class="white-text">Adresse</h5>
                <div class="separator col s2 offset-s5 divider"></div>
               <div class="col s12"><p class="grey-text text-lighten-4">Quartier des Camegiers<br>13600 Ceyreste</p></div>

               </div><!--CONTACT MAIL-->

            </div>
          </div>
          <div class="footer-copyright grey-text ">
            <div class="container ">
           <span class="white-text">CC BY-NC-SA 4.0 - 2017 /</span> <a class="white-text" href="http://www.cooldev.xyz" target="_blank">La Team Cooldev</a>
            <a class="modal-trigger right white-text" href="#modal1" >Mentions légales</a>
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h3>SIRET</h3>
                  <p>0000 0000 0000 </p>
                  <h3>Responsable de la publication :</h3> <p>Fred xxxxxx</a></p>
                  <h3>Hébergement :</h3>
                  <p><a href="https://gandi.net">GANDI SAS</a>, Société par Actions Simplifiée au capital de 300.000€ ayant son siège social au 63-65 boulevard Massena à Paris (75013) FRANCE, immatriculée sous le numéro 423 093 459 RCS PARIS N° TVA FR81423093459 Téléphone : +33.(0) 1 70.37.76.61 .</p>
                  <h3>Gestion des données personnelles :</h3>
                  <p>Votre vie privée est très importante pour nous. Pour connaître le trafic sur ce site internet, Nous utilisons <a href="https://piwik.org">Piwik</a>. Piwik est une solution d’analytics qui respecte votre vie privée conformément aux recommandations de la CNIL et ne demande aucune déclaration préalable.</p>
                 </div>
                <div class="modal-footer ">
                  <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
                </div>
              </div><!--MODAL-->
            </div>
          </div><!--COPYRIGHT-->
        </footer><!--FOOTER-->
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js" ></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>

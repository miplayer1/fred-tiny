<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    
    <title>[LAB]4Makers] | Collectif engagé dans la transition numérique</title>
    <meta name="keywords" content="transition numérique, coding goûter, fablab, makerspace, outils numériques" />
    <meta name="publisher" content="[LAB]4Makers">
    <meta name="description" content="Nous souhaitons mettre en lien les acteurs numériques de la Région PACA afin de permettre l'acquisition, l'appropriation et le partage de connaissances dans le domaine des technologies numériques " />
    <?php
	include('private/views/head.php');
?>
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="[LAB]4Makers] | Collectif engagé dans la transition numérique" />
	<meta property="og:site_name" content="[LAB]4Makers">
	<meta property="og:url" content="http://www.labprovence.xyz/" />
	<meta property="og:description" content="Nous souhaitons mettre en lien les acteurs numériques de la Région PACA afin de permettre l'acquisition, l'appropriation et le partage de connaissances dans le domaine des technologies numériques" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.labprovence.xyz/assets/og-img.png" />
  </head>
  <body >
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
        <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#section1">Activités</a></li>
          <li><a href="#section2">Qui sommes-nous ?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-menu">
          <li><a href="#section1">Activités</a></li>
          <li><a href="#section2">Qui sommes-nous ?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
      </nav>
    </div><!--NAV-->
    <header>
    <div class="content">
        <div class="row">
        <div class="col s12 center-align" id="video-header">
	        <video autoplay loop><source src="http://localhost/mpaw-tiny/assets/video-bricolage.mp4" type="video/mp4" alt="video"></video>
        </div>
          <div class="col s12 center-align">
				<img class="responsive-img" src="assets/logoboite.svg" alt="Logo" width="">
          </div><!--LOGO-->
          <div class="col s12 ">
            <h1 class="center-align">
            </h1>
            <div class="separator col s4 offset-s4 divider">
            </div><!--DIVIDER-->
          </div><!--TAGLINE-->

          <div class="col s12 social center-align">
            <a href="https://www.facebook.com/labprovence" target="_blank"><img class="responsive-img" src="assets/logo-fb.png" alt="Lien vers facebook"></a>
            <a href="https://twitter.com/lab_lp" target="_blank"><img class="responsive-img" src="assets/logo-twitter.png" alt="Lien vers twitter"></a>
          </div><!--SOCIAL-->
        </div><!--ROW-->
      </div><!--CONTENT-->

    </header><!--HEADER-->
	<section id="section1" class="scrollspy">
	<?php
	include('private/views/cards-add.php');
?>
	</section><!--SECTION 1-->

<section id="section2" class="scrollspy">
	 <div class="container">
	 	<div class="row">
      	<div class="col s12 m8 offset-m2 white-text">
        <h2 class="center-align">Le collectif [LAB]4Makers</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div class="col s12 center-align">
        	<p class="white-text">
        		Le collectif se compose de makers, développeurs, programmeurs... qui souhaitent mettre en lien l'univers makers et les gens. Il se passe des choses fascinantes dans les Fablabs, mais ouvrir leur porte est parfois intimidant. Pourquoi ? Peut être parce qu'on ne comprend pas bien ce qu'on y fait.
        		<br><br>Le collectif se fixe comme objectif de permettre l'acquisition, l'appropriation et le partage de connaissances dans le domaine des technologies numériques en région PACA avec, pour le moment, <a href="coding-gouter.php">des coding goûters et des ressources pour animer son atelier</a> et <a href="carte.php"> une carte collaborative</a> recensant les fabslabs et les actions en lien avec notre objet.</p>

        </div>
       </div>
      </div>

</section><!--SECTION 2-->

<section id="contact" class="container scrollspy">
	    <div class="col s12">
	      <h2 class="dark-green center-align">Contactez-nous !</h2>
	      <div class="col s12"></div>
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
	          <button class="btn waves-effect waves-light cyan darken-3" id="submit" type="submit" name="submit">Envoyer
	            <i class="material-icons right">send</i>
	          </button>
	        </div>
	      </div>
	      <div id="feedback">
	        <?php echo $feedback; ?>
	      </div>
	    </form>

	  </div>
	</section><!--SECTION CONTACT FORM-->
   <footer class="page-footer">
          <div class="container  ">
            <div class="row ">
              <div class=" col  s12 center-align">

              <blockquote>" La seule façon de comprendre une nouvelle culture et de nouveaux comportements est de devenir natif. Devenir natif est un processus d’observation, d’apprentissage et d’approfondissement, pratiqué tel un anthropologiste, impliqué directement sur le terrain et en participant étroitement avec ses hôtes à leurs cultures. "

                                                             <br>Brian Solis – Digital Analyst
                                                                                         </blockquote>
              </div><!--CONTACT MAIL-->

            </div>
          </div><!--CITATION-->
          <div class="footer-copyright grey-text ">
            <div class="container ">
           <span class="white-text">CC BY-NC-SA 4.0 - 2017 /</span> <a class="white-text" href="http://www.cooldev.xyz" target="_blank">La Team Cooldev</a>
            <a class="modal-trigger right white-text" href="#modal1" >Mentions légales</a>
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h3>SIRET</h3>
                  <p>Association en cours de création </p>
                  <h3>Responsable de la publication :</h3> <p>Mylène Hiezely pour le collectif</a></p>
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

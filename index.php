<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>

    <title>Fred petits travaux et rénovations - Un professionnel proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison</title>
    <meta name="publisher" content="Cooldev">
    <meta name="description" content="Un professionnel fiable et proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison" />
    <?php
	include('private/views/head.php');
?>
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Fred petits travaux et rénovations - Un professionnel proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison" />
	<meta property="og:site_name" content="Fred travaux et rénovations">
	<meta property="og:url" content="http://www.labprovence.xyz/" />
	<meta property="og:description" content="Un professionnel proche de vous pour vos petits travaux - vos remises en état - votre bricolage dans la maison" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.labprovence.xyz/assets/og-img.png" />
  </head>
  <body >

    <?php
      include('private/views/nav.php');
    ?>

    <header>
      <div class="show-on-med-and-up" id="video-header">
        <div id="video-overlay"></div>
        <video class="center" autoplay loop muted poster="http://projets.cooldev.xyz/fred-tiny/assets/poster-fred-tiny.png"><source src="http://projets.cooldev.xyz/fred-tiny/assets/video-bricolage.mp4" type="video/mp4" alt="Petits travaux, remise en état, bricolage"></video>
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
    <h2 class="center-align blue-grey-text darken-1-text">Je peux vous aider</h2>
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

<?php 
  include('private/views/contact-form.php');
  include('private/views/footer.php');
?>

  </body>
</html>

<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
<?php
	include('private/views/head.php');
?>
    <title></title>
    <meta name="keywords" content="" />
    <meta name="publisher" content="">
    <meta name="description" content="" />
   <!--METAS-->

	<meta property="og:title" content="[LAB]4Makers] | Ressources pour coding goûter" />
	<meta property="og:site_name" content="[LAB]4Makers">
	<meta property="og:url" content="http://www.labprovence.xyz/coding-gouter.php" />
	<meta property="og:description" content="Nous mettons ici toutes les ressources qui pourraient être utile si vous souhaitez initier des enfants à la programmation" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.labprovence.xyz/assets/og-img.png" />  
  <!-- Open Graph Meta Tags -->
  </head>
  <body>
<?php
	include('private/views/nav.php');
?>
		<header>
			<div class="content" id="content-header-page">
		        <div class="row">
		          <div class="col s12 center-align">
						<img class="responsive-img" src="assets/" alt="Logo" width="">
		          </div><!--LOGO-->
		          <div class="col s12 ">
		            <h1 class="center-align">
		            </h1>
		            <div class="separator col s4 offset-s4 divider">
		            </div><!--DIVIDER-->
		          </div><!--TAGLINE-->
		          <div class="col s12 social center-align">
		            <a href="https://www.facebook.com/" target="_blank"><img class="responsive-img" src="assets/logo-fb.png" alt="Lien vers facebook"></a>
		            <a href="https://twitter.com/" target="_blank"><img class="responsive-img" src="assets/logo-twitter.png" alt="Lien vers twitter"></a>
		          </div><!--SOCIAL-->
		        </div><!--ROW-->
		      </div><!--CONTENT-->
		</header><!--HEADER-->
		<section id="section-1" class="scrollspy">
			 <div class="container">
			 	<div class="row">
		      	<div class="col s12 m8 offset-m2 white-text">
		        <h2 class="center-align"></h2>
		        </div><!--TITRE SECTION 1-->
		        <div class="separator col s2 offset-s5 divider"></div>
		        <div class="col s12 center-align">
		        	<p class="white-text">
		        	</p>
		        </div><!--TEXTE-->
		       </div><!--ROW-->
		      </div><!--CONTAINER-->
		</section><!--SECTION 1-->		
		<section id="section-2" class="scrollspy">
			 <div class="container">
			 	<div class="row">
		      	<div class="col s12 m8 offset-m2 white-text">
		        <h2 class="center-align"></h2>
		        </div><!--TITRE SECTION 2-->
		        <div class="separator col s2 offset-s5 divider"></div>
		        <div class="col s12 center-align">
		        	<p class="white-text">
		        	</p>
		        </div><!--TEXTE-->
		       </div><!--ROW-->
		      </div><!--CONTAINER-->
		</section><!--SECTION 2-->
<?php
	include('private/views/contact-form.php');
?>
<?php
	include('private/views/footer.php');
?>

	</body>

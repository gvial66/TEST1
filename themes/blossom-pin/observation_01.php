<?php
/*
Template Name: observation_01
*/
?>

<?php
get_header();			//Affiche l’entête
if (have_posts()) :		//teste s’il y a des posts (page, articles, …)
   while (have_posts()) :	//tant qu’il y a des posts
      the_post();		//récupère le post
      the_content();		//afficher le contenu
   endwhile;			//fin du tant que
endif;				//fin du si


Echo ‘<div class="contenu_oiseau">’;
	include("Oiseau/Observation.php");
echo ‘</div>’ ;


get_sidebar();			//Affiche la barre latérale
get_footer(); 			//Affiche le pied de page
?>
<?php
/*
Template Name: groupe_01
*/
?>

<?php
get_header();			//Affiche l’entête
if (have_posts())		//teste s’il y a des posts (page, articles, …)
{
   while (have_posts()) //tant qu’il y a des posts
   {
      the_post();		//récupère le post
      the_content();		//afficher le contenu
   }			//fin du tant que
}				//fin du si


Echo "<div class='contenu_oiseau'>";
	include("oiseau/groupe.php");
echo '</div>';


get_sidebar();			//Affiche la barre latérale
get_footer(); 			//Affiche le pied de page
?>
<?php
/*
Template Name: accueil
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Fluida
 */

get_header();
?>
<div class="bandeau">
	<h1 class="bandeau_titre">Patur'Ain</h1>
	<p class="bandeau_desc"><?php the_field('bandeau_desc'); ?></p>
	<img src="<?php the_field('bandeau_img'); ?>" alt="image bandeau" class="bandeau_img" />
</div>

<div class="valeurs">
	<div>
		
		<div class="image1" style="background-image: url('<?php the_field('valeur1'); ?>');" alt="valeur 1" /></div>
		<p class="p1"><?php the_field('valeurs_desc1')?></p>
	</div>
	<div>
		<div class="image2" style="background-image: url('<?php the_field('valeur2'); ?>');" alt="valeur 1" /></div>
		<p class="p2"><?php the_field('valeurs_desc2')?></p>
	</div>
	<div>
		<div class="image3" style="background-image: url('<?php the_field('valeur3'); ?>');" alt="valeur 1" /></div>
		<p class="p3"><?php the_field('valeurs_desc3')?></p>
	</div>
	<div>
		<div class="image4" style="background-image: url('<?php the_field('valeur4'); ?>');" alt="valeur 1" /></div>
		<p class="p4"><?php the_field('valeurs_desc4')?></p>
	</div>
</div>


<div class="lastnewstitle">
<h3 class="lastnewsh3">Dernières actualités</h3>
</div>

<div class="lastnews">
<?php echo do_shortcode( '[the-post-grid id="202" title="Dernières actus"]' ); ?>
</div>

<?php
get_footer();

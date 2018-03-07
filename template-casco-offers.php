<?php
/**
 * Template Name: Casco Offers
 *
 */

if ( !is_user_logged_in()){ wp_redirect( '/login' ); exit; }

get_header(); ?>

<?php get_template_part('pageheader'); ?>

<div class="site-body site-pad">
	<div class="site-container">
        
		<div id="primary" class="content-area">
	
			<div class="primary_menu">

				<div class="vertical-menu">
					<ul>
						<li><a href="loans-offers">Кредити</a></li>
						<li><a href="deposits-offers">Депозити</a></li>
						<li><a href="cards-offers">Карти</a></li>
						<li><a href="auto-liability-offers">Автоодговорност</a></li>
						<li><a href="travel-insurance-offers">Патничко Осигуруванје</a></li>
						<li><a href="casco-offers" class="selected">Каско Осигуруванје</a></li>
						<li><a href="home-insurance-offers">Домаќинско Осигуруванје</a></li>
						<li><a href="life-insurance-offers">Животно Осигуруванје</a></li>							
					</ul>		
               </div>

			 </div>
			 <div class="primary_content">
             
             <!--Content from dashboard starts here --> 
			 	<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
				
			   <?php endwhile; // end of the loop. ?>
            <!--Content from dashboard ends here -->  


			 </div>
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div>
</div>
<?php get_footer(); ?>

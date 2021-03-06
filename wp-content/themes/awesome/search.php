<?php 
/* 	Awesome Theme's Search Page
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.0
*/

get_header(); ?>
<div id="container" >
	<?php if (have_posts()) : ?>
	<div id="content" class="searchinfo">
        <h1 class="page-title fa-search-plus"><?php __('SEARCH RESULTS', 'awesome'); ?></h1>
		<?php $counter = 0; global $more; $more = 0; ?>
		<?php while (have_posts()) : the_post();
			if($counter == 0) { 
				$numposts = $wp_query->found_posts; // count # of SEARCH RESULTS ?>
				<h3 class="arc-src"><span><?php __('Search Term:', 'awesome');?> </span><?php the_search_query(); ?></h3>
				<h3 class="arc-src"><span><?php __('Number of Results:', 'awesome');?> </span><?php echo $numposts; ?></h3><br />
				<?php } //endif ?>
			
            	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<div class="post-container">
 						<div class="fpthumb"><?php the_post_thumbnail('awesome-fpage-thumb'); ?></div>
        				<div class="entrytext">
            				<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
        					<div class="content-ver-sep"> </div>
							<?php awesome_content(); ?>
        				</div>
            
        				<div class="clear"> </div>
            			<div class="up-bottom-border">
            				<?php  wp_link_pages( array( 'before' => '<div class="page-link genericon-document"><span>' . '' . '</span>', 'after' => '</div><br/>' ) ); 
            				awesome_post_meta();
						?>
						</div>
					</div>
				</div>
				
		<?php $counter++; ?>
 		
		<?php endwhile; ?>
        <?php awesome_page_nav(); ?>
        
		</div>	
		<?php get_sidebar(); ?>
        <?php else: ?>
		<?php awesome_not_found(); ?>
	<?php endif; wp_reset_query();?>
</div>	
<?php get_footer(); ?>
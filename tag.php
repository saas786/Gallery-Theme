<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Evo
 * @since Evo 1.0
 */

get_header(); ?>

  <div id="container" class="cf">

    <div id="content">

	    <h1 class="tag-title"><?php _e("Tag Archive:","evo"); ?> <?php single_tag_title(); ?></h1>

      <div id="masonry">

        <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; else: ?>

        <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

      </div><!-- /#masonry -->

    </div><!-- /#content -->

    <?php evo_navigation_below(); ?>

	</div><!-- /#container -->

<?php get_footer() ?>
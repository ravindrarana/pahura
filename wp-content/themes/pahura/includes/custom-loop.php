<?php
/**
 * Simplifies the WordPress loop.
 *
 * @param WP_Query|WP_Post[] $iterable
 *
 * @return Generator
 */
function wp_loop( $iterable = null ) {

   if ( null === $iterable ) {
      $iterable = $GLOBALS['wp_query'];
   }

   $posts = $iterable;
   if ( is_object( $iterable ) && property_exists( $iterable, 'posts' ) ) {
      $posts = $iterable->posts;
   }

   if ( ! is_array( $posts ) ) {
      throw new \InvalidArgumentException( sprintf( 'Expected an array, received %s instead', gettype( $posts ) ) );
   }

   global $post;

   // Save the global post object so we can restore it later
   $save_post = $post;

   try {

      foreach ( $posts as $post ) {
         setup_postdata( $post );
         yield $post;
      }

   } finally {

      wp_reset_postdata();

      // Restore the global post object
      $post = $save_post;

   }

}
?>
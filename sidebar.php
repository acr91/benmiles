<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Ben_Miles
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="sidebar">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

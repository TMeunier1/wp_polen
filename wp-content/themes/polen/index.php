<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage polen
 * @since polen 0.000a
 */

get_header(); ?>

<main>
    <?php
    $categories = get_categories();

    foreach ($categories as $cat) {
        $posts = get_posts(array('category_name' => $cat->name));
        echo '<h3>'.$cat->name.'</h3>';
        foreach ($posts as $post) {
            echo get_the_post_thumbnail();
            echo get_the_title();
        }}
    ?>

</main>

<?php get_footer(); ?>

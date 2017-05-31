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
    <div class="container" id="externalLink">
        <div class="row">
            <div class="col-xs-4">
                <a href="#">
                    <img src="wp-content/uploads/img/pep8.png" alt="">
                    <h2>Pépinière d'entreprises</h2>
                </a>
                <p>Hébergement des entreprises innovantes du département</p>
                <a href="#">Infos »</a>
            </div>
            <div class="col-xs-4">
                <a href="#">
                    <img src="wp-content/uploads/img/tic8.png" alt="">
                    <h2>Centre de ressources TIC</h2>
                </a>
                <p>Un espace dédié aux nouvelles technologies pour les entreprises</p>
                <a href="#">Infos »</a>
            </div>
            <div class="col-xs-4">
                <a href="#">
                    <img src="wp-content/uploads/img/tele8.png" alt="">
                    <h2>Le télécentre SoLozère</h2>
                </a>
                <p>Un équipement au services des télétravailleurs</p>
                <a href="#">Infos »</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

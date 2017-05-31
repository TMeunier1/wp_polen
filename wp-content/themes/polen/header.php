<?php
/**
 * @package WordPress
 * @subpackage polen
 * @since Polen 0.000a
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css">
	<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="images">
            <div class="slider">
                <img src="http://polen-mende.com/wp-content/uploads/2013/05/polen.jpg" alt="polenbuilding" id="polenbuilding">
            </div>
            <div id="logopolen">
                <img src="http://polen-mende.com/wp-content/uploads/2013/02/cropped-cropped-cropped-polen21.png" alt="logopolen">
            </div>
            <div  id="lozdev">    
                <img src="http://polen-mende.com/images/bandeau-blanc.png" alt="logolozeredevl">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">PRÉSENTATION</a></li>
                <li><a href="#">PÉPINIÈRE</a></li>
                <li><a href="#">CENTRE DE RESSOURCES</a></li>
                <li><a href="#">TÉLÉCENTRE</a></li>
                <li><a href="#">MEDIA</a></li>
                <li><a href="#">AGENDA</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
    </header>

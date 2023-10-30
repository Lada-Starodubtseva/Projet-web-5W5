<section class="enseignants">
    <h1> ENSEIGNANTS</h1>
<?php 
wp_nav_menu(array(
    "menu"=>"professeur",
    "container" => "nav"
));
?>
<?php echo do_shortcode('[em_profs]'); ?>
</section>
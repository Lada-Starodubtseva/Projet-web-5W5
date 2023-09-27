<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
    <section class="blocflex">
        <?php 
            wp_nav_menu(array(
                "menu"=>"cours",
                "container"=>"nav"
            ));
         
            get_template_part("templates-parts/enseignants");
            get_template_part("templates-parts/projets");
        ?>      

    </section>
</main>
<?php get_footer(); ?>
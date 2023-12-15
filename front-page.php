
<?php get_header(); ?>
<main>

    <body>

        <section class="accueil">
            <div class="grid1">
                <div class="image-grid1"></div>
                <div class="image-grid2"></div>
                <div class="image-grid3"></div>
                <p>Technique <br>intégration <br>multimédia</p>
            </div>
        
            <div class="grid2">
                <div class="image-grid4"></div>
                <div class="image-grid5"></div>
                <div class="image-grid6"></div>
            </div>
        </section>
        
        <div class="degrade">
            <div class="premier"></div>
            <div class="deuxieme"></div>
            <div class="troisieme"></div>
            <div class="quatrieme"></div>
            <div class="cinquieme"></div>
            <div class="quatrieme"></div>
            <div class="troisieme"></div>
            <div class="deuxieme"></div>
            <div class="premier"></div>
        </div>

	<section class="menu-secondaire">
            <?php wp_nav_menu(array(
                "menu" => "secondaire",
                "container" => "nav"
            )) ?>
        </section>
        
             <section class="description" id="presentation_programme">



        </section>

        <?php   
            get_template_part("templates-parts/cours");
        ?>

        <?php   
            get_template_part("templates-parts/enseignants");
        ?>

        <?php 
            get_template_part("templates-parts/projets");
        ?>

        <?php 
            get_template_part("templates-parts/futur");
        ?>
    </body>



</main>


<?php get_footer(); ?>

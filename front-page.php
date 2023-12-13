
<?php get_header(); ?>
<main>

    <body>
        <section id="accueil" class="accueil">
            <div class="main-accueil">
                <div class="texte-arrow">
                    <div class="titre">
                        <p> Techniques </p>
                        <p> Intégration </p>
                        <p> Multimédia </p>
                    </div>
                    <div class="arrow">
                        <a href="#description">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur. </p>
            </div>
            <div class="degrade">
                <div class="premier"></div>
                <div class="deuxieme"></div>
                <div class="troisieme"></div>
                <div class="quatrieme"></div>
                <div class="cinquieme"></div>
            </div>
        </section>

        <section class="menu-secondaire">
            <?php wp_nav_menu(array(
                "menu" => "secondaire",
                "container" => "nav"
            )) ?>
        </section>

        <section class="description" id="description">
            <h6>PROGRAMME</h6>
            <h2>La technique</h2>
            <div id="background"></div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id vitae sunt maxime nostrum esse. Aspernatur minus
                qui laborum eveniet ratione alias tempore quaerat distinctio, incidunt ab porro debitis velit fugiat. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Modi sed obcaecati, odit fugiat pariatur odio velit dolor
                explicabo aut est molestiae cupiditate possimus perspiciatis nostrum ullam culpa excepturi omnis quibusdam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, earum nisi hic mollitia consectetur
                tempore provident, tempora perferendis molestiae ut dicta excepturi odit. Ipsam earum animi omnis ducimus
                possimus nobis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quisquam minima ab beatae
                maxime facilis cum sunt, reiciendis autem quidem eius corrupti eos corporis esse numquam velit odio quo
                harum!</p>
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





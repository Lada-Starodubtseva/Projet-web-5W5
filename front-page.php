
<?php get_header(); ?>
<main>

    <body>

        <section class="accueil">

            <main>

                <div class="main-accueil">

                    <div class="texte-arrow">
                        <div class="titre">

                            <p> Techniques </p>
                            <p> Integration </p>
                            <p> Multimédia </p>

                        </div>
                        <div class="arrow"><a href="#description">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <p class="lorem">Lorem ipsum dolor sit amet consectetur. </p>
                </div>
            </main>

        </section>

        <section class="description" id="description">
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


        
        <?php get_template_part("templates-parts/enseignants");
        ?>

    </body>

</main>

<?php get_footer(); ?>
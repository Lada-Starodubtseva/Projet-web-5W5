
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
                        <div class="arrow"><a href="#presentation_programme">
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
        
             <section class="description" id="presentation_programme">


        <div class="gauche avantages">
			<h3>Crée des jeux vidéos et des environnements virtuels interactifs.</h3>
            <h2>Principaux avantages du programme</h2>
                <ul>
                    <li>9000$ en bourses (Perspective Québec), soit 1500$ après chaque session réussie à temps plein (6 sessions)</li>
                    <li>Explore des axes de formation principaux : la création de jeux vidéos, la programmation Web et la création d’environnements interactifs</li>
                    <li>Approfondis tes connaissances selon tes intérêts avec des cours au choix.</li>
                    <li>Expérimente un apprentissage par projets ce qui te permet de développer tes compétences dans un contexte représentatif du milieu professionnel.</li>
                    <li>Côtoie des enseignants dévoués, passionnés et habités par un savoir qu’ils aiment transmettre à leurs étudiants.</li>
                    <li>25 ans d’expertise et un solide réseau de contacts dans l’univers du multimédia</li>
                    <li>L’occasion de participer à différents concours te permettant de faire rayonner ton talent et de vivre des expériences incroyables</li>
                    <li>Des stages d’été rémunérés dans le cadre d’une alternance travail-études (ATE)</li>
                    <li>À la fin de tes études, réalise un stage de 2 mois en entreprise.</li>
                </ul>
        </div>

        <div class="droite apprentissages">
                                
            <h2>Qu’est-ce que je vais apprendre?</h2>
            <p>Tu apprendras à concevoir et réaliser des projets numériques et interactifs tels que des jeux vidéos, sites web, modélisations 3D, animations, vidéos, application de réalité virtuelle, etc. En particulier, tu apprendras à :</p>
                <ul>
                    <li>Créer des médias (images, vidéos, sons, animations)</li>
                    <li>Concevoir le design et l’interactivité</li>
                    <li>Intégrer les composantes du projet dans un tout cohérent</li>
                    <li>Planifier la réalisation d’un projet et en effectuer le suivi</li>
                    <li>Travailler en équipe</li>
                    <li>Préparer ton insertion professionnelle dans le milieu du travail ou à l’université</li>
                </ul>
            
        </div>

        <div class="gauche logicielsLangues">
        <h2>Logiciels et langages de programmation&nbsp;</h2>
            <p>Voici les principaux logiciels, langage de programmation et librairies de code enseignés et utilisés dans le programme :&nbsp;</p>
            <p><strong><u>Les logiciels</u></strong></p>
                <ul>
                    <li>Suite Adobe
                    <ul>
                        <li>Photoshop</li>
                        <li>Illustrator&nbsp;</li>
                        <li>Premiere Pro</li>
                        <li>After Effects</li>
                        <li>Substance Designer et Substance Painter</li>
                        <li>XD</li>
                    </ul>
                        </li>
                        <li>Unity (création de jeux vidéos)</li>
                        <li>Maya (création 3D)</li>
                </ul>
            <p><strong><u>Les langages de programmation et librairies de code</u></strong></p>
                <ul>
                    <li>HTML + CSS</li>
                    <li>JavaScript</li>
                    <li>C#</li>
                    <li>React</li>
                    <li>WordPress</li>
                    <li>PHP</li>
                </ul>

        </div>

        <div class="droite projets-a-realise">
            <h2>Les projets à réaliser&nbsp;</h2>
            <p>Tout le long de ta formation, tu réaliseras de nombreux projets amusants, diversifiés et stimulants qui te permettront d’explorer les multiples facettes de l’intégration multimédia.&nbsp; Tu créeras notamment des jeux vidéos, sites Web, animations, modélisation 3D, vidéos, applications mobiles, environnements immersifs, applications de réalité virtuelle et augmentée, etc.</p>
            <p><a href="https://tim.cmaisonneuve.qc.ca/?_gl=1*yrucg0*_ga*MTU5MTUyOTEzMC4xNjk2OTUxMDg5*_ga_81H4N0JCRV*MTcwMjIzNzAxOC45LjEuMTcwMjIzNzA1OC4yMC4wLjA.">Voir des exemples de projets réalisés</a>.</p>
        </div>
         

                
        </div>

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
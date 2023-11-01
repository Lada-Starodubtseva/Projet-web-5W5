
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
            <h6>PROGRAMME</h6>
            <h2>La technique</h2>
            <div class="texte">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id vitae sunt maxime nostrum esse. Aspernatur minus
                    qui laborum eveniet ratione alias tempore quaerat distinctio, incidunt ab porro debitis velit fugiat. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Modi sed obcaecati, odit fugiat pariatur odio velit dolor
                    explicabo aut est molestiae cupiditate possimus perspiciatis nostrum ullam culpa excepturi omnis quibusdam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, earum nisi hic mollitia consectetur
                    tempore provident, tempora perferendis molestiae ut dicta excepturi odit. Ipsam earum animi omnis ducimus
                    possimus nobis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quisquam minima ab beatae
                    maxime facilis cum sunt, reiciendis autem quidem eius corrupti eos corporis esse numquam velit odio quo
                    harum!
                </p>
                <div class="barre"></div>
            </div>
            <div id="carres">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </section>

        <?php   
            get_template_part("templates-parts/cours");
        ?>

        <!--
        <section class="carrousel-enseignants">
            <div id="background-deux"></div>
            <div class="one">
                <div class="two">
                    <div class="three">
                        <div class="four">
                            <div class="five">


                                <div class="container">

                                    <div class="cont-projet">
                                        <div class="projet">
                                            <h3 class="title">projet 1</h3>
                                        </div>

                                        <div class="projet">
                                            <h3 class="title">projet 2</h3>
                                        </div>

                                        <div class="projet">
                                            <h3 class="title">projet 3</h3>
                                        </div>

                                        <div class="projet">
                                            <h3 class="title">projet 4</h3>
                                        </div>

                                        <div class="projet">
                                            <h3 class="title">projet 5</h3>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="carrousel-projets">
            <title>Pojets des eleves</title>
            <div id="background-deux"></div>
            <div class="one">
                <div class="two">
                    <div class="three">
                        <div class="four">
                            <div class="five">


                                <div class="container">

                                    <div class="cont-projet">
                                        <div id="projet1" class="projet" onclick="showText() , moveDiv()" >
                                    
                                            <h3 class="title">projet 1</h3>
                                            <img src="img/_LogoTIM.png" alt="">

                                            <p id="projText" class="texteProjet">
                                                Lorem, ipsum dolor sit 
                                                amet consectetur adipisicing 
                                                elit. Nobis enim blanditiis 
                                                est quam, porro, animi repellendus 
                                                veniam libero, quas officia 
                                                architecto similique! Ab voluptates 
                                                laboriosam quibusdam tenetur aut dolor 
                                                pariatur?
                                            </p>
                                        </div>

                                        <div id="projet2" class="projet" onclick="showText2() , moveDiv2()" >
                                            <h3 class="title">projet 2</h3>
                                            <img src="" alt="">

                                            <p id="projText2" class="texteProjet2">
                                                Lorem, ipsum dolor sit 
                                                amet consectetur adipisicing 
                                                elit. Nobis enim blanditiis 
                                                est quam, porro, animi repellendus 
                                                veniam libero, quas officia 
                                                architecto similique! Ab voluptates 
                                                laboriosam quibusdam tenetur aut dolor 
                                                pariatur?
                                            </p>
                                        </div>

                                        <div id="projet3"  class="projet" onclick="showText3() , moveDiv3()" >
                                            <h3 class="title">projet 3</h3>
                                            <img src="" alt="">

                                            <p id="projText3" class="texteProjet">
                                                Lorem, ipsum dolor sit 
                                                amet consectetur adipisicing 
                                                elit. Nobis enim blanditiis 
                                                est quam, porro, animi repellendus 
                                                veniam libero, quas officia 
                                                architecto similique! Ab voluptates 
                                                laboriosam quibusdam tenetur aut dolor 
                                                pariatur?
                                            </p>
                                        </div>

                                        <div id="projet4" class="projet" onclick="showText4() , moveDiv4()" >
                                            <h3 class="title">projet 4</h3>
                                            <img src="" alt="">

                                            <p id="projText4" class="texteProjet2">
                                                Lorem, ipsum dolor sit 
                                                amet consectetur adipisicing 
                                                elit. Nobis enim blanditiis 
                                                est quam, porro, animi repellendus 
                                                veniam libero, quas officia 
                                                architecto similique! Ab voluptates 
                                                laboriosam quibusdam tenetur aut dolor 
                                                pariatur?
                                            </p>
                                        </div>
                                        <div id="projet5" class="projet" onclick="showText5() , moveDiv5()" >
                                            <h3 class="title">projet 5</h3>
                                            <img src="" alt="">

                                            <p id="projText5" class="texteProjet">
                                                Lorem, ipsum dolor sit 
                                                amet consectetur adipisicing 
                                                elit. Nobis enim blanditiis 
                                                est quam, porro, animi repellendus 
                                                veniam libero, quas officia 
                                                architecto similique! Ab voluptates 
                                                laboriosam quibusdam tenetur aut dolor 
                                                pariatur?
                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->

        <?php   
            get_template_part("templates-parts/enseignants");
        ?>

 
  
            
            <div class="degrade">
                <div class="premier"></div>
                <div class="deuxieme"></div>
                <div class="troisieme"></div>
                <div class="quatrieme"></div>
                <div class="cinquieme"></div>
            </div>
        </section>
    </body>



</main>


<?php get_footer(); ?>


 
echo '<script type="text/JavaScript"> 

    
    function showText() {
        var text = document.getElementById("projText");
        text.classList.toggle("show");
        }
    function showText2() {
        var text2 = document.getElementById("projText2");
        text2.classList.toggle("show");
        }
    function showText3() {
        var text3 = document.getElementById("projText3");
        text3.classList.toggle("show");
        }
    function showText4() {
        var text4 = document.getElementById("projText4");
        text4.classList.toggle("show");
        }
    function showText5() {
        var text5 = document.getElementById("projText5");
        text5.classList.toggle("show");
        }



    function moveDiv() {
        var proj = document.getElementById("projet1");
        proj.style.left = proj.offsetLeft + -25 + "px";
        }
    function moveDiv2() {
        var proj2 = document.getElementById("projet2");
        proj2.style.left = proj2.offsetLeft + -170 + "px";
    }
    function moveDiv3() {
        var proj3 = document.getElementById("projet3");
        proj3.style.left = proj3.offsetLeft + -25 + "px";
    }
    function moveDiv4() {
        var proj4 = document.getElementById("projet4");
        proj4.style.left = proj4.offsetLeft + -170 + "px";
    }
    function moveDiv5() {
        var proj5 = document.getElementById("projet5");
        proj5.style.left = proj5.offsetLeft + -25 + "px";
    }

     </script>' 
; 
?> 



<section class="site__projets"> 
    <title>Pojets des eleves</title>
    <div id="background-deux"></div>

    
    <div class="one">
                <div class="two">
                    <div class="three">
                        <div class="four">
                            <div class="five">


                                <div class="container">

                                    <div class="cont-projet">
                                        <div id="projet1" class="projet" onclick="showText() , moveDiv1back()" >
                                    
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

                                        <div id="projet2" class="projet" onclick="showText2() , moveDiv2back()" >
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

                                        <div id="projet3"  class="projet" onclick="showText3() ,moveDiv3back()" >
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

                                        <div id="projet4" class="projet" onclick="showText4() , moveDiv4back()" >
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
                                        <div id="projet5" class="projet" onclick="showText5() , moveDiv5back()" >
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
</body>
</html>

 
<script type="text/JavaScript"> 

    
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




// activ -> pour les div a translate a droite
// activ2 -> pour les div a translate a gauche
    function moveDiv1back() {
        var proj1 = document.getElementById("projet1");
        proj1.classList.toggle("activ"); 
    }
    function moveDiv2back() {
        var proj2 = document.getElementById("projet2");
        proj2.classList.toggle("activ2"); 
    }
    function moveDiv3back() {
        var proj3 = document.getElementById("projet3");
        proj3.classList.toggle("activ"); 
    }
    function moveDiv4back() {
        var proj4 = document.getElementById("projet4");
        proj4.classList.toggle("activ2"); 
    }
    function moveDiv5back() {
        var proj5 = document.getElementById("projet5");
        proj5.classList.toggle("activ"); 
    }


</script>


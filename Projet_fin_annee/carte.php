<?php require_once("haut_site.php"); ?>
<style>
    input[value] {
        display: none;  
      }
</style>


    <main>
        <!-- differentes region + cartes -->
        <section id="back2" class="d-flex flex-colum  ">
            <h2 class="ecrit" >Remplissez votre propre collection <br> en vous inscrivant ! <br> <span
                class="titre">LOLCARD</span></h2>
        </section>
        <h2 class="d-flex justify-content-center margt margbot">LES CARTES</h2>
        <section>
            <hr>
<!-- partie bandle-city -->
            <article class="d-flex mid colum reggg" id="bandle">
                <h2 class="padd bandle">Bandle City</h2>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Bandle est un lieu vibrant où tout semble plus intense. Couleurs vives, saveurs inoubliables et paysages dorés composent ce monde mystérieux. Chacun en garde un souvenir unique, tant les récits varient selon les voyageurs.</p>
                </div>
                
                <div id="lol" class="d-flex">
                    <input class="index P"  value="Veigar" />
                    <input class="index P"  value="Corki" />
                    <input class="index P"  value="Rumble" />
                    <input class="index P"  value="Lulu" />
                </div>

            </article>
            <hr>

<!-- partie bilgwater -->
            <article class="d-flex mid colum colum2 reggg2" id="bilgwater">
                <div id="lol1" class="d-flex">
                    <input class="index1 P" value="Pyke" />
                    <input class="index1 P" value="Graves" />
                    <input class="index1 P" value="Fizz" />
                    <input class="index1 P" value="Nautilus" />
                </div>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Bilgewater est un repaire de pirates et de contrebandiers. Tout s’achète, des armes aux faveurs. Cette ville chaotique offre autant d'opportunités que de dangers pour ceux qui osent y tenter leur chance.</p>
                </div>
                <h2 class="padd bilg">Bilgewater</h2>
            </article>
            <hr>

<!-- partie demacia -->
            <article class="d-flex mid colum reggg" id="demacia">
                <h2 class="padd dema">Demacia&thinsp; &thinsp; &thinsp;</h2>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Demacia est une nation fière fondée pour échapper à la magie. Protégée par la pétricite, elle défend ses valeurs de justice, d'honneur et de solidarité au cœur d'un royaume ordonné et puissant.</p>
                </div>
                <div id="lol2" class="d-flex">
                    <input class="index2 P" value="Garen" />
                    <input class="index2 P" value="Kayle" />
                    <input class="index2 P" value="Poppy" />
                    <input class="index2 P" value="Lux" />
                </div>
                

            </article> 
            <hr>

<!-- partie freljord -->
            <article class="d-flex mid colum colum2 reggg2" id="freljord">
                <div id="lol3" class="d-flex">
                    <input class="index3 P" value="Olaf" />
                    <input class="index3 P" value="Trundle" />
                    <input class="index3 P" value="Volibear" />
                    <input class="index3 P" value="Sejuani" />
                </div>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Freljord est une terre glacée, rude et ancestrale. Les tribus survivent dans le froid éternel, guidées par des chefs puissants. La magie et la force forgent ceux qui aspirent à gouverner ces terres hostiles.
                    </p>
                </div>
                <h2 class="padd frel">Freljord</h2>
            </article>
            <hr>

<!-- partie ile -->
            <article class="d-flex mid  colum  reggg" id="ile">
                <h2 class="padd ile">Îles Obscures</h2>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Les Îles Obscures sont noyées dans la Brume noire. Ceux qui y pénètrent sont lentement vidés de leur énergie, attirant les esprits morts. Cette terre maudite est le domaine des âmes perdues.</p>
                </div>
                <div id="lol4" class="d-flex">
                    <input class="index4 P" value="Viego" />
                    <input class="index4 P" value="Kalista" />
                    <input class="index4 P" value="Maokai" />
                    <input class="index4 P" value="Gwen" />
                </div>
            </article>
            <hr>

<!-- partie ionia -->
            <article class="d-flex mid colum colum2 reggg2" id="ionia">
                <div id="lol5" class="d-flex">
                    <input class="index5 P" value="Ahri" />
                    <input class="index5 P" value="Yasuo" />
                    <input class="index5 P" value="Yone" />
                    <input class="index5 P" value="Sejuani" />
                </div>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Ionia est un archipel spirituel, riche en traditions. Son équilibre fragile entre le monde matériel et l'au-delà est protégé par ses habitants, maîtres d’une culture harmonieuse et ancrée dans la nature.</p>
                </div>
                <h2 class="padd ionia">Ionia</h2>
            </article>
            <hr>

<!-- partie noxus -->
            <article class="d-flex mid colum reggg" id="noxus">
                <h2 class="padd noxus">Noxus &thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;</h2>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Noxus est un empire puissant bâti sur la guerre. Sa force repose sur la détermination de son peuple. Ici, chacun peut s’élever, peu importe ses origines, tant qu’il prouve sa valeur au combat.</p>
                </div>
                <div id="lol6" class="d-flex">
                    <input class="index6 P" value="Riven" />
                    <input class="index6 P" value="Darius" />
                    <input class="index6 P" value="Draven" />
                    <input class="index6 P" value="Sion" />
                </div>

            </article>
            <hr>

<!-- partie piltover -->
            <article class="d-flex mid colum colum2 reggg2" id="piltover">
                <div id="lol7" class="d-flex">
                    <input class="index7 P" value="Vi" />
                    <input class="index7 P" value="Caitlyn" />
                    <input class="index7 P" value="Camille" />
                    <input class="index7 P" value="Orianna" />
                </div>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Piltover incarne le progrès et l’innovation. Cette cité florissante domine les falaises au-dessus de Zaun. L’art, la science et le commerce y règnent, propulsant Valoran vers l’avenir technologique.</p>
                </div>
                <h2 class="padd pil">Piltover & Zaun</h2>
            </article>
            <hr>

<!-- partie shurima -->
            <article class="d-flex mid colum reggg " id="shurima">
                <h2 class="padd shu">Shurima &thinsp; &thinsp; &thinsp;</h2>
                <div class=" d-flex align-item-center">
                    <p class="txt-carte">Shurima fut un empire glorieux, dominé par les Transfigurés. Aujourd’hui, ses ruines enfouies dans le sable attendent le retour d’un âge d’or, dans une région marquée par magie et légendes anciennes.
                    </p>
                </div>
                <div id="lol8" class="d-flex">
                    <input class="index8 P" value="Azir" />
                    <input class="index8 P" value="Taliyah" />
                    <input class="index8 P" value="Naafiri" />
                    <input class="index8 P" value="Xerath" />
                </div>

            </article>


            <hr>
            <div class="flex justify-content-center">
            <a class="ouvrir" href="landing page/landing.html" target="blank">landing Page</a></div>
        </section>
        
    </main>
    <?php 
require_once("bas_site.php");
?>
    <script src="JS/script.js"></script>
    <script src="JS/side.js"></script>
    
    
</body>

</html>
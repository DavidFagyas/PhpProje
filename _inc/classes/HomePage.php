<?php
class HomePage extends WebPage {
    protected function body() {
        ?>
        <div id="cookies">
            <div class="container">
                <div class="subcontainer">
                    <div class="cookies">
                        <p>Tento web používa na poskytovanie služieb a analýzu návštevnosti súbory cookie. Jeho používaním bez zmeny nastavenia vášho webového prehliadača pre súbory cookie súhlasíte s používaním cookies
                            <a href="">Dozvedieť sa viac</a>
                            <button id="cookies-btn">Rozumiem</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section>
            Riadenie vzťahov so zákazníkmi: predajcovia automobilov musia rozvíjať úzke vzťahy so zákazníkmi.<br> Pomáhajú im vybrať si správne auto na základe ich potrieb és rozpočtu.<br>

            Riadenie procesu predaja: predajcovia sú zodpovední za celkové riadenie procesu predaja.<br> To zahŕňa informovanie zákazníkov, prezentáciu automobilov, riadenie predajného procesu és vypracovanie predajných zmlúv.<br>
            
            Analýza trhu: sledujú trendy na trhu s automobilmi és sú informovaní o aktuálnych cenách, modeloch és ďalších relevantných informáciách.<br>
        </section>
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="autoslideshow/car1_show.webp" style="width:100%">
            </div>
            <div class="mySlides">
                <img src="autoslideshow/car2_show.jpeg" style="width:100%">
            </div>
            <div class="mySlides">
                <img src="autoslideshow/car4_show.jpg" style="width:100%">
            </div>
        </div>

        <script>
         
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <div id="goToTop" class="hore" onclick="scrollToTop()">
            <i class="fas fa-arrow-up"></i>
        </div>
        <?php
    }
}

new HomePage();
?>
<?php
class HomePage extends WebPage {
    protected function body() {
        ?>
        <div id="cookies">
            
        </div>
        <section>
           
        </section>
        <div class="slideshow-container">
            
        </div>

        <script src="scripts.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <div id="goToTop" class="hore" onclick="scrollToTop()">
            <i class="fas fa-arrow-up"></i>
        </div>
        <?php
    }
}

new HomePage();
?>


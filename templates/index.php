<?php
include('header.php');
?> 

<body>
    <div id="cookies">
        <div class="containter">
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

<sectiona>
    Riadenie vzťahov so zákazníkmi: predajcovia automobilov musia rozvíjať úzke vzťahy so zákazníkmi.<br> Pomáhajú im vybrať si správne auto na základe ich potrieb a rozpočtu.<br>

    Riadenie procesu predaja: predajcovia sú zodpovední za celkové riadenie procesu predaja.<br> To zahŕňa informovanie zákazníkov, prezentáciu automobilov, riadenie predajného procesu a vypracovanie predajných zmlúv.<br>
    
    Analýza trhu: sledujú trendy na trhu s automobilmi a sú informovaní o aktuálnych cenách, modeloch a ďalších relevantných informáciách.<br>


</sectiona>
<div class="slideshow-container">
    
    <div class="mySlides">
        <img src="autoslideshow/car1_show.webp" style="width:100%">
    </div>

    <div class="mySlides" >
    
        <img src="autoslideshow/car2_show.jpeg" style="width:100%" >
    </div>
    <div class="mySlides" >
    
        <img src="autoslideshow/car4_show.jpg" style="width:100%" >
    </div>
    </div>  
    <sectiona>

    <script>
        /**slideshow automata*/
        let slideIndex = 0;
        function showSlides() {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); 
        }
    
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
    
       //sipka hora*/
        showSlides();
        document.getElementById('goToTop').addEventListener('click', scrollToTop);
    function scrollToTop() {
        window.scroll({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    }
    //cookies*/
  setCookie =(cName,cValue,expDays)=>{
  let date = new Date();
  date.setTime(date.getTime()+(expDays2460601000));
  const expires="expires="+date.toUTCString();
  document.cookie = cName +"=" + cValue +";" + expires + "; path=/";
}

getCookie = (cName)=>{
  const name = cName +"=";
  const cDecoded = decodeURIComponent(document.cookie);
  const cArr = cDecoded.split("; ");
  let value;
  cArr.forEach(val=>{
    if(val.indexOf(name)==0) value =val.substring(name.length);

  })

  return value;
}
document.querySelector("#cookies-btn").addEventListener("click",()=>{document.querySelector("#cookies").style.display="none";
setCookie("cookie",true,30)

})

cookieMessage=()=>{
  if(!getCookie("cookie"))
  document.querySelector("#cookies").style.display="block"
}
window.addEventListener("load",cookieMessage);
    </script>
   
   <?php
include('footer.php');
?> 
   
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <div id="goToTop" class="hore" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div>
</body>
</html>

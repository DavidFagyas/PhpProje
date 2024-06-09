<?php
include('header.php');
?>

 <div class="stplce"><h3>Otváracie hodiny</h3> <br>
 Pondelok: 9:00-17:00 <br>
   Utorok: 9:00-17:00 <br>
   Streda: 9:00-17:00 <br>
   Štvrtok 9:00-17:00 <br>
   Piatok: 9:00-17:00<br>
   Sobota: 9:00-13:00<br>
   Nedeľa: Zatvorená<br> </div>
</div> 
   <div class="stplce"></div><h3>Kontakt onás</h3> <br>
     Tel.č: +421 956 569 585 <br>
     Email: autobazardavid@bazar.sk<br>
     ičo:5415315131 <br>
     Dič:5534533331 <br>
     Ulica akademicak 15115<br></div>
    <br>
    <br>
    <div class="stplce"></div><h3>Kontakt o Servise</h3> <br>
    <a class="nav-link" href="https://auto-motiv.sk/?gad_source=1&gclid=CjwKCAiA-P-rBhBEEiwAQEXhHzYm8YyoK5lbYrCMgQOhcuDS58c5Dbx03FEqy7-D8rAbBWwgC5_R3RoCfo8QAvD_BwE">BMW</a></li><br>
    <a class="nav-link" href="https://www.galimex.sk/servis/?gclid=CjwKCAiA-P-rBhBEEiwAQEXhH-sjZRqV7R1o5vgENSfZPkeqUxAWZFzMshsEf3ZvnckxPjEUV1obNRoCH3wQAvD_BwE">AUDI</a></li><br>  
    <a class="nav-link" href="https://borsauto.sk/?gclid=CjwKCAiA-P-rBhBEEiwAQEXhH7PLeTnAcyU8rtmxqs_pyxTU0EfVI1DgdufakFT9NzuYIrP4SuwgWhoCSbAQAvD_BwE">ŠKODA</a></li><br>  
</div> 


<div class="accordion">
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion('section1')">Section 1</div>
      <div class="accordion-content" id="section1">This is the content for Section 1.</div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion('section2')">Section2</div>
      <div class="accordion-content" id="section2">This is the content for Section 2.</div>
    </div>
  
  </div>
    <br>
    <br>
    <br>

    
     
    
    <?php
include('footer.php');
?> 

        <div class="footermenu2">
        <span class="autor">&copy;Dávid Fagyas, 2023.</span>
    </div>

    </footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <div id="goToTop" class="hore" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <script>showSlides();
        document.getElementById('goToTop').addEventListener('click', scrollToTop);
    function scrollToTop() {
        window.scroll({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
     } 
     function toggleAccordion(sectionId) {
    var content = document.getElementById(sectionId);
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  }
     </script>
    
    
</body>
</html>

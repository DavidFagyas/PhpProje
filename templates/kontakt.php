<?php
include('header.php');
?>

        <sec id="kontakt">
            <h4>Kontakt </h4>
            <form action="submit_form.php" method="post">
                <label for="name">Meno:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="message">Správa:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <input type="submit" placeholder="ODOSLAŤ" class="logininputbtn">
              
            </form>
        </sec>


      



        <?php
include('footer.php');
?> 

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
         } </script>
 

</body>
</html>

<?php
class ContactPage extends WebPage {
    protected function body() {
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
    }
}
?>

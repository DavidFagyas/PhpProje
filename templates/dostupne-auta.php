<?php
include('header.php');
?> 

<section>
<h1>Dostupné autá</h1>
    <h6>Dostupné autá</h6>


    <form method="GET" action="dostupne-auta.php">
        <label for="brand">Značka:</label>
        <select name="brand" id="brand">
            <option value="">Všetky</option>
            <?php
            require 'db.php';
            
         
            $sql = "SELECT DISTINCT make FROM cars";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["make"] . "'>" . $row["make"] . "</option>";
                }
            }
            ?>
        </select>
  
        
        <label for="price_order">Cena:</label>
        <select name="price_order" id="price_order">
            <option value="asc">Vzostupne</option>
            <option value="desc">Zostupne</option>
        </select>
        
        <input type="submit" value="Filtrovať">
    </form>


    <?php
  
    $sql = "SELECT * FROM cars";
    
 
    if(isset($_GET['brand']) && !empty($_GET['brand'])) {
        $brand = $_GET['brand'];
        $sql .= " WHERE make='$brand'";
    }
    
   
    $price_order = "asc";
    if(isset($_GET['price_order']) && !empty($_GET['price_order'])) {
        $price_order = $_GET['price_order'];
    }
    $sql .= " ORDER BY price $price_order";
    
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='car'>";
            echo "<img src='" . $row["image"] . "' alt='Auto" . $row["id"] . "'>";
            echo "<div>";
            echo "<h3><a href='car" . $row["id"] . ".php'>" . $row["make"] . " " . $row["model"] . "</a></h3>";
            echo "<p>Cena:" . $row["price"] . " €</p>";
            echo "<p>Rok vyroby:" . $row["year"] . " </p>";
           
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>Nie sú k dispozícii žiadne autá.</p>";
    }
    $conn->close();
    ?>
</section>

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
 }</script>
</body>




</html>

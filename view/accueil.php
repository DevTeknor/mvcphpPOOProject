<main>

<h2>Notre dernière nouveauté</h2>
    <?php
    foreach($velos as $velo) {
        echo "<article>";
        echo "<h3>".$velo["modele"]."</h3>";
        echo "<img src='./view/images/".$velo["photo"]."'>";
        echo "<div>".$velo["description_"];
        echo "<p>".$velo["prix"]." €</p></div>";
        echo "<a href='?page=commander&velo=".$velo['id_velo']."'>Plus d'infos</a>";
        echo "<a href='?page=commander'>Commander</a>";
        echo "</article>";
    }   
    ?>
</main>
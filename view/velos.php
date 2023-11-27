<main class="velos">
<h2>Nos vélos</h2>

    <?php
    foreach($velos as $velo) {
        echo "<article>";
        echo "<img src='./view/images/".$velo["photo"]."'>";
        echo "<p>".$velo["prix"]." €</p>";
        echo "<a href='?page=commander&velo=".$velo['id_velo']."'>Plus d'infos</a>";
        echo "<a href='?page=commander'>Commander</a>";
        echo "</article>";
    }
    ?>
</main>
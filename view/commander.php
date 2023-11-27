<main>
<h2>Commander un vélo</h2>

    <form action="?page=commander&commande=set" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea><br>
        
        <label for="modele">Modèle du vélo :</label>
        <input type="hidden" name="id_velo" value="">
        <select id="modele" name="modele" required>
            <?php foreach($velos as $velo): ?>
                <option value="<?php echo $velo['id_velo']; ?>">
                    <?php echo $velo['modele']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Valider ma commande">
    </form>
</main>
<?php
/**
 * Template Name: Template commande
 */

get_header();
?>

<main id="lexique">

    <h1><?php the_title(); ?></h1>
    <section>

    <?php
    // Assurez-vous que $definitions soit défini ou récupéré avant cette boucle
    foreach ($definitions as $definition) {
        get_template_part("template-parts/bloc-commande", null, $definition);
    }
    ?>
    </section>
 
</main><!-- #site-content -->

<!DOCTYPE html>
<html>
<head>
    <title>Titre de votre page</title>
</head>
<body>
    <p>Voici des images :</p>
    <img src="../images/fraise.png">
    <img src="../images/pample-mousse.png">
    <img src="../images/citron.png">
    <img src="../images/framboise.png">
</body>
</html>

<div class="parfum-container">
    <label for="ticketNum">Numéro de ticket : </label>
    <input id="ticketNum" type="number" name="ticketNum" value="0" />
    <button class="command-button">OK</button>
    <!-- Vous pouvez répéter le bloc ci-dessus pour chaque entrée de ticket -->
</div>

<script>
    const mots = document.querySelectorAll("#lexique .mot");
    mots.forEach(mot => {
        mot.addEventListener("click", (e) => {
            if (!mot.classList.contains("open")) {
                mots.forEach(m => {
                    m.classList.remove("open");
                });
                mot.classList.add("open");
            } else {
                mot.classList.remove("open");
            }
        });
    });
</script>
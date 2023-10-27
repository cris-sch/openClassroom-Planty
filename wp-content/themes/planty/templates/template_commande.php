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
    <div class="parfum-container">
        <div>
            <img src="<?php bloginfo('url'); ?>/wp-content/themes/planty/images/Fraise.png">
            <input id="ticketNum" type="number" name="ticketNum" value="0" />
            <button class="command-button">OK</button>
        </div>
        <div>
            <img src="<?php bloginfo('url'); ?>/wp-content/themes/planty/images/Pamplemousse.png">
            <input id="ticketNum" type="number" name="ticketNum" value="0" />
            <button class="command-button">OK</button>
        </div>
        <div>
            <img src="<?php bloginfo('url'); ?>/wp-content/themes/planty/images/Citron.png">
            <input id="ticketNum" type="number" name="ticketNum" value="0" />
            <button class="command-button">OK</button>
        </div>
        <div>
            <img src="<?php bloginfo('url'); ?>/wp-content/themes/planty/images/Framboise.png">
            <input id="ticketNum" type="number" name="ticketNum" value="0" />
            <button class="command-button">OK</button>
        </div>
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

</body>

</html>
<?php
/**
 * Template Name: Template Nous rencontrer
 
 */

get_header();
?>

<main >

    <h1><?php the_title(); ?></h1>
    <section>
    
    <?php the_content();
   
    ?>
    </section>

</main><!-- #site-content -->
<script>
    const mots = document.querySelectorAll("#lexique .mot");
    mots.forEach(mot => {
        mot.addEventListener("click", (e) => {
            if (!mot.classList.contains("open")) {
                mots.forEach(m => {
                    m.classList.remove("open");
                })
                mot.classList.add("open");
            } else mot.classList.remove("open");
        })
    })
</script>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
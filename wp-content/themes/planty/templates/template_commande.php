<?php
/**
 * Template Name: Template commande
 
 */
$definitions= array(
    array(
        'titre' => 'framboise',
        
    ),
    array(
        'titre' => 'pamplemousse',
        
    ),
    array(
        'titre' => 'fraise',
        
    ),
     array(
        'titre' => 'citron',
        
     ),
    );
get_header();
?>

<main id="lexique">

    <h1><?php the_title(); ?></h1>
    <section>
    
    <?php the_content();
    foreach($definitions as $definition){
        get_template_part("template-parts/bloc-commande",null,$definition);
    
    }
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


<?php get_header(); ?>
<main class="single">
    <h3>single.php</h3>
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post();
                the_title('<h1>','</h1>');
                the_content(); 
                the_post_thumbnail('medium');?>
                
                <hr>
            <?php endwhile;
        endif;
    ?>

</main>

<?php get_footer(); ?>
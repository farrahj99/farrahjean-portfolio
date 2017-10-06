<?php 
    /**
    * Template Name: Farrah Template
    */
?>

<?php // colons replace brackets ?>

<?php if (have_posts() ): ?>
    <?php while ( have_posts() ): ?>
    <?php the_post(); ?>
     <section class="banner-example">
        <?php // shows the title of the page paragraph ?>
        <h1><?php the_title(); ?></h1>
        <?php // shows the content in the WYSIWYG editor paragraph ?>
        <?php the_content(); ?>
        <?php // shows the featured page of this page?>
        <?php if (has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
    <?php endif; ?>
        <?php // static code next ?>
        <h3>Farrah is dope</h3>
     </section>
  <?php endwhile; ?>
<?php endif; ?>
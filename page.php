<?php get_header(); ?>

<main role="main" class="main">
  <?php if(have_posts()) : ?>
    <?php
      $classes = array(
        'article',
      ' article--single'
      );
    ?>
    <?php while(have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
      <header class="article__header">
        <h1 class="article__title" data-title="<?php the_title(); ?>">
          <span>
            <?php the_title(); ?>
          </span>
        </h1>
      </header>
      <div class="article__content">
        <?php the_content(); ?>
      </div>
    </article>

    <?php endwhile; ?>

  <?php else : ?>
  <?php endif; ?>

</main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
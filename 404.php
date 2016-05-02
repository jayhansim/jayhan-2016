<?php get_header(); ?>

<main role="main" class="main">
  <article class="article article--single">
    <header class="article__header">
      <h1 class="article__title" data-title="<?php the_title(); ?>">
        <span>
          Sorry, but you are looking for something that isn&#8217;t here.
        </span>
      </h1>
    </header>
    <div class="article__content">
      <p><a href="<?php bloginfo('url'); ?>" class="btn">Back to home</a></p>
    </div>
  </article>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main role="main" class="main">
  <?php if(have_posts()) : ?>
    <?php
      $classes = array(
        'article',
      ' article--loop'
      );
    ?>
    <?php while(have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
      <header class="article__header">
        <h2 class="article__title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </header>
      <div class="article__content">
        <?php the_content(); ?>
      </div>
    </article>

    <?php endwhile; ?>

    <article class="article--loop article--ad">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- jayhan-midrec -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:300px;height:250px"
           data-ad-client="ca-pub-8642281896248767"
           data-ad-slot="8393296909"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </article>

  <?php else : ?>
    <h2><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h2>
    <p><a href="<?php bloginfo('url'); ?>" class="btn">Back to home</a></p>
  <?php endif; ?>

</main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
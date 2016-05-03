<main role="main" class="main">


  <div class="archive__header">
    <?php if(is_front_page()){ ?>
      <h1 class="archive__title">Latest Articles</h1>
    <?php /* If this is a category archive */ } elseif (is_category()) { ?>
      <h1 class="archive__title"><span><?php printf(__('%s'), single_cat_title('', false)); ?></span></h1>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
      <h1 class="archive__title"><span><?php printf(__('Articles tagged in &#8216;%s&#8217;'), single_tag_title('', false) ); ?></span></h1>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
      <h1 class="archive__title"><span><?php printf(_c('Archive for %s|Daily archive page'), get_the_time(__('F jS, Y'))); ?></span></h1>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <h1 class="archive__title"><span><?php printf(_c('Archive for %s|Monthly archive page'), get_the_time(__('F, Y'))); ?></span></h1>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h1 class="archive__title"><span><?php printf(_c('Archive for %s|Yearly archive page'), get_the_time(__('Y'))); ?></span></h1>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
      <h1 class="archive__title"><span><?php _e('Author Archive'); ?></span></h1>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h1 class="archive__title"><span><?php _e('Blog Archives'); ?></span></h1>
    <?php /* If this is a paged archive */ } elseif (is_search()) { ?>
      <h1 class="archive__title"><span><?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count;
        echo $key . ' <i class="archive__title--sub">' . $count . ' results </i>'; wp_reset_query(); ?></span></h1>
    <?php } ?>
  </div>

  <?php if(have_posts()) : ?>
    <?php $adcounter = 0; ?>
    <?php
      $classes = array(
        'article',
      ' article--loop'
      );
    ?>
    <?php while(have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
      <header class="article__header">
        <div class="article__thumbnail">
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
            } ?>
          </a>
        </div>
        <h2 data-title="<?php the_title(); ?>" class="article__title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <div class="article__meta">
          <div class="meta meta__postdate">
            <time><?php the_time('d M y'); ?></time>
          </div>
          <div class="meta meta__category">
            . <?php the_category(', '); ?>
          </div>
        </div>
      </header>
      <div class="article__content">
        <?php the_content('Continue reading'); ?>
      </div>
      <?php if ($adcounter == 0) : ?>
      <div class="article--ad">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- jayhan-midrec -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:300px;height:250px"
             data-ad-client="ca-pub-8642281896248767"
             data-ad-slot="8393296909"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <?php endif; ?>
    </article>






    <?php $adcounter++; ?>
    <?php endwhile; ?>

  <?php else : ?>
    <article class="article article--loop article--error">
      <header class="article__header"><h2 class="article__title"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h2></header>
      <div class="article__content">

      <p><a href="<?php bloginfo('url'); ?>" class="btn">Back to home</a></p>
      </div>

    </article>

  <?php endif; ?>

  <?php get_template_part('pagination'); ?>

</main>

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
        <div class="article__meta">
          <div class="meta meta__postdate">
            <i class="icon icon__meta icon__meta--date"></i>
            <time><?php the_time('d M y'); ?></time>
          </div>
          <div class="meta meta__comment">
            <i class="icon icon__meta icon__meta--comment"></i>
            <span class="disqus-comment-count" data-disqus-url="<?php the_permalink(); ?>">0 Comments</span>
          </div>
          <div class="meta meta__category">
            <i class="icon icon__meta icon__meta--category"></i>
            <?php the_category(', '); ?>
          </div>
        </div>
      </header>
      <div class="article__content">

        <div class="article__content--ad--top">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- 468x15 -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:468px;height:15px"
               data-ad-client="ca-pub-8642281896248767"
               data-ad-slot="2515312907"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <?php the_content(); ?>

        <div class="article__content--ad">
          <!-- jayhan-midrec -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:300px;height:250px"
               data-ad-client="ca-pub-8642281896248767"
               data-ad-slot="8393296909"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>

        <?php echo do_shortcode('[ssboost]'); ?>
        <?php similar_posts(); ?>
      </div>
    </article>

    <?php endwhile; ?>

    <div class="shutterstock" style="margin-top: 45px; text-align: center">
      <div data-id='53c75337ab9626e0031ffac5' style='position: relative; max-width: 100%; height: 300px; margin-bottom: 25px;' class='sstk_widget'><a href='http://affiliate.shutterstock.com' target='_blank' style='position: absolute;bottom: 0px;left: 13px; line-height: 40px; text-decoration: none;color: #333333; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;font-size: 12px;'>Powered by Shutterstock</a><script type='text/javascript'>window._wdata = window._wdata || [];_wdata.push({widget_id: '53c75337ab9626e0031ffac5', cdn_prefix: '//d3qrz9uuaxc8ej.cloudfront.net', width: '100%', height: '300', src: '//widget.shutterstock.com/widget/53c75337ab9626e0031ffac5', border: true, url: document.URL});(function () {if (typeof (widget) !== 'undefined') return;var nwjs = document.createElement('script'); nwjs.type = 'text/javascript'; nwjs.async = true;nwjs.id = 'widget_script';nwjs.src = '//widget.shutterstock.com/content/js/embed_widget.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(nwjs, s);})();</script></div>
    </div>

    <section class="comments">
			<h3>Comments</h3>

			<?php comments_template(); ?>
		</section>

  <?php else : ?>
    <h2><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h2>
    <p><a href="<?php bloginfo('url'); ?>" class="btn">Back to home</a></p>
  <?php endif; ?>

</main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
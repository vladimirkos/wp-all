<?php get_header(); ?>
<section class="insider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          single_cat_title() Выводит на экран заголовок рубрики или метки. Используется за пределами цикла.
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>


            


              

      <?php endwhile; ?>

          <!--  post-navigation-->

      <?php else: ?>

      <!--post-faund-->

      <?php endif; ?>

      </div>

    </div>

  </div>
</section>
<?php get_footer(); ?>

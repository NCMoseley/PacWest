<?php
/**
 * Template Name: News Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <?php $banner_text = get_field('news_page_banner_text'); ?>
	<?php $logo = get_field('news_page_banner_logo');?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <header class="banner-section parallax">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $logo ?>" alt="Pacwest Logo">
				</div>

				<h1>
					<?php echo $banner_text ?>
				</h1>
      </header>


      <section class="news-section">
        <h2 class="news-h2">Latest Press Releases</h2>

        <div class="news-items-wrapper">
          <?php $args = array( 'post_type' => 'post', 'posts_per_page' => -1 ); $query = new WP_Query($args);?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
          
            <div class="news-item">
              <div class="news-item-header">
                <div class="news-item-header-group">
                  <h3>
                    <?php the_title(); ?>
                  </h3>
                  <span>
                    <?php the_time(' F jS, Y') ?>
                  </span>
                </div>
                <div class="news-item-pdf">
                  <a href="<?php the_field('press_release_pdf')  ?>">PDF</a>
                </div>
              </div>



              <div class="news-item-body">
                <?php the_content(); ?>
              </div>

              <p class="news-item-expand-link">
                <i class="fa fa-chevron-down"></i>
              </p>

            </div>

          <?php endwhile; ?>
          <?php wp_reset_query() ?>
        </div>
      </section>



      



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>
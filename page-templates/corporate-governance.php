<?php
/**
 * Template Name: Corporate Governance Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<?php $cg_logo = get_field('cg_banner_logo');?>
	<?php $cg_header = get_field('cg_header');?>
	<?php $cg_page_description = get_field('cg_page_description');?>

	<?php $cg_board_of_directors_description = get_field('cg_board_of_directors_description');?>
	<?php $cg_management_description = get_field('cg_management_description');?>
	<?php $cg_board_of_advisors_description = get_field('cg_board_of_advisors_description');?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="cg-wrapper">
				<div class="cg-menu">
					<ul class="cg-menu-list">
						<a href="#board-of-directors">
							<li>Board of Directors</li>
						</a>
						<a href="#management-team">
							<li>Management Team</li>
						</a>
						<a href="#board-of-advisors">
							<li>Board of Advisors</li>
						</a>
					</ul>
				</div>

				<header class="banner-section parallax">
					<div class="banner-section-img-wrapper">
						<img src="<?php echo $cg_logo ?>" alt="About page logo">
					</div>
					<h1><?php echo $cg_header ?></h1>
        </header>


				<div class="cg-page-description">
					<p><?php echo $cg_page_description ?> </p>
				</div>

				

				<div class="cg-section-heading" id="board-of-directors">
					<div class="left-box">
						<p>Board of</p>
						<h1>Directors</h1>
					</div>
					<div class="right-box">
						<p><?php echo $cg_board_of_directors_description ?></p>
					</div>
				</div>

				<section class="cg-team cg-bod" >

					<div class="bod-wrapper team-wrapper">
						<?php $args = array('post_type'		=> 'team_member', 'meta_key'		=> 'team_member_category', 'meta_value'	=> 'Board of Directors'); $query = new WP_Query($args);?>

						<?php while ($query->have_posts()) : $query->the_post(); ?>


						<div class="individual-team-member">
							<div class="team-headshot">
								<img src="<?php the_field('team_member_image')?>" />
							</div>

							<div class="team-member-info">
								<h2 class="uppercase">
									<?php the_title(); ?>
								</h2>
								<div class="position-container uppercase">
									<?php the_field('position') ?>
									<i class="cg-plus-icon fa fa-plus" aria-hidden="true"></i>
								</div>

								<div class="cg-bio">
									<?php the_content(); ?>
								</div>

								<div class="cg-close">
									<i class="fa fa-times" aria-hidden="true"></i>
								</div>

							</div>
							<!-- close team member info -->

						</div>
						<!-- close individual team member -->


						<?php endwhile; ?>
						<?php wp_reset_query() ?>


					</div>
					</section>
					<!-- bod wrapper -->

					<div class="cg-section-heading" id="management-team">
					<div class="left-box">
						<p>PacWest</p>
						<h1>Management</h1>
					</div>
					<div class="right-box">
						<p><?php echo $cg_management_description ?></p>
					</div>
				</div>

				<section class="cg-team cg-mngmnt" >
					<div class="managment-wrapper team-wrapper">
						<?php $args = array('post_type'		=> 'team_member', 'meta_key'		=> 'team_member_category', 'meta_value'	=> 'Management'); $query = new WP_Query($args);?>

						<?php while ($query->have_posts()) : $query->the_post(); ?>


						<div class="individual-team-member">
							<div class="team-headshot">
								<img src="<?php the_field('team_member_image')?>" />
							</div>

							<div class="team-member-info">
								<h2 class="uppercase">
									<?php the_title(); ?>
								</h2>
								<div class="position-container uppercase">
									<?php the_field('position') ?>
									<i class="cg-plus-icon fa fa-plus" aria-hidden="true"></i>
								</div>

								<div class="cg-bio">
									<?php the_content(); ?>
								</div>

								<div class="cg-close">
									<i class="fa fa-times" aria-hidden="true"></i>
								</div>

							</div>
							<!-- close team member info -->

						</div>
						
						<!-- close individual team member -->


						<?php endwhile; ?>
						<?php wp_reset_query() ?>


					</div>
					</section>
					<!-- management wrapper -->

					<div class="cg-section-heading" id="board-of-advisors">
					<div class="left-box">
						<p>Board of</p>
						<h1>Advisors</h1>
					</div>
					<div class="right-box">
						<p><?php echo $cg_board_of_advisors_description ?></p>
					</div>
				</div>

				<section class="cg-team cg-boa" >
					<div class="boa-wrapper team-wrapper">
						<?php $args = array('post_type'		=> 'team_member', 'meta_key'		=> 'team_member_category', 'meta_value'	=> 'Board of Advisors'); $query = new WP_Query($args);?>

						<?php while ($query->have_posts()) : $query->the_post(); ?>


						<div class="individual-team-member">
							<div class="team-headshot">
								<img src="<?php the_field('team_member_image')?>" />
							</div>

							<div class="team-member-info">
								<h2 class="uppercase">
									<?php the_title(); ?>
								</h2>
								<div class="position-container uppercase">
									<?php the_field('position') ?>
									<i class="cg-plus-icon fa fa-plus" aria-hidden="true"></i>
								</div>

								<div class="cg-bio">
									<?php the_content(); ?>
								</div>

								<div class="cg-close">
									<i class="fa fa-times" aria-hidden="true"></i>
								</div>

							</div>
							<!-- close team member info -->

						</div>
						<!-- close individual team member -->


						<?php endwhile; ?>
						<?php wp_reset_query() ?>


					</div>
					</section>
					<!-- boa wrapper -->
				
				<!-- cg team -->

				<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

				<?php endwhile; // End of the loop.?>


			</section>
			<!-- close cg wrapper -->
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_template_part('template-parts/sub-footer'); ?>
	<?php get_footer(); ?>
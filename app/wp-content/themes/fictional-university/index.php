<?php get_header(); ?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg'); ?>);"></div>
		<div class="page-banner__content container t-center c-white">
			<h1 class="headline headline--large">Welcome to our blog!</h1>
		</div>
	</div>

    <div class="container container--narrow page-section">
        <?php
            while (have_posts()) {
                the_post(); // data ready to each post
        ?>
                <div class="post-item">
                    <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>

                    <div class="metabox">
                        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.d.j'); ?> in <?php echo get_the_category_list(', '); ?></p>
                    </div>

                    <div class="generic-content">
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Continue reading &raquo;</a></p>
                    </div>
                </div>
        <?php
            }

            // Create pagination link
            echo paginate_links();
        ?>
    </div>
<?php get_footer(); ?>
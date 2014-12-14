<?php get_header(); ?>
            <main class="gridly">
                <div class="tier-8">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="the-post">
                        <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <div class="article-meta">
                            <time datetime="<?php the_time('c')?>"><?php echo the_date('', 'Posted on ', ' ', FALSE); ?></time> 
                            by <?php the_author_posts_link(); ?> 
                            in <?php $category = get_the_category(); echo '<a href="'.esc_url(get_category_link( get_cat_ID( $category[0]->cat_name ) )).'">'.$category[0]->cat_name.'</a>'; ?>
                        </div>
                        <?php the_content();?>
                    </article>
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    <?php comments_template(); ?> 
                </div>
                <?php get_sidebar(); ?>
            </main>
            <?php get_footer(); ?>

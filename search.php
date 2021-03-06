<?php get_header(); ?>
    <div class="gridly">
        <main class="tier-8">
        <h1>Query: <?php the_search_query(); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post-list">
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="article-meta">
                        <time datetime="<?php the_time('c')?>"><?php echo the_date('', 'Posted on ', ' ', FALSE); ?></time> 
                        by <?php the_author_posts_link(); ?> 
                        <?php
                            // Makes sure we don't break something trying to display categories for a page
                            if (is_single()) {
                                $category = get_the_category(); 
                                echo 'in <a href="'.esc_url(get_category_link( get_cat_ID( $category[0]->cat_name ) )).'">'.$category[0]->cat_name.'</a>';
                            }
                        ?>
                    </div>
                    <?php the_content();?>
                </article>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
        </main>
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>

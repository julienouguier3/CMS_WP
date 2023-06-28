<!--Bloc de code à réutiliser-->
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php if(!is_singular()) : ?>
            <a href="<?php the_permalink(); ?>">
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    <?php (is_singular()) ? the_content() : the_excerpt(); ?>
                    <p class="btnbtn-primary">
                        Lire la suite
                    </p>
                    <?php the_post_thumbnail() ?>
                    <!-- <p class="blog-post-meta"><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p> -->
                    <?php if(is_singular()) : if(comments_open()) :comments_template(); endif; endif; ?>
                </div>
            </a>
        <?php else : ?>
            <div>
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p>
                <?php (is_singular()) ? the_content() : the_excerpt(); ?>
                <?php if(is_singular()) : if(comments_open()) :comments_template(); endif; endif; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
    <div id="pagination">
        <?php echo paginate_links(); ?>
    </div>
<?php endif; ?>


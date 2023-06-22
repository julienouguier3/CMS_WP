<?php if (have_posts()) : ?>
    <div class="container">
        <div class="row ">
            <?php while (have_posts()) : the_post(); ?>
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('medium', ['alt' => "", "class" => "card-img-top", "style" => "width:auto"]); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="cart-subtitle mb-2 tex-muted"><?php the_category() ?></h6>
                        <p class="card-text">Some quick example text.
                            <?php the_excerpt(); ?> </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php else: ?>
    <h1>Pas d'articles</h1>

<?php endif; ?>

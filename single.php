<?php get_header(); ?>
    <div class="container container-single-aside">
        <main class="main-single-post">
            <section class="single-entry-section">                
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('author')) : endif;?>
                    <!-- <div class="single-post-autor">
                        <div class="single-post-autor__img-ctn">
                            <img src="<?=bloginfo('template_url')?>/img/autor.jpg" alt="Autor" class="single-post-autor__img">
                        </div>
                        <span class="single-post-autor__name"><?=get_the_author();?></span>
                    </div> -->
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                    <article class="single-post">
                        <h2 class="single-post__title"><?=the_title();?></h2>
                        <div class="single-post__groups">
                            <div class="single-post__group-date">
                                <p><i class="fa-regular fa-clock single-post__g-date-icon"></i><span
                                        class="single-post__g-text-date"><?=get_the_date();?></span></p>
                            </div>
                            <div class="single-post__group-autor">
                                <p><i class="fa-regular fa-user single-post__g-autor-icon"></i><span
                                        class="single-post__g-text-autor"><?=get_the_author();?></span></p>
                            </div>
                        </div>                
                        <?=the_content();?>
                    </article>
                <?php endwhile; else: ?>
                <?php endif; ?>
            </section>
        </main>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
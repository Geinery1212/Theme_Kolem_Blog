<?php get_header(); ?>
    <main>
        <div class="container">
            <section class="featured">
                <h2 class="featured__title"><i class="fa-solid fa-star"></i>Lo más reciente</h2>
                <div class="featured__grid">
                <?php if (is_paged()) $count = 1; else $count = 0; ?>
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php $count++; ?>                        
                        <article class="article <?php if($count == 1) echo "article__main"; else echo '';?>">
                            <div class="article__image <?php if($count == 1) echo "article__main"; else echo '';?>">
                                <a href="<?= the_permalink(); ?>">
                                    <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail('homepage-thumb');
                                        }
                                    ?>
                                </a>
                            </div>
                            <div class="article__text">
                                <h3 class="article__title"><a href="<?=the_permalink();?>" class="the-permalink"><?=mb_strimwidth(get_the_title(), 0, 50, '...');?></a></h3>
                                <div class="date">
                                    <p><i class="fa-solid fa-calendar-days date__icon"></i><span class="date__text"><?=get_the_date();?></span></p>
                                </div>
                                <div class="article__extract"><?=get_excerpt();?></div>
                                <div class="article__footer <?php if($count == 1) echo "article__main"; else echo '';?>">
                                    <a href="#" class="button">
                                        <div class="button__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </div>
                                        <span>Leer más</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; endif;?>
                </div>
            </section>
            <section class="pagination">
                <?php wp_pagenavi();?>

            </section>
            <section class="categories container">
                <h2 class="categories__title">Categorías</h2>
                <div class="categories__grid">
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                    <div class="category">
                        <div class="category__image-box">
                            <img src="<?=bloginfo('template_url')?>/img/category.jpg" alt="" class="category__image">
                        </div>
                        <h3 class="category__name">Lorem ipsum dolor sit.</h3>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
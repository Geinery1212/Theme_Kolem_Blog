<?php get_header(); ?>
    <main>
        <div class="container">
            <section class="featured">
                <h2 class="featured__title"><i class="fa-solid fa-star"></i>Lo más reciente</h2>
                <div class="featured__grid">
                    <?php $paged = get_query_var('paged'); if($paged == 0): ?>
                        <?php query_posts( 'posts_per_page=1' );
                        if (have_posts()) : while(have_posts()) : the_post(); ?>                        
                            <article class="article article__main">
                                <div class="article__image article__main">
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
                                    <div class="article__footer article__main">
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
                        <?php endwhile; endif;
                        wp_reset_postdata(); 
                        if(get_option('posts_per_page')==1){
                            $wp_query->max_num_pages = $wp_query->max_num_pages;
                        } else{ 
                            $wp_query->max_num_pages = round((($wp_query->found_posts) + 1) / get_option('posts_per_page'));
                        }?>               
                    <?php else: 
                        if(get_option('posts_per_page')==1){
                            $wp_query->max_num_pages = $wp_query->max_num_pages;
                        } else{ 
                            $wp_query->max_num_pages = round((($wp_query->found_posts) + 1) / get_option('posts_per_page'));
                        } 
                    endif;?>
                    <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;        
                    if($paged == 1){
                        $per_page = get_option('posts_per_page')-1;
                    }else{
                        $per_page = get_option('posts_per_page');
                    }
                    $default_offset = 1;
        
                    if(get_option('posts_per_page') == 1 && $paged == 1){
                        $offset = (($paged - 1) * $per_page) + $default_offset;
                    }elseif ($paged%2 == 0) {    
                        $offset = (($paged - 1) * $per_page) + $default_offset;
                    } else {
                        $offset = (($paged - 1) * $per_page) + $default_offset;                
                    }
                
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => $per_page,
                        'order'   => 'DESC',
                        'offset' => $offset,
                        'paged' => $paged
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts() ) : while ($loop->have_posts()) : $loop->the_post(); ?>
                        <article class="article">
                            <div class="article__image">
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
                                <div class="article__footer">
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
                    <?php endwhile; else: ?>
                        <article class="article">
                            <div class="article__text">
                                <h3 class="article__title">SIN ENTRADAS</h3>                        
                            </div>
                        </article>
                    <?php endif; wp_reset_postdata();?>
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
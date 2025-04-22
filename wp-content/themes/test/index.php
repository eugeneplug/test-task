<?php get_header(); ?>




<section class="relative">
    <div class="swiper">
        <div class="swiper-wrapper">



            <?php
            $args = array(
                'category__in' => 3, // Рубрика с ID 3
                'posts_per_page' => -1 // Берем только одну последнюю запись
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="swiper-slide">
                        <div
                            class="bg-gradient-to-r   <?php the_field('color_slider') ?> <?php the_field('color_slider2') ?>  text-white py-20">
                            <div class="container mx-auto px-4 text-center">
                                <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                                <p class="text-xl mb-8 max-w-2xl mx-auto"><?php the_content(); ?> <br></p>
                                <button
                                    class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Узнать
                                    больше</button>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>



            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation buttons -->
            <div class="swiper-button-prev text-white"></div>
            <div class="swiper-button-next text-white"></div>
        </div>
</section>

<!-- Content Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Наши преимущества</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">




            <?php
            $args = array(
                'category__in' => 4, // Рубрика с ID 3
                'posts_per_page' => -1 // Берем только одну последнюю запись
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="text-blue-500 mb-4">
                            <?php
                            $svg_code = get_field('svg');
                            if ($svg_code) {
                                echo $svg_code; // Выведет чистый SVG без изменений
                            }
                            ?>
                        </div>
                        <h3 class="text-xl font-semibold mb-2"><?php the_title(); ?></h3>
                        <p class="text-gray-600"><?php the_content(); ?></p>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>




        </div>
    </div>
</section>

<?php get_footer(); ?>
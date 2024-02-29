<?php
get_header();
?>
<?php
while (have_posts()) {
    the_post();
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php the_title(); ?></h1>
            <p class="lead"><span>Tác giả <?php echo get_the_author(); ?>, vào ngày <?php the_time('d.m.y'); ?> trong chủ đề <?php echo get_the_category_list(', '); ?></span></p>
        </div>
    </div>
    <div class="container">
        <p><?php the_content(); ?></p>


    </div>

<?php
}
?>
<div class="container"><?php
                        previous_post_link();
                        next_post_link(); ?></div>
<?php

get_footer();
?>
<?php
get_header();
?>

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="img-overlay"></div>

                <img class="first-slide" src="http://wp-academy.local/wp-content/uploads/2024/02/1.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption container text-left">
                        <h1>Lập Trình Front End</h1>
                        <p>Lập trình Front End là việc sử dụng các ngôn ngữ HTML, CSS hay ngôn ngữ lập trình Javascript để các lập trình viên thiết kế ra các giao diện ứng dụng hoặc trang web cho người dùng.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img-overlay"></div>
                <img class="second-slide" src="http://wp-academy.local/wp-content/uploads/2024/02/2.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption container">
                        <h1>Lập trình Back end</h1>
                        <p>Lập trình backend có nghĩa là làm việc trên phần mềm phía máy chủ nhằm xử lý và cung cấp dữ liệu cho phía front-end.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="img-overlay"></div>
                <img class="third-slide" src="http://wp-academy.local/wp-content/uploads/2024/02/3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption container text-right">
                        <h1>Cơ Sở Dữ Liệu</h1>
                        <p>Cơ sở dữ liệu (tiếng Anh: Database) là một tập hợp các dữ liệu có tổ chức liên quan đến nhau, thường được lưu trữ và truy cập điện tử từ hệ thống máy tính.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="http://wp-academy.local/wp-content/uploads/2024/02/html-rounded-circle.png" alt="">
                <h2>Lập Trình Front End</h2>
                <p>HTML/CSS. JavaScript. React. TypeScript.Angular.Vue…</p>
                <a class="btn btn-secondary" href="#" role="button">Xem chi tiết</a>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="http://wp-academy.local/wp-content/uploads/2024/02/php-rounded-circle.png" alt="">
                <h2>Lập trình Back end</h2>
                <p>
                    PHP. NodeJS. Python. Golang. Ruby. Java. C#. Perl. JavaScript
                </p>
                <a class="btn btn-secondary" href="#" role="button">Xem chi tiết</a>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="http://wp-academy.local/wp-content/uploads/2024/02/MySQL-rounded-circle.png" alt="">
                <h2>Cơ Sở Dữ Liệu</h2>
                <p>MySQL. SQLServer. MongoDB. PostgreSQL. Oracle. Amazon Aurora.
                </p>
                <a class="btn btn-secondary" href="#" role="button">Xem chi tiết</a>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</main>

<div class="container">
    <h2 class="display-4 lead">Các bài viết hữu ích</h2>
    <div class="row">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <div class="col-lg-4">
                <h2><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span><?php
                        echo the_time('d.m.y');
                        echo "&nbsp;";
                        echo "Bởi " . get_the_author();
                        echo "&nbsp;";
                        ?><i class="bi bi-folder"> </i><?php echo get_the_category_list(', '); ?>
                </span>
                <div>
                    <?php
                    the_post_thumbnail(); ?>
                </div>
                <p><?php echo wp_trim_words(get_the_content()); ?></p>
            </div>
        <?
        }
        the_posts_pagination();
        ?>



    </div>
</div>
<?php
get_footer();

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Góc Lập Trình</a>
                <!-- Nav mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Nav Desktop, Tablet -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Front End Developer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Back End Developer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SQL Developer</a>
                        </li>
                    </ul> -->
                    <?php
                    wp_nav_menu(
                        array(
                            // 'menu' => 'Primary Menu',
                            'menu_class' => 'navbar-nav mr-auto',
                            'theme_location' => 'header-menu',
                            // 'container_class' => 'collapse navbar-collapse'
                        )
                    );
                    ?>
                    <!-- Search textbox & search button -->
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
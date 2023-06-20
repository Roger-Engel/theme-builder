<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Bodoni MT", Didot, "Didot LT STD", "Book Antiqua", Garamond, "Times New Roman", serif;
        }

        .navbar {
            background: linear-gradient(to right, #054A91, #3E7CB1);
            transition: background 0.3 ease;
            height: 60px;
            /* Adjust the height as needed */
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar ul {
            display: flex;
            justify-content: flex-end;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar a {
            display: block;
            padding: 10px 20px;
            color: #ffffff;
            /* Text color */
            text-decoration: none;
        }

        .navbar a:hover {
            /* Hover background color */
            color: #054A91;
            /* Hover text color */
        }
    </style>
</head>

<body>

</body>

</html>
<nav class="navbar">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/droger.png" width="fit-content" height="50px">
    </a>

    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation')); ?>
</nav>
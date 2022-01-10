# Wordpress theming from scratch

Wordpress theming reminder

## Theme bare minimum
- Create new folder
- create index.php
- create styles.css with comments

## The main php pages
- screenshot.png (1200 x 900)
- 404.php
- archive.php
- front-page.php
- page.php
- functions.php (Load styles, js and menu locations)
- index.php
- search.php
- single.php

## Adding the front page
- Tell wordpress to use front-page has front page

## Add includes to organize code

## Adding templates

Wordpress will recognise as a template all php files starting with the name "template-mytemplateName.php"

## Adding navigation
https://www.youtube.com/watch?v=TmmLRv9yY0M&list=PLgFB6lmeXFOpHnNmQ4fdIYA5X_9XhjJ9d&index=5

`
    // in functions.php
    // Menus
    <?php
        wp_nav_menu(array(
            'theme_location' => 'top-menu',
            'container_class' => 'top-menu'
        ));
    ?>

`
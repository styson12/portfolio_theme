<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>
<body <?php body_class();?>>

<header>
    <div class="jumbotron text-left" id="jumbo">
        <h4 class="name"><?php bloginfo('name');?></h4> 
        <h3 class="title"><?php bloginfo('description');?></h3>
        <div class="nav_container">
            <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'navigation',
                    )
                    );?>
        </div>
    </div>
</header>
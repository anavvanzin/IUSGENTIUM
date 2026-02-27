<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="header-inner">
        <a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>">
            <span>Ius Gentium UFSC</span>
        </a>
        <nav class="main-navigation" aria-label="<?php esc_attr_e('Navegação principal', 'ius-gentium'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-principal',
                'container' => false,
                'fallback_cb' => 'wp_page_menu',
            ]);
            ?>
        </nav>
    </div>
</header>

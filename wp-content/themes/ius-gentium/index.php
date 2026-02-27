<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="section">
    <h1 class="section-title"><?php bloginfo('name'); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="card" style="margin-bottom:1rem;">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e('Nenhum conteúdo encontrado.', 'ius-gentium'); ?></p>
    <?php endif; ?>
</main>
<?php
get_footer();

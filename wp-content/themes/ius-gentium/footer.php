<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="footer-inner">
        <div>
            <strong>UFSC · Ius Gentium</strong>
            <p><?php echo esc_html(date_i18n('Y')); ?> © Grupo de Pesquisa em Direito Internacional</p>
        </div>
        <div class="footer-redes">
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">Instagram</a>
            <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">YouTube</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

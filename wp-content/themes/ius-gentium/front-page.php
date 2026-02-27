<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section class="hero" id="inicio">
    <div class="section">
        <h1>Grupo de Pesquisa em Direito Internacional · Ius Gentium UFSC</h1>
        <p>
            Produção acadêmica, debate qualificado e ações de extensão sobre direito internacional público, direitos humanos e governança global.
        </p>
    </div>
</section>

<section class="section" id="publicacoes">
    <h2 class="section-title">Publicações Recentes</h2>
    <div class="grid grid-publicacoes">
        <?php
        $publicacoes = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 6,
        ]);

        if ($publicacoes->have_posts()) :
            while ($publicacoes->have_posts()) :
                $publicacoes->the_post();
                ?>
                <article class="card">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <article class="card"><h3>Dossiê sobre Direito do Mar</h3><p>Análises críticas sobre jurisdição, soberania e recursos naturais.</p></article>
            <article class="card"><h3>Boletim Ius Gentium #01</h3><p>Resumo das atividades recentes do grupo e chamadas abertas.</p></article>
            <article class="card"><h3>Artigo: Cooperação Sul-Sul</h3><p>Panorama de práticas diplomáticas e seus impactos regionais.</p></article>
        <?php endif; ?>
    </div>
</section>

<section class="section" id="eventos">
    <h2 class="section-title">Eventos e Agenda</h2>
    <ul class="evento-lista">
        <?php
        $eventos = new WP_Query([
            'post_type' => 'evento',
            'posts_per_page' => 4,
        ]);

        if ($eventos->have_posts()) :
            while ($eventos->have_posts()) :
                $eventos->the_post();
                $timestamp = get_post_time('U');
                ?>
                <li class="evento-item">
                    <div class="evento-data">
                        <span><?php echo esc_html(date_i18n('d', $timestamp)); ?></span>
                        <?php echo esc_html(date_i18n('M', $timestamp)); ?>
                    </div>
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?></p>
                    </div>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <li class="evento-item"><div class="evento-data"><span>18</span>Mar</div><div><h3>Seminário de Direito Internacional Ambiental</h3><p>Debate com pesquisadores nacionais e convidados internacionais.</p></div></li>
            <li class="evento-item"><div class="evento-data"><span>05</span>Abr</div><div><h3>Oficina de Escrita Acadêmica</h3><p>Orientações para produção de artigos e projetos de pesquisa.</p></div></li>
        <?php endif; ?>
    </ul>
</section>

<section class="section" id="membros">
    <h2 class="section-title">Membros</h2>
    <div class="grid grid-membros">
        <?php
        $membros = new WP_Query([
            'post_type' => 'membro',
            'posts_per_page' => 8,
        ]);

        if ($membros->have_posts()) :
            while ($membros->have_posts()) :
                $membros->the_post();
                ?>
                <article class="card">
                    <div class="membro-foto">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <p class="membro-cargo"><?php echo esc_html(get_post_meta(get_the_ID(), 'cargo', true)); ?></p>
                    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <article class="card"><h3>Profa. Dra. Coordenação</h3><p class="membro-cargo">Coordenadora</p><p>Pesquisa em direitos humanos e mecanismos internacionais de proteção.</p></article>
            <article class="card"><h3>Pesquisador Doutorando</h3><p class="membro-cargo">Pesquisador</p><p>Estudos sobre tribunais internacionais e solução pacífica de controvérsias.</p></article>
            <article class="card"><h3>Bolsista de Iniciação Científica</h3><p class="membro-cargo">Discente</p><p>Projetos de pesquisa sobre migrações e proteção internacional.</p></article>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();

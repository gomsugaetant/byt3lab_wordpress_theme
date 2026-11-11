<?php
/**
 * Template Name: Technologies (Divisions Overview)
 * Page d'ensemble présentant l'architecture des 5 divisions technologiques.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<main id="primary" class="site-main">

    <!-- Hero Technologies -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 800px;">
                <div class="b-hero__signature">
                    Architecture Stratégique
                </div>
                <h1 class="b-hero__title">
                    L'Ingénierie à travers les Domaines Technologiques
                </h1>
                <p class="b-hero__subtitle">
                    Byt3Lab structure son développement autour de cinq divisions technologiques complémentaires. Chaque division est présentée selon son niveau réel de maturité : certaines sont pleinement opérationnelles, d'autres en cours de développement ou constituent des orientations stratégiques.
                </p>
                <div class="b-hero__actions">
                    <a href="#divisions-list" class="b-btn b-btn--lg b-btn--primary">
                        <span>Découvrir les 5 divisions</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <?php echo byt3lab_icon('handshake', 18); ?>
                        <span>Partenariats technologiques</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Liste détaillée des 5 divisions -->
    <section class="b-section" id="divisions-list">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Les 5 Piliers Technologiques</span>
                <h2 class="b-title">Nos Axes Stratégiques d'Ingénierie</h2>
                <p class="b-lead">Une approche rigoureuse pour concevoir, déployer et exploiter des technologies durables.</p>
            </div>

            <?php
            $div_query = new WP_Query([
                'post_type'      => 'byt3lab_division',
                'posts_per_page' => 5,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);
            ?>

            <div class="b-divisions-grid">
                <?php if ($div_query->have_posts()) : while ($div_query->have_posts()) : $div_query->the_post(); 
                    $d_id = get_the_ID();
                    $status = get_post_meta($d_id, '_byt3lab_status', true) ?: 'active';
                    $icon_id = get_post_meta($d_id, '_byt3lab_icon', true) ?: 'code';
                    $expertise = byt3lab_meta_lines($d_id, '_byt3lab_division_expertise');
                    $is_active = in_array($status, ['active']);
                ?>
                    <article class="b-card b-div-card <?php echo $is_active ? 'b-div-card--active' : 'b-div-card--sub'; ?>">
                        <div class="b-card__header">
                            <div class="b-card__icon-wrap">
                                <?php echo byt3lab_icon($icon_id, 24); ?>
                            </div>
                            <?php echo byt3lab_status_badge($status); ?>
                        </div>

                        <h3 class="b-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <p class="b-card__text">
                            <?php echo esc_html(get_the_excerpt()); ?>
                        </p>

                        <?php if (!empty($expertise)) : ?>
                            <div class="b-card__tags">
                                <?php foreach (array_slice($expertise, 0, 5) as $tag) : ?>
                                    <span class="b-tag"><?php echo esc_html($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="b-card__footer">
                            <a href="<?php the_permalink(); ?>" class="b-btn b-btn--ghost">
                                <span>Consulter la division complète &rarr;</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>

    <!-- Tableau synthétique de gouvernance et maturité -->
    <section class="b-section b-section--alt" id="maturite-synthese">
        <div class="b-container">
            <div class="b-section-head">
                <span class="b-eyebrow">Gouvernance &amp; Transparence</span>
                <h2 class="b-title">Matrice de Maturité des Divisions</h2>
                <p class="b-lead">Pour nos clients, investisseurs et partenaires, voici l'état d'avancement réel de chaque division.</p>
            </div>

            <div style="background: var(--c-white); border: 1px solid var(--c-gray-200); border-radius: var(--radius-lg); overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: var(--c-gray-50); border-bottom: 2px solid var(--c-gray-200);">
                            <th style="padding: 16px 20px; font-family: var(--font-heading); font-size: 12px; text-transform: uppercase; color: var(--c-navy-950);">Division</th>
                            <th style="padding: 16px 20px; font-family: var(--font-heading); font-size: 12px; text-transform: uppercase; color: var(--c-navy-950);">Statut</th>
                            <th style="padding: 16px 20px; font-family: var(--font-heading); font-size: 12px; text-transform: uppercase; color: var(--c-navy-950);">Produits &amp; Activités</th>
                            <th style="padding: 16px 20px; font-family: var(--font-heading); font-size: 12px; text-transform: uppercase; color: var(--c-navy-950);">Modalité de Déploiement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--c-gray-200);">
                            <td style="padding: 18px 20px; font-weight: 700; color: var(--c-navy-950);">
                                <a href="<?php echo esc_url(home_url('/technologies/logiciel-numerique/')); ?>">Logiciel &amp; Numérique</a>
                            </td>
                            <td style="padding: 18px 20px;"><?php echo byt3lab_status_badge('active'); ?></td>
                            <td style="padding: 18px 20px;">MELODI ERP, SUKU, Projets sur-mesure</td>
                            <td style="padding: 18px 20px; color: var(--c-gray-600);">Technologies propriétaires &amp; ingénierie interne</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--c-gray-200);">
                            <td style="padding: 18px 20px; font-weight: 700; color: var(--c-navy-950);">
                                <a href="<?php echo esc_url(home_url('/technologies/infrastructure-cloud/')); ?>">Infrastructure &amp; Cloud</a>
                            </td>
                            <td style="padding: 18px 20px;"><?php echo byt3lab_status_badge('active'); ?></td>
                            <td style="padding: 18px 20px;">BWS — Byt3Lab Web Services</td>
                            <td style="padding: 18px 20px; color: var(--c-gray-600);">Services managés appuyés sur des infrastructures partenaires</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--c-gray-200);">
                            <td style="padding: 18px 20px; font-weight: 700; color: var(--c-navy-950);">
                                <a href="<?php echo esc_url(home_url('/technologies/materiel-reseaux/')); ?>">Matériel &amp; Réseaux</a>
                            </td>
                            <td style="padding: 18px 20px;"><?php echo byt3lab_status_badge('in_development'); ?></td>
                            <td style="padding: 18px 20px;">Équipements, serveurs, baies, connectivité</td>
                            <td style="padding: 18px 20px; color: var(--c-gray-600);">Intégration et distribution de constructeurs tiers (Byt3Lab n'est pas fabricant)</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--c-gray-200);">
                            <td style="padding: 18px 20px; font-weight: 700; color: var(--c-navy-950);">
                                <a href="<?php echo esc_url(home_url('/technologies/technologies-industrielles/')); ?>">Technologies Industrielles</a>
                            </td>
                            <td style="padding: 18px 20px;"><?php echo byt3lab_status_badge('strategic'); ?></td>
                            <td style="padding: 18px 20px;">IoT, capteurs, automatisation, supervision</td>
                            <td style="padding: 18px 20px; color: var(--c-gray-600);">Projets pilotes &amp; recherche appliquée avec des partenaires industriels</td>
                        </tr>
                        <tr>
                            <td style="padding: 18px 20px; font-weight: 700; color: var(--c-navy-950);">
                                <a href="<?php echo esc_url(home_url('/technologies/technologies-energetiques/')); ?>">Technologies Énergétiques</a>
                            </td>
                            <td style="padding: 18px 20px;"><?php echo byt3lab_status_badge('strategic'); ?></td>
                            <td style="padding: 18px 20px;">Solaire, stockage batteries, supervision</td>
                            <td style="padding: 18px 20px; color: var(--c-gray-600);">Intégration de solutions partenaires avant évolution propriétaire</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Vous souhaitez collaborer avec une division ?</h2>
                <p>Que vous soyez une entreprise en quête de solutions ou un partenaire technologique, nos équipes sont à votre écoute.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Contacter nos ingénieurs</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Devenir partenaire</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();


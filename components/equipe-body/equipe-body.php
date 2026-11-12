<?php
/**
 * Component: equipe-body
 * Organisation & Capital Humain BYT3LAB
 */
if (!defined('ABSPATH')) {
    exit;
}

$team_query = new WP_Query([
    'post_type'      => 'byt3lab_team',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => ['menu_order' => 'ASC', 'date' => 'ASC'],
]);
?>

<div class="component-equipe-body">
    <!-- Pôles Opérationnels & Divisions -->
    <section class="b-section" id="poles" style="padding-top: 0;">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Structure Opérationnelle</span>
                <h2 class="b-title">Organisation des Équipes &amp; Domaines d'Expertise</h2>
                <p class="b-lead">
                    Nos collaborateurs interviennent sur des chaînes de valeur complémentaires, de la conception architecturale à l'exploitation critique.
                </p>
            </div>

            <div class="b-grid b-grid--3">
                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('code', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Software</span>
                    </div>
                    <h3 class="b-card__title">Ingénierie Logicielle &amp; ERP</h3>
                    <p class="b-card__text">
                        Architectes logiciels, ingénieurs backend et frontend, spécialistes des bases de données et concepteurs de la suite de gestion modulaire MELODI.
                    </p>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('cloud', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Cloud &amp; DevOps</span>
                    </div>
                    <h3 class="b-card__title">Cloud, Réseaux &amp; BWS</h3>
                    <p class="b-card__text">
                        Ingénieurs systèmes, administrateurs réseau et spécialistes de la haute disponibilité pilotant les services d'hébergement managé BWS et l'infrastructure du groupe.
                    </p>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('palette', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Studio NGRAFIX</span>
                    </div>
                    <h3 class="b-card__title">Design &amp; Marque Digitale</h3>
                    <p class="b-card__text">
                        Directeurs artistiques, designers UI/UX et spécialistes en communication visuelle concevant les identités et interfaces de marque du groupe.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

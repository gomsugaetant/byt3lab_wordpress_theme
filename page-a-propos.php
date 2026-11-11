<?php
/**
 * Template Name: À Propos du Groupe BYT3LAB
 * Présentation institutionnelle : vision, mission, valeurs, organisation et histoire du groupe.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<main id="primary" class="site-main">

    <!-- Hero À Propos -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div class="b-hero__signature">
                    Groupe Technologique Africain
                </div>
                <h1 class="b-hero__title">
                    Bâtir les Technologies qui Propulsent les Entreprises et les Infrastructures
                </h1>
                <p class="b-hero__subtitle">
                    Byt3Lab est né de la passion de l'ingénierie logicielle et de la conviction que l'Afrique dispose du talent et des capacités pour concevoir, intégrer et opérer ses propres technologies souveraines.
                </p>
                <div class="b-hero__actions">
                    <a href="#organisation" class="b-btn b-btn--lg b-btn--primary">
                        <span>Organisation du groupe</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Rejoindre nos équipes</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision, Mission & Histoire -->
    <section class="b-section" id="vision-mission">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: stretch;">
                
                <!-- Vision -->
                <div class="b-card" style="padding: 36px; background: var(--c-navy-950); color: var(--c-white); border-color: transparent;">
                    <span class="b-eyebrow b-eyebrow--white">Vision</span>
                    <h2 class="b-title" style="color: #FFF; font-size: 1.55rem;">Notre Vision</h2>
                    <p style="color: var(--c-gray-300); font-size: 15.5px; line-height: 1.7; margin: 0;">
                        Construire un groupe technologique africain d'envergure internationale, capable de concevoir, développer et déployer des solutions innovantes répondant aux défis des entreprises, des industries et des infrastructures de demain.
                    </p>
                </div>

                <!-- Mission -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-blue-500);">
                    <span class="b-eyebrow">Mission</span>
                    <h2 class="b-title" style="font-size: 1.55rem;">Notre Mission</h2>
                    <p style="color: var(--c-gray-700); font-size: 15.5px; line-height: 1.7; margin: 0;">
                        Concevoir, développer, intégrer et exploiter des technologies fiables et pérennes qui répondent aux impératifs économiques, industriels et numériques des organisations.
                    </p>
                </div>

                <!-- Ancrage & Histoire -->
                <div class="b-card" style="padding: 36px; border-top: 4px solid var(--c-navy-700);">
                    <span class="b-eyebrow">Origines &amp; Évolution</span>
                    <h2 class="b-title" style="font-size: 1.55rem;">Notre Histoire</h2>
                    <p style="color: var(--c-gray-700); font-size: 15px; line-height: 1.7; margin: 0;">
                        Démarré comme collectif de développeurs et d'ingénieurs au Cameroun, Byt3Lab a progressivement consolidé ses compétences pour évoluer vers un groupe structuré en divisions technologiques, produits logiciels et marque créative dédiée.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Nos Valeurs Fondamentales -->
    <section class="b-section b-section--alt" id="valeurs">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Principes Directeurs</span>
                <h2 class="b-title">Les Valeurs qui Guident Notre Ingénierie</h2>
                <p class="b-lead">Chaque solution livrée porte l'empreinte de nos engagements éthiques et professionnels.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Innovation</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Résoudre les problématiques complexes par des approches neuves et audacieuses.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Excellence technique</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Refus des raccourcis : architecture propre, code documenté et sécurité éprouvée.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Fiabilité</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Assurer la continuité opérationnelle et mériter la confiance de nos partenaires.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Ingénierie</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">La rigueur scientifique appliquée aux opérations physiques et numériques.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Collaboration</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Construire avec nos clients et notre écosystème de partenaires.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Impact</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Générer des gains de productivité et de souveraineté mesurables sur le terrain.</p>
                </div>

                <div class="b-card" style="padding: 28px;">
                    <h3 style="font-size: 1.2rem; color: var(--c-navy-950); margin-bottom: 8px;">Vision à long terme</h3>
                    <p style="font-size: 13.5px; color: var(--c-gray-600); margin: 0;">Bâtir des infrastructures solides conçues pour durer des décennies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Architecture & Organisation de l'Écosystème -->
    <section class="b-section" id="organisation">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Structure Stratégique</span>
                <h2 class="b-title">L'Organisation du Groupe BYT3LAB</h2>
                <p class="b-lead">Une articulation claire entre marque mère institutionnelle, divisions, produits et marques spécialisées.</p>
            </div>

            <div style="background: var(--c-gray-50); border: 1px solid var(--c-gray-200); border-radius: var(--radius-xl); padding: clamp(2rem, 5vw, 3.5rem); max-width: 960px; margin: 0 auto;">
                
                <!-- Niveau 1 : Marque Mère -->
                <div style="background: var(--c-navy-950); color: #FFF; border-radius: var(--radius-lg); padding: 24px; text-align: center; margin-bottom: 32px;">
                    <div style="font-family: var(--font-heading); font-size: 11px; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--c-cyan-400); margin-bottom: 6px;">
                        MARQUE INSTITUTIONNELLE DOMINANTE
                    </div>
                    <div style="font-family: var(--font-heading); font-size: 26px; font-weight: 700;">BYT3LAB — Technology &amp; Innovation Group</div>
                    <div style="font-size: 13px; color: var(--c-gray-300); margin-top: 4px;">ENGINEERING THE TECHNOLOGIES OF TOMORROW.</div>
                </div>

                <!-- Niveau 2 : Grille des branches -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                    
                    <!-- Bloc 1 : 5 Divisions Tech -->
                    <div class="b-card" style="padding: 24px; border-top: 4px solid var(--c-blue-500);">
                        <h3 style="font-size: 1.15rem; margin-bottom: 12px; color: var(--c-navy-950);">5 Divisions Technologiques</h3>
                        <p style="font-size: 13px; color: var(--c-gray-600); margin-bottom: 16px;">Les axes de développement stratégique :</p>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: var(--c-gray-700); display: flex; flex-direction: column; gap: 6px;">
                            <li>• Logiciel &amp; Numérique</li>
                            <li>• Infrastructure &amp; Cloud</li>
                            <li>• Matériel &amp; Réseaux</li>
                            <li>• Technologies Industrielles</li>
                            <li>• Technologies Énergétiques</li>
                        </ul>
                    </div>

                    <!-- Bloc 2 : Produits & Services -->
                    <div class="b-card" style="padding: 24px; border-top: 4px solid var(--c-navy-700);">
                        <h3 style="font-size: 1.15rem; margin-bottom: 12px; color: var(--c-navy-950);">Produits &amp; Offres</h3>
                        <p style="font-size: 13px; color: var(--c-gray-600); margin-bottom: 16px;">Solutions concrètement exploitées :</p>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: var(--c-gray-700); display: flex; flex-direction: column; gap: 6px;">
                            <li>• <strong>MELODI ERP</strong> (Progiciel de gestion)</li>
                            <li>• <strong>SUKU</strong> (Système scolaire &amp; éducation)</li>
                            <li>• <strong>BWS</strong> (Services d'infrastructure cloud)</li>
                            <li>• Services d'ingénierie &amp; intégration sur-mesure</li>
                        </ul>
                    </div>

                    <!-- Bloc 3 : Studio Créatif NGRAFIX -->
                    <div class="b-card" style="padding: 24px; border-top: 4px solid var(--c-ngx-orange); background: #181818; color: #FFF;">
                        <h3 style="font-size: 1.15rem; margin-bottom: 12px; color: #FFF;">Studio NGRAFIX</h3>
                        <p style="font-size: 13px; color: #AAA; margin-bottom: 16px;">Marque créative spécialisée rattachée :</p>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #DDD; display: flex; flex-direction: column; gap: 6px;">
                            <li>• Brand Identity &amp; Stratégie de marque</li>
                            <li>• Creative Design &amp; UI/UX</li>
                            <li>• Communication Digitale</li>
                            <li>• Production Média &amp; Audiovisuelle</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Présence Géographique -->
    <section class="b-section b-section--alt">
        <div class="b-container b-container--narrow" style="text-align: center;">
            <span class="b-eyebrow">Présence</span>
            <h2 class="b-title">Au Cœur de l'Afrique Centrale</h2>
            <p class="b-lead" style="margin: 0 auto 32px auto;">
                Byt3Lab opère principalement depuis ses implantations de <strong>Douala</strong> (capitale économique) et de <strong>Yaoundé</strong> (capitale politique) au Cameroun, avec une capacité d'intervention et de déploiement à l'échelle régionale.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--primary">
                    <?php echo byt3lab_icon('map-pin', 16); ?>
                    <span>Coordonnées de nos bureaux</span>
                </a>
                <a href="<?php echo esc_url(home_url('/equipe/')); ?>" class="b-btn b-btn--secondary">
                    <span>Rencontrer notre équipe</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Final À Propos -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Construisons l'avenir ensemble</h2>
                <p>Découvrez comment Byt3Lab peut accompagner la transformation technologique de votre organisation.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Prendre contact</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Rejoindre nos partenaires</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();

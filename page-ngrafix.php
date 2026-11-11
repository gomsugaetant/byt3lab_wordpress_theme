<?php
/**
 * Template Name: NGRAFIX Studio Créatif
 * Page institutionnelle et commerciale dédiée au studio créatif NGRAFIX.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<div class="theme-ngrafix" style="background-color: var(--c-ngx-black); color: var(--c-white); min-height: 100vh;">

    <!-- Ruban d'appartenance à l'écosystème -->
    <div style="background: rgba(247, 134, 30, 0.1); border-bottom: 1px solid rgba(247, 134, 30, 0.25); padding: 10px 0; font-family: var(--font-heading); font-size: 12px; color: var(--c-ngx-orange); text-align: center;">
        <div class="b-container">
            <strong>NGRAFIX</strong> est le studio créatif &amp; d'expérience de marque rattaché à l'écosystème technologique <strong>BYT3LAB</strong>.
        </div>
    </div>

    <!-- 1. Hero NGRAFIX -->
    <section class="b-hero" style="background: linear-gradient(180deg, #0F0F0F 0%, #1A1A1A 100%); border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 48px; align-items: center;">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 8px; font-family: var(--font-heading); font-size: 11px; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--c-ngx-orange); margin-bottom: 16px;">
                        <span>CREATIVE &amp; BRAND EXPERIENCE STUDIO</span>
                    </div>

                    <h1 style="font-size: clamp(2.4rem, 4.5vw, 3.8rem); color: var(--c-white); line-height: 1.1; margin-bottom: 20px; font-weight: 700;">
                        Créer des identités.<br>
                        <span style="color: var(--c-ngx-orange);">Façonner des expériences.</span>
                    </h1>

                    <p style="font-size: 1.2rem; color: #A3A3A3; line-height: 1.6; margin-bottom: 32px; max-width: 580px;">
                        NGRAFIX accompagne les entreprises, marques et institutions dans la conception d'identités distinctives, de chartes graphiques de référence et d'expériences de marque qui marquent les esprits.
                    </p>

                    <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                        <a href="#services" class="b-btn b-btn--lg" style="background: var(--c-ngx-orange); color: #FFF; border-color: var(--c-ngx-orange);">
                            <span>Nos 4 domaines d'activité</span>
                            <?php echo byt3lab_icon('arrow-right', 18); ?>
                        </a>
                        <a href="#contact-ngrafix" class="b-btn b-btn--lg b-btn--outline-dark">
                            <span>Lancer un projet de marque</span>
                        </a>
                    </div>
                </div>

                <!-- Visuel Identité NGRAFIX -->
                <div style="text-align: center;">
                    <div style="display: inline-block; padding: 24px; border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-xl); background: rgba(255,255,255,0.02); max-width: 440px;">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ngrafix.jpg'); ?>" alt="NGRAFIX Studio" style="border-radius: var(--radius-lg); width: 100%; height: auto;" />
                        <div style="margin-top: 16px; font-family: var(--font-heading); font-size: 12px; color: #777; letter-spacing: 0.05em;">
                            Studio Spécialisé de l'Écosystème Byt3Lab
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Philosophie Créative -->
    <section class="b-section" style="background: #141414; border-bottom: 1px solid rgba(255,255,255,0.06);">
        <div class="b-container b-container--narrow" style="text-align: center;">
            <span class="b-eyebrow" style="color: var(--c-ngx-orange);">Philosophie du studio</span>
            <h2 style="color: #FFF; font-size: clamp(1.8rem, 3vw, 2.6rem); margin-bottom: 24px;">
                La puissance de la technologie a besoin de la clarté du design.
            </h2>
            <p style="font-size: 16.5px; color: #B3B3B3; line-height: 1.8; margin-bottom: 0;">
                Chez NGRAFIX, nous sommes convaincus qu'une marque forte ne se résume pas à un logo : elle incarne une vision, inspire la confiance de ses partenaires et rend l'excellence technique immédiatement compréhensible. Nous concevons chaque point de contact pour créer un lien durable entre votre organisation et vos publics.
            </p>
        </div>
    </section>

    <!-- 3. Les Quatre Domaines d'Activité -->
    <section class="b-section" id="services" style="background: #0F0F0F;">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow" style="color: var(--c-ngx-orange);">Nos Domaines d'Intervention</span>
                <h2 style="color: #FFF; font-size: clamp(1.8rem, 3vw, 2.6rem);">Quatre Pôles d'Excellence Créative</h2>
                <p style="color: #888;">Une prise en charge globale, de la stratégie initiale à la production des supports finaux.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                
                <!-- Pôle 1 : Brand Identity -->
                <div class="b-card" style="background: #181818; border-color: rgba(255,255,255,0.08); padding: 36px; color: #FFF;" id="brand-identity">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 11px; font-weight: 700; margin-bottom: 12px; letter-spacing: 0.1em;">
                        01 · IDENTITÉ DE MARQUE
                    </div>
                    <h3 style="color: #FFF; font-size: 1.35rem; margin-bottom: 16px;">Brand Identity</h3>
                    <p style="color: #999; font-size: 14px; line-height: 1.6; margin-bottom: 24px;">
                        Création et refonte d'identités institutionnelles fortes, cohérentes et prêtes pour l'international.
                    </p>
                    <ul class="b-checklist" style="color: #CCC;">
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Stratégie de marque (Brand Strategy)</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Conception de logo &amp; symbolique</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Chartes graphiques 360° &amp; Guidelines</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Naming &amp; Territoire d'expression</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Branding corporate &amp; institutionnel</span></li>
                    </ul>
                </div>

                <!-- Pôle 2 : Creative Design -->
                <div class="b-card" style="background: #181818; border-color: rgba(255,255,255,0.08); padding: 36px; color: #FFF;" id="creative-design">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 11px; font-weight: 700; margin-bottom: 12px; letter-spacing: 0.1em;">
                        02 · DESIGN CRÉATIF
                    </div>
                    <h3 style="color: #FFF; font-size: 1.35rem; margin-bottom: 16px;">Creative Design</h3>
                    <p style="color: #999; font-size: 14px; line-height: 1.6; margin-bottom: 24px;">
                        Conception visuelle soignée sur tous les supports physiques et digitaux de votre entreprise.
                    </p>
                    <ul class="b-checklist" style="color: #CCC;">
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Design graphique d'impact</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Design publicitaire &amp; affichage</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Packaging &amp; habillage produits</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Design éditorial, rapports &amp; plaquettes</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Design d'interface UI/UX</span></li>
                    </ul>
                </div>

                <!-- Pôle 3 : Digital Communication -->
                <div class="b-card" style="background: #181818; border-color: rgba(255,255,255,0.08); padding: 36px; color: #FFF;" id="digital-communication">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 11px; font-weight: 700; margin-bottom: 12px; letter-spacing: 0.1em;">
                        03 · COMMUNICATION DIGITALE
                    </div>
                    <h3 style="color: #FFF; font-size: 1.35rem; margin-bottom: 16px;">Digital Communication</h3>
                    <p style="color: #999; font-size: 14px; line-height: 1.6; margin-bottom: 24px;">
                        Stratégie de présence en ligne pour amplifier votre notoriété et fédérer votre communauté.
                    </p>
                    <ul class="b-checklist" style="color: #CCC;">
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Marketing digital &amp; acquisition</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Social Media Management (SMM)</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Stratégie de contenu &amp; brand voice</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Campagnes digitales ciblées</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Communication de marque omnicanale</span></li>
                    </ul>
                </div>

                <!-- Pôle 4 : Media Production -->
                <div class="b-card" style="background: #181818; border-color: rgba(255,255,255,0.08); padding: 36px; color: #FFF;" id="media-production">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 11px; font-weight: 700; margin-bottom: 12px; letter-spacing: 0.1em;">
                        04 · PRODUCTION MÉDIA
                    </div>
                    <h3 style="color: #FFF; font-size: 1.35rem; margin-bottom: 16px;">Media Production</h3>
                    <p style="color: #999; font-size: 14px; line-height: 1.6; margin-bottom: 24px;">
                        Création audiovisuelle professionnelle pour raconter vos réussites en images fortes.
                    </p>
                    <ul class="b-checklist" style="color: #CCC;">
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Photographie d'entreprise &amp; produits</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Production vidéo &amp; films corporate</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Motion design &amp; animation graphique</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Création de formats courts (Reels, Shorts)</span></li>
                        <li><span style="color: var(--c-ngx-orange);">✓</span> <span>Post-production &amp; étalonnage</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Processus de Travail -->
    <section class="b-section" style="background: #141414; border-top: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06);">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow" style="color: var(--c-ngx-orange);">Méthodologie</span>
                <h2 style="color: #FFF; font-size: clamp(1.8rem, 3vw, 2.6rem);">Notre Processus Créatif</h2>
                <p style="color: #888;">Une démarche structurée en cinq temps pour garantir l'impact et la cohérence.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div style="background: #1F1F1F; padding: 28px; border-radius: var(--radius-md); border-top: 3px solid var(--c-ngx-orange);">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 12px; font-weight: 700; margin-bottom: 8px;">01</div>
                    <h3 style="color: #FFF; font-size: 1.15rem; margin-bottom: 8px;">Discovery</h3>
                    <p style="color: #888; font-size: 13px; line-height: 1.5; margin: 0;">Immersion dans vos objectifs d'affaires, vos valeurs et le paysage concurrentiel.</p>
                </div>

                <div style="background: #1F1F1F; padding: 28px; border-radius: var(--radius-md); border-top: 3px solid var(--c-ngx-orange);">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 12px; font-weight: 700; margin-bottom: 8px;">02</div>
                    <h3 style="color: #FFF; font-size: 1.15rem; margin-bottom: 8px;">Strategy</h3>
                    <p style="color: #888; font-size: 13px; line-height: 1.5; margin: 0;">Définition du positionnement de marque, du ton de voix et des axes directeurs.</p>
                </div>

                <div style="background: #1F1F1F; padding: 28px; border-radius: var(--radius-md); border-top: 3px solid var(--c-ngx-orange);">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 12px; font-weight: 700; margin-bottom: 8px;">03</div>
                    <h3 style="color: #FFF; font-size: 1.15rem; margin-bottom: 8px;">Concept</h3>
                    <p style="color: #888; font-size: 13px; line-height: 1.5; margin: 0;">Exploration graphique, pistes créatives et itérations avec vos équipes.</p>
                </div>

                <div style="background: #1F1F1F; padding: 28px; border-radius: var(--radius-md); border-top: 3px solid var(--c-ngx-orange);">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 12px; font-weight: 700; margin-bottom: 8px;">04</div>
                    <h3 style="color: #FFF; font-size: 1.15rem; margin-bottom: 8px;">Design</h3>
                    <p style="color: #888; font-size: 13px; line-height: 1.5; margin: 0;">Déclinaison complète du système visuel, tests d'usage et raffinement des détails.</p>
                </div>

                <div style="background: #1F1F1F; padding: 28px; border-radius: var(--radius-md); border-top: 3px solid var(--c-ngx-orange);">
                    <div style="color: var(--c-ngx-orange); font-family: var(--font-heading); font-size: 12px; font-weight: 700; margin-bottom: 8px;">05</div>
                    <h3 style="color: #FFF; font-size: 1.15rem; margin-bottom: 8px;">Delivery</h3>
                    <p style="color: #888; font-size: 13px; line-height: 1.5; margin: 0;">Livraison des fichiers sources certifiés, guide de marque et suivi de déploiement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Portfolio & Réalisations réelles (aucun faux client) -->
    <section class="b-section" id="portfolio" style="background: #0F0F0F;">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow" style="color: var(--c-ngx-orange);">Réalisations</span>
                <h2 style="color: #FFF; font-size: clamp(1.8rem, 3vw, 2.6rem);">Le Portfolio du Studio</h2>
                <p style="color: #888;">Une sélection de nos projets en identité visuelle, branding et création graphique.</p>
            </div>

            <?php
            $ngx_query = new WP_Query([
                'post_type'      => 'ngrafix_work',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
            ]);
            ?>

            <?php if ($ngx_query->have_posts()) : ?>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
                    <?php while ($ngx_query->have_posts()) : $ngx_query->the_post(); 
                        $client = get_post_meta(get_the_ID(), '_ngrafix_client', true);
                        $year   = get_post_meta(get_the_ID(), '_ngrafix_year', true);
                    ?>
                        <article class="b-card" style="background: #181818; border-color: rgba(255,255,255,0.08); padding: 28px; color: #FFF;">
                            <?php if (has_post_thumbnail()) : ?>
                                <div style="margin: -28px -28px 20px -28px; overflow: hidden; border-radius: var(--radius-lg) var(--radius-lg) 0 0;">
                                    <?php the_post_thumbnail('medium_large', ['style' => 'width:100%; height:200px; object-fit:cover;']); ?>
                                </div>
                            <?php endif; ?>
                            <h3 style="color: #FFF; font-size: 1.2rem; margin-bottom: 6px;"><?php the_title(); ?></h3>
                            <?php if ($client) : ?>
                                <div style="font-size: 12px; color: var(--c-ngx-orange); margin-bottom: 12px; font-weight: 600;">
                                    <?php echo esc_html($client); ?> <?php if ($year) echo '· ' . esc_html($year); ?>
                                </div>
                            <?php endif; ?>
                            <p style="font-size: 13.5px; color: #999; line-height: 1.6; margin: 0;"><?php echo esc_html(get_the_excerpt()); ?></p>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <!-- État sobre et transparent : aucun projet fictif -->
                <div style="background: #181818; border: 1px dashed rgba(255,255,255,0.15); border-radius: var(--radius-lg); padding: 48px 24px; text-align: center; max-width: 620px; margin: 0 auto;">
                    <div style="color: var(--c-ngx-orange); margin-bottom: 16px;">
                        <?php echo byt3lab_icon('palette', 40); ?>
                    </div>
                    <h3 style="color: #FFF; font-size: 1.25rem; margin-bottom: 8px;">Le book de réalisations est disponible sur demande</h3>
                    <p style="font-size: 14px; color: #888; margin-bottom: 24px; line-height: 1.6;">
                        Par respect pour la confidentialité de nos clients ou dans l'attente de leur accord de diffusion, nos études de cas sont partagées lors de nos rendez-vous de cadrage.
                    </p>
                    <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                        <a href="#contact-ngrafix" class="b-btn b-btn--sm" style="background: var(--c-ngx-orange); color: #FFF; border-color: var(--c-ngx-orange);">
                            <span>Solliciter le studio NGRAFIX</span>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61571483432231" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm b-btn--outline-dark">
                            <span>Page officielle Facebook &nearr;</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- 6. CTA Final NGRAFIX -->
    <section class="b-section" id="contact-ngrafix" style="background: #141414; border-top: 1px solid rgba(255,255,255,0.06);">
        <div class="b-container">
            <div style="background: linear-gradient(135deg, #1C1C1C 0%, #2A1A0F 100%); border: 1px solid rgba(247, 134, 30, 0.3); border-radius: var(--radius-xl); padding: clamp(3rem, 6vw, 4.5rem); text-align: center;">
                <span class="b-eyebrow" style="color: var(--c-ngx-orange);">LET'S BUILD YOUR BRAND</span>
                <h2 style="color: #FFF; font-size: clamp(2rem, 3.5vw, 3rem); margin-bottom: 16px;">
                    Construisons une image de marque mémorable.
                </h2>
                <p style="color: #CCC; font-size: 1.15rem; max-width: 620px; margin: 0 auto 32px auto; line-height: 1.6;">
                    Un projet d'identité, une refonte de charte, une campagne ou une production audiovisuelle ? Contactez l'équipe du studio NGRAFIX.
                </p>
                <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg" style="background: var(--c-ngx-orange); color: #FFF; border-color: var(--c-ngx-orange);">
                        <span>Échanger sur votre projet de marque</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="https://wa.me/237696879475" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>WhatsApp direct Studio</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_template_part('components/footer/footer');
get_footer();


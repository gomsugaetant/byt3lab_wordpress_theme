<?php
/**
 * Component: notfound-body
 * 404 Institutional Error View
 */
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="b-section b-section--navy b-notfound">
    <div class="b-container">
        <div class="b-notfound__inner">
            <div class="b-notfound__code">404</div>
            <span class="b-badge b-badge--dark">CODE D'ÉTAT : 404 // RESSOURCE INTROUVABLE</span>
            <h1 class="b-notfound__title">Point de terminaison ou document non localisé</h1>
            <p class="b-notfound__text">
                La ressource demandée n'existe pas ou a été repositionnée dans le cadre de la nouvelle architecture institutionnelle du groupe BYT3LAB.
            </p>

            <div class="b-notfound__actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="b-btn b-btn--primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Retour à l'accueil
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--outline">
                    Signaler une anomalie
                </a>
            </div>

            <div class="b-notfound__sitemap">
                <div class="b-notfound__sitemap-title">Accès direct aux divisions &amp; espaces stratégiques :</div>
                <div class="b-notfound__grid">
                    <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-notfound__link">
                        <span class="b-notfound__dot"></span>
                        <div>
                            <strong>Pôle Technologies</strong>
                            <small>Les 5 divisions du groupe</small>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/produits/')); ?>" class="b-notfound__link">
                        <span class="b-notfound__dot"></span>
                        <div>
                            <strong>Produits &amp; Logiciels</strong>
                            <small>MELODI ERP, SUKU, BWS</small>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="b-notfound__link">
                        <span class="b-notfound__dot"></span>
                        <div>
                            <strong>Services Commerciaux</strong>
                            <small>Ingénierie, Cloud &amp; Intégration</small>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="b-notfound__link">
                        <span class="b-notfound__dot"></span>
                        <div>
                            <strong>NGRAFIX Creative Studio</strong>
                            <small>Brand Identity &amp; Expérience de marque</small>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/recherche-innovation/')); ?>" class="b-notfound__link">
                        <span class="b-notfound__dot"></span>
                        <div>
                            <strong>Recherche &amp; Innovation</strong>
                            <small>IA appliquée &amp; Systèmes connectés</small>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-notfound__link">
                        <span class="b-notfound__dot"></span>
                        <div>
                            <strong>Espace Partenaires</strong>
                            <small>Opportunités d'intégration &amp; Alliance</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

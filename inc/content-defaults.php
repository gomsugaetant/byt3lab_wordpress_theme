<?php
/**
 * BYT3LAB Theme - Contenus par défaut
 * Schéma des réglages administrables (textes de sections, coordonnées, réseaux)
 * et contenus initiaux des divisions et des offres (utilisés une seule fois lors de la migration).
 *
 * Toutes les valeurs ci-dessous sont des valeurs PAR DÉFAUT : elles sont modifiables
 * dans « BYT3LAB Contenu → Réglages du site » ou dans chaque contenu, sans toucher au code.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Schéma des réglages : groupes > champs (type, libellé, défaut).
 * Format des listes structurées : une entrée par ligne, colonnes séparées par « | ».
 */
function byt3lab_settings_schema() {
    return apply_filters('byt3lab_settings_schema', [
        'contact' => [
            'title'  => 'Coordonnées & réseaux',
            'fields' => [
                'contact.email'         => ['type' => 'text', 'label' => 'E-mail principal', 'default' => 'contact@byt3lab.com'],
                'contact.email_support' => ['type' => 'text', 'label' => 'E-mail support', 'default' => 'support@byt3lab.com'],
                'contact.email_careers' => ['type' => 'text', 'label' => 'E-mail carrières', 'default' => 'carrieres@byt3lab.com'],
                'contact.email_partners'=> ['type' => 'text', 'label' => 'E-mail partenariats (destinataire du formulaire partenaire)', 'default' => 'contact@byt3lab.com'],
                'contact.phone'         => ['type' => 'text', 'label' => 'Téléphone principal', 'default' => '+237 696 87 94 75'],
                'contact.phone2'        => ['type' => 'text', 'label' => 'Téléphone secondaire', 'default' => '+237 652 35 48 37'],
                'contact.whatsapp'      => ['type' => 'text', 'label' => 'Numéro WhatsApp (chiffres uniquement)', 'default' => '237696879475'],
                'contact.location'      => ['type' => 'text', 'label' => 'Présence géographique', 'default' => 'Douala · Yaoundé — Cameroun'],
                'social.linkedin'       => ['type' => 'url', 'label' => 'LinkedIn', 'default' => 'https://linkedin.com/company/byt3lab'],
                'social.facebook'       => ['type' => 'url', 'label' => 'Facebook Byt3Lab', 'default' => 'https://facebook.com/byt3lab'],
                'social.youtube'        => ['type' => 'url', 'label' => 'YouTube', 'default' => 'https://youtube.com/@byt3lab'],
                'social.ngrafix'        => ['type' => 'url', 'label' => 'Facebook NGRAFIX', 'default' => 'https://www.facebook.com/profile.php?id=61571483432231'],
                'legal.company'         => ['type' => 'text', 'label' => 'Raison sociale (mentions légales)', 'default' => 'Byt3Lab'],
                'legal.footer_text'     => ['type' => 'textarea', 'label' => 'Description institutionnelle (pied de page)', 'default' => 'Byt3Lab est un groupe technologique camerounais à vocation africaine. Nous concevons, développons, intégrons et exploitons des technologies pour les entreprises, les industries et les infrastructures.'],
            ],
        ],
        'home' => [
            'title'  => 'Page d\'accueil — textes des sections',
            'fields' => [
                'home.hero.signature'  => ['type' => 'text', 'label' => 'Hero — signature de marque', 'default' => 'ENGINEERING THE TECHNOLOGIES OF TOMORROW.'],
                'home.hero.title'      => ['type' => 'text', 'label' => 'Hero — titre (H1)', 'default' => 'Concevoir les technologies de demain.'],
                'home.hero.subtitle'   => ['type' => 'textarea', 'label' => 'Hero — sous-titre', 'default' => 'Nous concevons, développons et déployons des technologies qui renforcent les entreprises, les industries et les infrastructures de demain.'],

                'home.about.eyebrow'   => ['type' => 'text', 'label' => 'À propos — sur-titre', 'default' => 'Byt3Lab'],
                'home.about.title'     => ['type' => 'text', 'label' => 'À propos — titre', 'default' => 'Plus que du logiciel. De l\'ingénierie technologique.'],
                'home.about.text'      => ['type' => 'textarea', 'label' => 'À propos — texte', 'default' => 'Byt3Lab est un groupe technologique et d\'innovation qui conçoit, développe et intègre des solutions répondant aux besoins évolutifs des entreprises, des industries et des infrastructures numériques.'],
                'home.about.text2'     => ['type' => 'textarea', 'label' => 'À propos — évolution', 'default' => 'Né de l\'ingénierie logicielle, Byt3Lab organise désormais ses activités en divisions technologiques, en produits et en marques spécialisées, avec une ambition claire : bâtir depuis le Cameroun un groupe technologique au service du continent africain.'],

                'home.divisions.eyebrow' => ['type' => 'text', 'label' => 'Divisions — sur-titre', 'default' => 'Nos divisions technologiques'],
                'home.divisions.title'   => ['type' => 'text', 'label' => 'Divisions — titre', 'default' => 'L\'ingénierie à travers les domaines technologiques.'],
                'home.divisions.intro'   => ['type' => 'textarea', 'label' => 'Divisions — introduction', 'default' => 'Cinq divisions structurent le développement du groupe. Chacune est présentée selon son niveau réel de maturité : certaines sont opérationnelles, d\'autres en construction.'],

                'home.offers.eyebrow'  => ['type' => 'text', 'label' => 'Produits — sur-titre', 'default' => 'Produits & solutions'],
                'home.offers.title'    => ['type' => 'text', 'label' => 'Produits — titre', 'default' => 'Des technologies conçues pour résoudre des problèmes réels.'],
                'home.offers.intro'    => ['type' => 'textarea', 'label' => 'Produits — introduction', 'default' => 'Des produits logiciels propriétaires et une activité de services d\'infrastructure, développés et exploités par Byt3Lab.'],

                'home.ngrafix.eyebrow' => ['type' => 'text', 'label' => 'NGRAFIX — sur-titre', 'default' => 'Studio créatif de l\'écosystème'],
                'home.ngrafix.title'   => ['type' => 'text', 'label' => 'NGRAFIX — titre', 'default' => 'Au-delà de la technologie : créer des expériences de marque.'],
                'home.ngrafix.text'    => ['type' => 'textarea', 'label' => 'NGRAFIX — texte', 'default' => 'À travers NGRAFIX, Byt3Lab étend son expertise à l\'identité de marque, au design créatif et à la communication digitale, pour aider les entreprises à construire des expériences de marque fortes et distinctives.'],

                'home.innovation.eyebrow' => ['type' => 'text', 'label' => 'Innovation — sur-titre', 'default' => 'Technologie & innovation'],
                'home.innovation.title'   => ['type' => 'text', 'label' => 'Innovation — titre', 'default' => 'Construire ce qui vient.'],
                'home.innovation.intro'   => ['type' => 'textarea', 'label' => 'Innovation — introduction', 'default' => 'Notre feuille de route s\'inscrit dans la durée. Ces domaines orientent nos investissements, nos partenariats et le développement de nos futures solutions.'],
                'home.innovation.items'   => ['type' => 'textarea', 'label' => 'Innovation — domaines (Titre | Texte | icône)', 'default' => "Intelligence artificielle | Intégrer l'IA appliquée dans les logiciels métiers pour l'analyse, la prévision et l'aide à la décision. | brain\nAutomatisation | Automatiser les processus administratifs, commerciaux et opérationnels pour gagner en fiabilité. | workflow\nSystèmes connectés | Relier capteurs, équipements et logiciels pour suivre les opérations en temps réel. | radio\nTechnologies industrielles | Développer progressivement des solutions pour les opérations physiques et industrielles. | factory\nInfrastructures intelligentes | Combiner énergie, réseaux et supervision pour des infrastructures plus résilientes. | zap"],

                'home.industries.eyebrow' => ['type' => 'text', 'label' => 'Secteurs — sur-titre', 'default' => 'Secteurs'],
                'home.industries.title'   => ['type' => 'text', 'label' => 'Secteurs — titre', 'default' => 'La technologie au service de chaque secteur.'],
                'home.industries.items'   => ['type' => 'textarea', 'label' => 'Secteurs (Titre | Problématiques | Réponses Byt3Lab | icône)', 'default' => "Commerce & distribution | Suivi des stocks, ventes multi-points, visibilité sur la marge. | Gestion commerciale et des stocks avec MELODI ERP, applications web et mobiles. | cart\nÉducation | Gestion administrative des établissements, suivi des élèves, communication avec les familles. | Gestion scolaire avec SUKU, plateformes numériques sur mesure. | graduation\nAgriculture | Faible traçabilité, pilotage des exploitations, accès à l'énergie. | Logiciels de gestion, et à terme agriculture connectée et solutions solaires. | sprout\nIndustrie | Processus manuels, suivi de production, disponibilité des équipements. | Logiciels industriels, intégration IT, et à terme supervision connectée. | factory\nLogistique | Coordination des flux, suivi des livraisons, gestion des entrepôts. | Applications de suivi, gestion des stocks multi-sites, automatisation. | truck\nServices financiers | Sécurité des données, disponibilité des services, conformité. | Développement logiciel, infrastructure et hébergement managé avec BWS. | banknote\nServices professionnels | Organisation interne, facturation, collaboration à distance. | ERP, automatisation des processus, outils collaboratifs. | briefcase\nInstitutions publiques | Dématérialisation, accès aux services, fiabilité des systèmes. | Plateformes numériques, infrastructure, accompagnement à la transformation digitale. | landmark"],

                'home.projects.eyebrow' => ['type' => 'text', 'label' => 'Réalisations — sur-titre', 'default' => 'Réalisations'],
                'home.projects.title'   => ['type' => 'text', 'label' => 'Réalisations — titre', 'default' => 'Transformer les idées en technologies.'],
                'home.projects.intro'   => ['type' => 'textarea', 'label' => 'Réalisations — introduction', 'default' => 'Produits développés, projets déployés, solutions intégrées : un portfolio que nous enrichissons au fil de nos projets.'],
                'home.projects.empty'   => ['type' => 'textarea', 'label' => 'Réalisations — texte affiché tant qu\'aucun projet n\'est publié', 'default' => 'Nos études de cas sont en cours de documentation. En attendant, découvrez les produits que nous développons et exploitons.'],

                'home.partners.eyebrow' => ['type' => 'text', 'label' => 'Partenariats — sur-titre', 'default' => 'Partenariats'],
                'home.partners.title'   => ['type' => 'text', 'label' => 'Partenariats — titre', 'default' => 'Construire l\'avenir ensemble.'],
                'home.partners.text'    => ['type' => 'textarea', 'label' => 'Partenariats — texte', 'default' => 'Nous construisons notre développement avec des partenaires qui partagent notre exigence technique et notre vision à long terme.'],
                'home.partners.types'   => ['type' => 'textarea', 'label' => 'Partenariats — types (une ligne par type)', 'default' => "Fournisseurs de technologies\nFournisseurs d'infrastructure\nFabricants de matériel\nInstitutions de recherche\nPartenaires commerciaux\nPartenaires industriels"],

                'home.cta.title'        => ['type' => 'text', 'label' => 'CTA final — titre', 'default' => 'Concevons ce qui vient.'],
                'home.cta.text'         => ['type' => 'textarea', 'label' => 'CTA final — texte', 'default' => 'Un projet, une idée ou une opportunité de partenariat ? Construisons ensemble quelque chose qui compte.'],
            ],
        ],
        'display' => [
            'title'  => 'Affichage des sections',
            'fields' => [
                'display.home_projects' => ['type' => 'checkbox', 'label' => 'Afficher la section « Réalisations » sur l\'accueil', 'default' => '1'],
                'display.home_partners_logos' => ['type' => 'checkbox', 'label' => 'Afficher les logos des partenaires publiés', 'default' => '1'],
            ],
        ],
    ]);
}

/** Parse une liste « A | B | C » en tableau de tableaux. */
function byt3lab_pairs($text) {
    $rows = [];
    foreach (byt3lab_lines($text) as $line) {
        $rows[] = array_map('trim', explode('|', $line));
    }
    return $rows;
}

/**
 * Contenu initial des 5 divisions technologiques.
 * Les statuts reflètent la maturité réelle annoncée et restent modifiables dans l'admin.
 */
function byt3lab_default_divisions() {
    return [
        [
            'slug' => 'logiciel-numerique', 'title' => 'Logiciel & Numérique', 'status' => 'active', 'icon' => 'code', 'order' => 1,
            'excerpt' => 'Le cœur de Byt3Lab : ingénierie logicielle, logiciels d\'entreprise, plateformes SaaS et transformation digitale.',
            'content' => 'La division Logiciel & Numérique est le domaine historique et central de Byt3Lab. Elle conçoit et développe des logiciels d\'entreprise, des plateformes web et mobiles et des produits propriétaires qui structurent la gestion et les opérations des organisations.',
            'vision' => 'Donner aux entreprises et institutions africaines des logiciels fiables, adaptés à leurs réalités et capables d\'évoluer avec elles.',
            'expertise' => "Ingénierie logicielle\nLogiciels d'entreprise\nERP et logiciels métiers\nPlateformes SaaS\nApplications web\nApplications mobiles\nIntelligence artificielle appliquée\nTransformation digitale\nAutomatisation des processus",
            'technologies' => "Architectures web modernes\nApplications mobiles multiplateformes\nAPI et intégrations\nBases de données relationnelles\nConteneurisation et CI/CD",
            'services' => "Développement de logiciels sur mesure\nÉdition de produits SaaS (MELODI ERP, SUKU)\nConseil en transformation digitale\nAutomatisation des processus métiers",
            'industries' => "Commerce & distribution\nÉducation\nServices professionnels\nServices financiers\nInstitutions publiques",
            'maturity' => 'Division opérationnelle : elle porte les produits MELODI ERP et SUKU ainsi que les projets de développement sur mesure.',
            'related' => ['melodi-erp', 'suku'],
        ],
        [
            'slug' => 'infrastructure-cloud', 'title' => 'Infrastructure & Cloud', 'status' => 'active', 'icon' => 'cloud', 'order' => 2,
            'excerpt' => 'Hébergement, cloud, serveurs managés, DevOps et sécurité, portés par l\'activité BWS — Byt3Lab Web Services.',
            'content' => 'La division Infrastructure & Cloud regroupe les services d\'infrastructure informatique et les services managés de Byt3Lab. Elle permet aux organisations d\'héberger, de déployer et d\'exploiter leurs applications dans des conditions fiables et sécurisées.',
            'vision' => 'Offrir aux organisations une infrastructure numérique disponible, sécurisée et maîtrisée, gérée par une équipe de proximité.',
            'expertise' => "Infrastructure cloud\nHébergement web\nServeurs managés\nGestion de bases de données\nSauvegarde et reprise d'activité\nDevOps\nCybersécurité\nSupervision d'infrastructure\nDéploiement d'applications\nServices IT managés",
            'technologies' => "Virtualisation et conteneurs\nServeurs Linux\nSauvegardes automatisées\nSupervision et alertes\nPipelines de déploiement",
            'services' => "Hébergement managé (BWS)\nGestion de serveurs\nDéploiement et maintenance applicative\nSauvegarde et sécurité",
            'industries' => "Services financiers\nCommerce & distribution\nÉducation\nInstitutions publiques\nServices professionnels",
            'maturity' => 'Division opérationnelle à travers BWS. Elle s\'appuie aujourd\'hui sur des infrastructures et fournisseurs partenaires.',
            'related' => ['bws'],
        ],
        [
            'slug' => 'materiel-reseaux', 'title' => 'Matériel & Réseaux', 'status' => 'in_development', 'icon' => 'network', 'order' => 3,
            'excerpt' => 'Équipements informatiques, serveurs, stockage et infrastructures réseau : fourniture, intégration, installation et maintenance.',
            'content' => 'La division Matériel & Réseaux représente l\'extension de Byt3Lab vers les équipements et les infrastructures physiques. Byt3Lab ne fabrique pas d\'équipements : la division sélectionne, fournit, intègre, installe et maintient des équipements de constructeurs tiers.',
            'vision' => 'Proposer une approche intégrée où logiciel, infrastructure et matériel sont pensés ensemble, par un même interlocuteur.',
            'expertise' => "Équipements informatiques\nServeurs et stockage\nMatériel informatique\nInfrastructures réseau\nSolutions de connectivité\nIntégration matérielle\nInstallation et maintenance\nConseil en infrastructure IT",
            'technologies' => "Réseaux locaux et sans fil\nServeurs et baies de stockage\nPostes de travail\nÉquipements de connectivité",
            'services' => "Fourniture d'équipements de constructeurs partenaires\nIntégration et installation\nMaintenance\nConseil en infrastructure",
            'industries' => "Services professionnels\nÉducation\nInstitutions publiques\nIndustrie",
            'maturity' => 'Division en développement : les offres et partenariats fournisseurs sont en cours de structuration.',
            'related' => [],
        ],
        [
            'slug' => 'technologies-industrielles', 'title' => 'Technologies industrielles', 'status' => 'strategic', 'icon' => 'factory', 'order' => 4,
            'excerpt' => 'IoT, systèmes embarqués, automatisation et supervision connectée pour les opérations physiques et industrielles.',
            'content' => 'La division Technologies industrielles porte le développement progressif de solutions technologiques destinées aux opérations physiques et industrielles : suivre, mesurer, automatiser.',
            'vision' => 'Mettre l\'expertise logicielle de Byt3Lab au service des opérations physiques, en reliant capteurs, équipements et logiciels.',
            'expertise' => "Internet des objets (IoT)\nSystèmes embarqués\nAutomatisation industrielle\nSupervision intelligente\nCapteurs et objets connectés\nRobotique\nAgriculture intelligente\nLogiciels industriels",
            'technologies' => "Capteurs et microcontrôleurs\nProtocoles de communication IoT\nTableaux de bord de supervision\nLogiciels industriels",
            'services' => "Études et prototypage\nLogiciels de supervision\nIntégration avec les logiciels de gestion",
            'industries' => "Industrie\nAgriculture\nLogistique",
            'maturity' => 'Orientation stratégique : la division sera développée progressivement, en commençant par des projets pilotes et des partenariats.',
            'related' => [],
        ],
        [
            'slug' => 'technologies-energetiques', 'title' => 'Technologies énergétiques', 'status' => 'strategic', 'icon' => 'sun', 'order' => 5,
            'excerpt' => 'Énergie solaire, stockage, gestion intelligente de l\'énergie et solutions d\'alimentation de secours.',
            'content' => 'La division Technologies énergétiques traduit l\'orientation de Byt3Lab vers les technologies de l\'énergie. La continuité de l\'alimentation électrique conditionne la fiabilité de toute infrastructure numérique et industrielle.',
            'vision' => 'Contribuer à des infrastructures plus autonomes et résilientes en associant énergie, supervision et logiciel.',
            'expertise' => "Énergie solaire\nStockage d'énergie\nSystèmes de batteries\nGestion intelligente de l'énergie\nAlimentation de secours\nSuivi énergétique\nInfrastructures intelligentes",
            'technologies' => "Systèmes photovoltaïques\nStockage par batteries\nSupervision énergétique\nGestion de la charge",
            'services' => "Intégration de solutions en partenariat\nSuivi et supervision énergétique",
            'industries' => "Agriculture\nIndustrie\nInstitutions publiques\nÉducation",
            'maturity' => 'Orientation stratégique : le développement commencera par des partenariats et des solutions d\'intégration, avant d\'évoluer vers des technologies propriétaires.',
            'related' => [],
        ],
    ];
}

/**
 * Contenu initial des produits et offres.
 * Seules des fonctionnalités confirmées doivent être listées : à compléter dans l'admin.
 */
function byt3lab_default_offers() {
    return [
        [
            'slug' => 'melodi-erp', 'title' => 'MELODI ERP', 'type' => 'product', 'status' => 'active', 'division' => 'logiciel-numerique',
            'badge' => 'Produit logiciel', 'tagline' => 'ERP modulaire pour piloter l\'ensemble de vos activités.', 'accent' => '#1D7FD8', 'order' => 1,
            'excerpt' => 'Plateforme de gestion d\'entreprise modulaire : commerce, stocks, achats, comptabilité, ressources humaines et pilotage.',
            'content' => 'MELODI ERP est le progiciel de gestion intégré développé par Byt3Lab. Sa conception modulaire permet à chaque organisation d\'activer les fonctions dont elle a besoin et d\'étendre la plateforme au rythme de sa croissance.',
            'features' => "Gestion commerciale\nGestion des stocks\nVentes et achats\nComptabilité\nRessources humaines\nBusiness intelligence\nAutomatisation des workflows",
            'problems' => "Données dispersées entre tableurs et outils non connectés\nManque de visibilité sur les stocks, les ventes et la trésorerie\nProcessus manuels sources d'erreurs\nDifficulté à faire évoluer les outils avec la croissance",
            'benefits' => "Une plateforme unique pour l'ensemble des activités\nDes modules activés selon les besoins réels\nDes données centralisées pour mieux décider\nUn éditeur local, proche de ses clients",
            'url' => 'https://melodi.byt3lab.com', 'button' => 'Accéder à MELODI',
        ],
        [
            'slug' => 'suku', 'title' => 'SUKU', 'type' => 'product', 'status' => 'active', 'division' => 'logiciel-numerique',
            'badge' => 'Produit logiciel — Éducation', 'tagline' => 'La gestion scolaire, pensée pour les établissements.', 'accent' => '#2E9E8F', 'order' => 2,
            'excerpt' => 'Solution de gestion destinée aux établissements d\'enseignement.',
            'content' => 'SUKU est la solution de Byt3Lab dédiée au secteur éducatif. Elle accompagne les établissements dans la gestion de leur vie administrative et scolaire.',
            'features' => '',
            'problems' => '',
            'benefits' => '',
            'url' => 'https://melodi.byt3lab.com/store/suku', 'button' => 'Découvrir SUKU',
        ],
        [
            'slug' => 'bws', 'title' => 'BWS — Byt3Lab Web Services', 'type' => 'service_activity', 'status' => 'active', 'division' => 'infrastructure-cloud',
            'badge' => 'Services d\'infrastructure', 'tagline' => 'Hébergement et infrastructure managés, opérés par Byt3Lab.', 'accent' => '#0B3D6B', 'order' => 3,
            'excerpt' => 'Hébergement managé, services cloud, gestion de serveurs, déploiement d\'applications, sauvegarde et sécurité.',
            'content' => 'BWS — Byt3Lab Web Services est l\'activité de services d\'infrastructure et d\'hébergement managé de Byt3Lab. Elle prend en charge l\'hébergement, le déploiement et l\'exploitation technique des applications de ses clients, en s\'appuyant sur des infrastructures et fournisseurs partenaires.',
            'features' => "Hébergement managé\nServices cloud\nGestion de serveurs\nDéploiement d'applications\nGestion d'infrastructure\nSauvegarde et sécurité\nSupport technique",
            'problems' => "Applications hébergées sans supervision ni sauvegarde\nAbsence de compétences internes pour gérer des serveurs\nIncidents de sécurité et indisponibilités",
            'benefits' => "Un interlocuteur unique pour l'hébergement et l'exploitation\nDes sauvegardes et une supervision mises en place\nUne équipe technique de proximité",
            'url' => '', 'button' => 'Demander une offre BWS',
        ],
    ];
}


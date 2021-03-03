<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'organic' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+c5L5SF!:eNvzs].&Pq/G)l3puaH*Kj=wE.^03s%AB7OYD},4#tuMt,I|y?WBIlP' );
define( 'SECURE_AUTH_KEY',  'q}D#5|yQ;2*2>:<a0Z{a,Qw0zjx_hjae)NBoISA~eEp=SE+l{_fM+fQe>n!N<C;j' );
define( 'LOGGED_IN_KEY',    'YfTAcO>( /Nbk[rsX&=F}C,jMv~8iZo$!_BY<.9I62>P <(FAxY}!.5[bORm9B [' );
define( 'NONCE_KEY',        ';kn#=J!cmezf@zO?^uzo4,]p, <LF~LI!U-yp9GT$8@oP/bH`T9{/].?+O] N)b^' );
define( 'AUTH_SALT',        'kl>U&]E+A|$hhnQW@r#gxh$/sY3Tr)9$qQAqPf#jwq:2hzx!]pFil8%Y@pK&8=:Y' );
define( 'SECURE_AUTH_SALT', '8wzd1Aw^Sb!]+oO:He&q6Z{Vt$M9HOb&.L~pM.b[j*j[zHT/5ixmA+9Nd!Y?kX@a' );
define( 'LOGGED_IN_SALT',   'XIDj(W%DQm.29-iSgNFG[f$Ac}%DbaQ|n$8^uP5{~1aVT5,g#~w5(P[=;*p7i25`' );
define( 'NONCE_SALT',       'SKaCa4cNakiM@xg)cMw-oz}7g]<--G/yd-ZC}MpkX#}k3Y3-6zJ4;pl&erTUzQJ]' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

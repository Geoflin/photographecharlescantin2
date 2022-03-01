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
define( 'DB_NAME', 'uao6bj7832ejjozx' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'gqpiug8jz5zy6piu' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'rioyg81i5ak4gq89' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'spryrr1myu6oalwl.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'w6Qw `dhx.&/6j&qD/qNf=o]TXdM[_CP*ot84l#oquBY/6)e|2$heOy`M8l!@m($');
define('SECURE_AUTH_KEY',  '3P0Lkq:9o2|oAF +?.BVa;NBdG?hRY=y=l5MRV%p9swi$K7PHFp{Vz:4[l.#T.}h');
define('LOGGED_IN_KEY',    'WOTl`v6^wu]qA$8N|<z7?c&+w~2j@^->gl|`,lA0-D:SRqey{QG#<9[HU?D:/pGn');
define('NONCE_KEY',        ']|4?m-n[43yX_61wW3j~}6F{<1f8FTO9G3te$aQ2*T<y>%nwvRdB=+IuT/p~[Q.F');
define('AUTH_SALT',        'uvu8z:cU&_|+N[qIDIc +6isU-97%I;kO^h?FKXAz9iI-h lKIVs04mbsIdTPv%w');
define('SECURE_AUTH_SALT', 'a3@6xr^zgOBfV$froQ-s}V1vk>ts<Ca_-fv|y~,.:ijEZ2*VIZ#?z;t|dS4W>o<|');
define('LOGGED_IN_SALT',   '-G<BXl*of X6z=wJ<i..2O_$<@X_X9] PY(+)|)44ovAAG]+oPRN>iip{hyPX-rA');
define('NONCE_SALT',       'F+C>Rp!<5L<I;VX[e<]zjmXybu9E5Dc;[B|{#Ctbs).0-w/?t; RFTwEF/K>^fpE');
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

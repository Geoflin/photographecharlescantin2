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
define( 'AUTH_KEY',         'E|s<&b2PGXvSyzb& >SIb1EV,_Z7fQ=q[Q(+KXOY],O`{1=PJYl0(!={ac>#kDEn' );
define( 'SECURE_AUTH_KEY',  'eFC-24^vqsQ[D(9eUTQvN2.Idc~H jj%9d^*Z4Pn>#k|0o=|DDn52o;%vPhR` :R' );
define( 'LOGGED_IN_KEY',    '6/_8TB6=3gi5l+ 0k(sw5/*-=g`aE~GZr%?gxD0lgKg?AkEJc<SQ&Zdyt!x3|s(I' );
define( 'NONCE_KEY',        'W Db2rP9A?|h^w+*3`G eWr2zz]rDzip#:`#jHGW~H)h.C/V<S`6W3kJ&4ib(7AD' );
define( 'AUTH_SALT',        '<4 Z4AKDNJK9=A8Sz.c6kdNZ%.eCcHcHw#cZx`=0)5h lUnof4nyQbU:ZOQ1XXZY' );
define( 'SECURE_AUTH_SALT', 'TJi5t/3C?#rbH-sd!aCMRv6yR,sBpPhR2Y1fKb|}+TJf1jvxb){&91%NmizyU%y{' );
define( 'LOGGED_IN_SALT',   '`ihWi6&I{65pykd)lUGa~QvT$a]Oq^HINA,ku1/`@O~7t.{dXx+&+_?e4R7{Hez)' );
define( 'NONCE_SALT',       '+cr6Kn[w,1LE4zrnwm I(_> (=3Ga3N%V~${2BM5G0D/l@IF.yINt+h>>#phZgR4' );
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

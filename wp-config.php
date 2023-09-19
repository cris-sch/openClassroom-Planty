<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'B/j^!:0a2g]TBr89Hyh;0A2>/5ZX?g{/,w6p+JTGb}(lL@4TB:y64gky}6g<L@HS' );
define( 'SECURE_AUTH_KEY',  'vbHm*F&XQjlgm<}Nn3_}tB h+uS76z,1OPipsfI:j60}og/*>K*N{mO..;48Xt4D' );
define( 'LOGGED_IN_KEY',    'wZ2=@bMH{=wb0-F_#i4|L1/P[ Vq{r,4)QmktK;f&|1*NPabixlWb@yDgaTs9hq-' );
define( 'NONCE_KEY',        '],-sTX+RNRN/2x48myyiM~ ]^M;^cKEYDy~fq5GE{Z0+tj>#_m)Ja!K@=YFBe]t6' );
define( 'AUTH_SALT',        'Di%o~T3k73~Lz[yA$[%&U0`eoP%?le?nxG9VzEY$[Ol{fedh~#XtUhD#51vv&!& ' );
define( 'SECURE_AUTH_SALT', 'eU_r9v_I>}i(e#t0NmIc&iWKHu:5esoAs*!pmd1CdZa#vAAThl{/H$0a;t*d-pTj' );
define( 'LOGGED_IN_SALT',   'RupKTMm._*tzQ%1[+S{6*Fo;nVMEaHifc._|PkL`=p.6`F`e]R 1aIsrx-!dS=@p' );
define( 'NONCE_SALT',       'R(u`uoO97(1<9Nnw_g}?rN_@|@jtCd8)y.RXb,- F]hm2;wW1?7+ETwqM>~lUcU]' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY',false);


/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

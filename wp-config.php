<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '2k17_wp_musiqueaction');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}p`hAEvor@~Z#>7zr%FK!5F6plA+med 9o4:E`x*fGu[hMZ&_C8_hEu@JD@lq`fM');
define('SECURE_AUTH_KEY',  'b5,suQ5K+-Bu9noeR+ uedcY[=1R0k^1t$_+@1,YU.oM7%{PMZ=b:b5v~_?5PTzX');
define('LOGGED_IN_KEY',    ',{7Pnq29~O-C*J}SB*s4x)#)Bkv7Ze2n_xdT*>mk141a#eL$O,`IXyx[h3#CMg 2');
define('NONCE_KEY',        'ERhiHStD//0,iS:w/f19!sZg ;MX~@b3L!Sc#ObZW)fR4R-JAEmKW*1WG4`Pk,K4');
define('AUTH_SALT',        '3+Xbo{fTHdvB2=6-3/Gl8oy@C,Nox^WY+Q[C=Tzv!k&0<>KiM$#z#@AbiZq*nH>9');
define('SECURE_AUTH_SALT', 'jCPE)lF!e<bf@~ejI31</bq(i_g,u41 ,j%ob[xWY;[?(waOtJ1$M)`Ej^$NxG&0');
define('LOGGED_IN_SALT',   'd)#hh#Am2VXL|_!CrgY3:=jujs-;j-&>pO89;,5[{xr,_j<pvdalwJeUaIKF0U8g');
define('NONCE_SALT',       'i,-,MhGf]6@73KA$6?(_~>t+S|A[&qlz/0Tt5JWGbtnQI?7W1{EX9_of|*e;#4j,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'l2^u^Th+X[x^2PQufeLVX6)_]k:`!+z~=1}a;;^n:um|-(tK:`3:h[]b&[WLODh4');
define('SECURE_AUTH_KEY',  '{&aBlNIeC4>@&V z[)5J*-!IaQUSW~a0Yjul;eE#4YlfUs@7mY;5qOo1IB E(&WB');
define('LOGGED_IN_KEY',    'R$2BfM*=ez8C%M!>C__5Lb-9lWoAo2f>u;?|Q-=!|n_h#e|wRkLer}JPkfghr&9/');
define('NONCE_KEY',        'axt;JYV|*uoVC?+;b]LF8s~V>=0uS$#A+Ao{?Y$+-h^l$~ABbT=&5$3[fUVw-SwU');
define('AUTH_SALT',        '5yx%DQ+m<p9gl.z e>1MiQRA=exytT,)/>e+o{C_6L?Sw+c9EW-V8U~*+X8W)|Kk');
define('SECURE_AUTH_SALT', 'ck EJc1fjo9_-z=@$<wm,u<bXrD.}a8Lq`OU HF1ilmp()O^ ,j0iy[BGn;uh82R');
define('LOGGED_IN_SALT',   'xCH yvPos8&o@i5ck+joXBqF7XJ3A5DJcyGmXlw!g(joUG**.J_/C?5O]RP0gR5z');
define('NONCE_SALT',       '+5;ZxM^D;|rtY}QM^7SumkzjL/r;,Z 5,+.u [|k#`j@ZruA;/R+Ha|}4w2//B;2');
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
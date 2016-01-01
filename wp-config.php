<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'leorunningclub');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_F/eU`Z+!.RkMx[`nMzMk$N*Lr|^g!vcGlrF_cOYbxMp!Dsu<X*qo[Sm||)nG||!');
define('SECURE_AUTH_KEY',  'SAag-TNf!Iv(eShJMcw/|^.&1T`*AU2z0P3!#9+NOV$aJQ-GuR9ncRLuUGag3x&y');
define('LOGGED_IN_KEY',    'd-^p$Go2I<[|^/72r@HSt$9|6)L&BB$wh>GDx-gHYB;B-Do*{w. ]D+VW8f(I((i');
define('NONCE_KEY',        'NX~~*J`M7M*x4yT|)?$=:c/1r[s731zHov*B6`|}ex1Edpj2K?+Mh:Z/w}=U^);*');
define('AUTH_SALT',        'Y6bzV|G%tfuUgYf@&r`s!*1x`~t|`spspnh-IA*oZCx+lTIPCw3hrF;`g!S|%Nvx');
define('SECURE_AUTH_SALT', 'E|pA4qbsH,8PKxhGkb|mV+S~qCme|MQb2/~90)8xi=)/=r:9SK`-83@KSbE*$J_z');
define('LOGGED_IN_SALT',   '%)kj@XHH=R vNVTbIpzUEi9%n*fkSbIwCw8MZDG]Lw3T.2YFmb|#9QZb`yx}R+++');
define('NONCE_SALT',       'yo}*%%?WiN~:hIC0=JlZW&UP&9jrK|,]bAq7jj?I4(b}vl$@`;?1:r+sbCZxt0#*');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'le_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
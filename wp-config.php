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
define('DB_NAME', 'wordpress-nawalbelshop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~?l$d8uS;v,pC52Y:!{L618>=J]VTiNpFA/!roj8+#_Yu?L-``Cip4mIPhB$3[Mw');
define('SECURE_AUTH_KEY',  '2#B/Gk/n1dR|+An/#g#gXOD<tWg>r;hl5MpXOFXF>7D@z+/BcK}VJCa>E;BTl3wI');
define('LOGGED_IN_KEY',    '4u}{V=8433pYD9;tDmS vS1q})oG+B|m;1/GOw|_tC~EgW>B:2Af%#xBTzFA;Nks');
define('NONCE_KEY',        'x(n;.k&!Mvrw`lrvZvPi)bL3<7@h[DW*ea5>;J)]ckcIk4MDB)GghT&y5W^M]|lz');
define('AUTH_SALT',        'j/v<u#gFt[XSm2QY)z N!H?I,._{+yP.ZJm]wb77h:U852/vcVKtift$OFZ(-CKZ');
define('SECURE_AUTH_SALT', '&{:{L}Z-a=#sIg>Z!;TTkehV/dJ`ZE;#}6Oo(hTDlh]dPAnOXssb|O{uG!J`4|=e');
define('LOGGED_IN_SALT',   'Kn[C0W0,hIL!k*X1A)fPV<c0&em//5P).FXy11S5V^![,O!5nX`br<YL R?`_p^j');
define('NONCE_SALT',       'LUk);OzJ<zO![dYt^wBXHb5vQ/pT1<77RNsE!WnQvPRDyc$!OJ,(`2KHZEP<!-PR');
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
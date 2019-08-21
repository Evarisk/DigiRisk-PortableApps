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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8q!Xy8JsO!n?`7Pxa!3QMIMP-PI39~h$TQxc7{=:v?wH.MHf>[fG#[w}]Ab-W#_R' );
define( 'SECURE_AUTH_KEY',  '`108~IMyk1Po=? qvJ3R(%P2T|#CLp@>i)r*}Vl`eB<pw%I:)Lol6LU0guMnRr#z' );
define( 'LOGGED_IN_KEY',    '4(L)bg+/m`j,-F!U^#{]_AOV`Kla}#]((bRT?(.q: }sG67ht: -Xk^KZ8B]{m73' );
define( 'NONCE_KEY',        'pi(tw})q~F#L>_gh6}j[DL$Y7kM?HKTWm)#5p EI!n?>*QvtS( 9-h#VRu7kiRS ' );
define( 'AUTH_SALT',        'yLR!oFS`Z]oG=o}Sy&T3L<ikiMmZC}W_4j1bBDgXTU3=/ON1>Su._Teso,FmbQO8' );
define( 'SECURE_AUTH_SALT', ',90 bmIBJ)YvB3Y)EaXo&`<-!lK7_oP9ntCCo6Tm;.c_Q}mB}:M~+}V)8DGUnpJp' );
define( 'LOGGED_IN_SALT',   'G#=R{YfTl2l:G^px`G=1AT~IsHz4` K~9_NXCr+z1p1*<TlT6*ek,^pbD>hkbS%O' );
define( 'NONCE_SALT',       'd3/WNVfOfTMEo E/Go}kDT$q`*)T!,+Ep*4w0@lZy_4q+?,E4 {MFjz0T%GsKQ]X' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\grip\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'grip' );
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
define( 'AUTH_KEY',         'Q8x[ PT/Xpo0=53M([|AKFgF6DeT|kq<Y>Eq,(efmJ_&wXneSf|([4W)s@drSQcr' );
define( 'SECURE_AUTH_KEY',  '(uA&2:^.bd}F}ZH7Pp#<kZ&&CnUn>iQNSv+!12tfW9E7b02{&TngW^NsR>d;xWbt' );
define( 'LOGGED_IN_KEY',    '>6~}~=E<H9q7}62&@; ykW$;GX^<4OD9]s.RI#.^ P-;Ff(%Xam>wn,e;EJ#S(~R' );
define( 'NONCE_KEY',        ':Q:Gxz)I%l%6n69gt]o+Ndm~Tfr{yB7nWapOoFl)F$:>p1{5PDI>/469d!tmkr`7' );
define( 'AUTH_SALT',        'BQzwsZ->*>dg02a!}q)K[SBe?DAXVhgdO-Q$IG9hXT;Kk*jxgdRe$N{Hbu9 rwbt' );
define( 'SECURE_AUTH_SALT', '7]3fDlG_=/TU3P8qkYN^3`*g<3Ph e2s,CB<:|R)X*VXwznQfJiz }w&F28Tqa9i' );
define( 'LOGGED_IN_SALT',   '?g0[P^{v5y1s7,&{82MsNYt0a%m[5G?{rC/|%ay1ZG54:K. {g{j[h_z<)<SETiw' );
define( 'NONCE_SALT',       '#3vz,=>E(7_MA$xqP&v>7r9W 3/*jxG/3G[+x}z0:.7$7$D#q*Iv.sst|<-Ui)d1' );
/**#@-*/
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'grip_';
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



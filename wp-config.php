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
define( 'DB_NAME', 'chalets-et-caviar' );

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
define( 'AUTH_KEY',         'uld&;V@U~={`v`)Dx!_-m {!v<O.lgrwrsYpv5<z={t|i+:~%t8BhS03Yt40}Fu5' );
define( 'SECURE_AUTH_KEY',  '_]z`6*r.rD;T9TJ;]h#.bf}Rd<S&LP.5:f)ohaHNI#js>@g>.aXhpWS[$IwP*^Wr' );
define( 'LOGGED_IN_KEY',    '0;@ k0#S}S5mq.^NXFh8u%x<s3eL.jB1FJ)rXR]`ILs!8[JOV$X9h1&+J?K)|kKZ' );
define( 'NONCE_KEY',        'gv@I}6t.^06cgub2=xtEZDd[M_CL`DzxCnh6X=@r5=Gg<2QzZ,lbYakMrV{kd#<I' );
define( 'AUTH_SALT',        'l 3=N4i7FKU-)VL[Lt0RRAlw4:pa{-rX`)6PNkeU#}xFYSYuq^eI}6HT9vr7x[lC' );
define( 'SECURE_AUTH_SALT', 'P;w1;RVdQv.s)=gLL$z*0eZw-*0-O@Gs(q{{7pDSfXPjBGy--Re:iA_l xn[/)T.' );
define( 'LOGGED_IN_SALT',   'xf!kH~8CU`mm),oo%ys6.!9U3ilCz2hJS0.ZHFCW[g$a.G,>kSbSzIVdFFvT0X?L' );
define( 'NONCE_SALT',       '-6v$W-sd5R[OJ!a_d77W#d(0fWki&8-{Iq-`P=L^$REIY#miA@gWsD,5C%1M^m3w' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cec_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

<?php
/**
 * Temeljna konfiguracija WordPressa.
 *
 * wp-config.php instalacijska skripta koristi ovaj zapis tijekom instalacije.
 * Ne morate koristiti web stranicu, samo kopirajte i preimenujte ovaj zapis
 * u "wp-config.php" datoteku i popunite tražene vrijednosti.
 *
 * Ovaj zapis sadrži sljedeće konfiguracije:
 *
 * * MySQL postavke
 * * Tajne ključeve
 * * Prefiks tablica baze podataka
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL postavke - Informacije možete dobiti od vašeg web hosta ** //
/** Ime baze podataka za WordPress */
define( 'DB_NAME', 'astra' );

/** MySQL korisničko ime baze podataka */
define( 'DB_USER', 'root' );

/** MySQL lozinka baze podataka */
define( 'DB_PASSWORD', '' );

/** MySQL naziv hosta */
define( 'DB_HOST', 'localhost' );

/** Kodna tablica koja će se koristiti u kreiranju tablica baze podataka. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Tip sortiranja (collate) baze podataka. Ne mijenjate ako ne znate što radite. */
define('DB_COLLATE', '');

/**#@+
 * Jedinstveni Autentifikacijski ključevi (Authentication Unique Keys and Salts).
 *
 * Promijenite ovo u vaše jedinstvene fraze!
 * Ključeve možete generirati pomoću {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org servis tajnih-ključeva}
 * Ključeve možete promijeniti bilo kada s tim da će se svi korisnici morati ponovo prijaviti jer kolačići (cookies) neće više važiti nakon izmjene ključeva.
 *
 * @od inačice 2.6.0
 */
define( 'AUTH_KEY',         'T~z*pGsVJ2-nF7kUe!() =Bn=&jojn6w|%+<_}*Qz3`a1sU]!I*6wFzDEIWCxwP:' );
define( 'SECURE_AUTH_KEY',  '~`ms}9R!E^Su {EHVVVlFdX:gJx%8OZe K)wYebV?P-Zs4Nsvw|TX+<6~-,cVu|H' );
define( 'LOGGED_IN_KEY',    ':vGV|y;m12@=3#IZ$g4P<@OXWMwRYn$GU#T2LZl)L_|KPKTC=nFEcg]ZdLjam|Iz' );
define( 'NONCE_KEY',        '^vcFlcdu?^QT11hwl7$*C$<a:buON|<W}Ty*l}0EuP3h:]01E^&),[F*RbHxc;Al' );
define( 'AUTH_SALT',        'W5F?b0-}O0RB 3HCT1ux h!]VV%ta%vw^1^,$0 sy.(o+;a]4RK_eP0Y9Su]_aX|' );
define( 'SECURE_AUTH_SALT', 'P/DJJzH Z#WjBG?JJ**J/s@gmrD*nHPFREs_z&Pl9lC@mc>*/~jm[t5X[>1jc?m,' );
define( 'LOGGED_IN_SALT',   '$Sw 8.?PLM,Pb{~z7$CGM~a<D]$&WEy6l{@AfCg3eqW@)*pm7uz[~6nAuC:ai`D-' );
define( 'NONCE_SALT',       'fk* Uk kx:qQ:k`w)QfkA8Bp%3=`P-VoVLEMZ0~h<2l~Oh,++jH:55SDXEz`:#.s' );

/**#@-*/

/**
 * Prefix WordPress tablica baze podataka.
 *
 * Možete imati više instalacija unutar jedne baze podataka ukoliko svakoj dodjelite
 * jedinstveni prefiks. Koristite samo brojeve, slova, i donju crticu!
 */
$table_prefix  = 'wp_';

/**
 * Za programere: WordPress debugging mode.
 *
 * Promijenit ovo u true kako bi omogućili prikazivanje poruka tijekom razvoja.
 * Izrazito preporučujemo da programeri dodataka (plugin) i tema
 * koriste WP_DEBUG u njihovom razvojnom okružju.
 *
 * Za informacije o drugim konstantama koje se mogu koristiti za debugging,
 * posjetite Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To je sve, ne morate više ništa mijenjati! Sretno bloganje. */

/** Apsolutna putanja do WordPress mape. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Postavke za WordPress varijable i već uključene zapise. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/** 
 * As configura????es b??sicas do WordPress.
 *
 * Esse arquivo cont??m as seguintes configura????es: configura????es de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Voc?? pode encontrar mais informa????es
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Voc?? pode obter as configura????es de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo ?? usado pelo script ed cria????o wp-config.php durante a
 * instala????o. Voc?? n??o precisa usar o site, voc?? pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configura????es do MySQL - Voc?? pode pegar essas informa????es com o servi??o de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'Wp176068');

/** Usu??rio do banco de dados MySQL */
define('DB_USER', 'Wp176068');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '7@8WOrj&');

/** nome do host do MySQL */
define('DB_HOST', 'mysql16.redehost.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na cria????o das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. N??o altere isso se tiver d??vidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves ??nicas de autentica????o e salts.
 *
 * Altere cada chave para um frase ??nica!
 * Voc?? pode ger??-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Voc?? pode alter??-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto ir?? for??ar todos os usu??rios a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ge!GXPo%W5Y pbx2M.]*-SLfOKKE+#a3)g0fX<%f+z2:>]}KI1-s6<i>-jGSKIsC');
define('SECURE_AUTH_KEY',  '1I-vdE.g4P+deX-(uoMSs;qJ,X:?{$sPx6Zp>^#_^5>Vy-;|4iV|I=[eQBA.^+20');
define('LOGGED_IN_KEY',    '!&}$.3cD}iw@.mNU{4kr;`qiEpTa!0B8V<k|+a?yq+Z`*!kVYqS$0+CkjGC;{OA0');
define('NONCE_KEY',        'R@}R@|hNZxN)}uaBT[j)hLH<CO=z|XFhY?%1_.p:A#86p^|dNHF_i?}v}fY|6m1!');
define('AUTH_SALT',        'hYTN**pCab`VFOWU5p73WOy >].J&~!2U!AqA5.ho+|Xm9->Mo22XFpzC<[+w,t$');
define('SECURE_AUTH_SALT', '5cmft(+ 0et*e9EiH_0:.`6Ux_apdtU3NKXfSIxU|_X|&4ts&|Km3iksZ)Ce=w#.');
define('LOGGED_IN_SALT',   'BId##sDI:<u.XWWvve8RQb.y?sGVDAV*}//cp]hB3^Eb,)SW^Y GJktAEI6lxb}t');
define('NONCE_SALT',       '@,H;{#~0qtpXDs19`7ClYx^?N-C-2iRvdDa=>+-9m8GpF9_s%3p{(](jwvt1~ndj');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Voc?? pode ter v??rias instala????es em um ??nico banco de dados se voc?? der para cada um um ??nico
 * prefixo. Somente n??meros, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibi????o de avisos durante o desenvolvimento.
 * ?? altamente recomend??vel que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto ?? tudo, pode parar de editar! :) */
//define('WP_ALLOW_REPAIR', true);

/** Caminho absoluto para o diret??rio WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as vari??veis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

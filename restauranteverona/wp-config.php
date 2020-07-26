<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'restauranteverona' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l1V,O>MV+?My3GQZ_]i7>?wuWSt&If1<r1?Udw3)i?GUg6r2]U3l2eX]Ox4}6 1Y' );
define( 'SECURE_AUTH_KEY',  '@N[}I48Pm8>Hv{/j49snr-pT.lqp/DKv@2E)FR,#yjqehg-BJrCG?M@{Gq]fB6s%' );
define( 'LOGGED_IN_KEY',    'l,V^WVg#iQOg#=!pM1V1+XO_0L3i9@2f2m=p~7;%YYZ4N>VO+}3l1!hjkPBW38M&' );
define( 'NONCE_KEY',        '_:1(j+*</xC|*GGKH1}VspZU<QT[i%(jn/ys7@eZn=TIqfR:;Y]}I<o?o5$M;!mj' );
define( 'AUTH_SALT',        'ho0*%kIWhG_Z_z4vds;N<JC|3Awhxu0=_^W]0%4A/ MY>t@ZLM[>LDC,gjq9,)R(' );
define( 'SECURE_AUTH_SALT', '[Nn#g6{=PNmFdG*)<#VIv59`2E=aPpW:5k{33`q[0-{J^bgzF0Mtwh+9k714c-Qj' );
define( 'LOGGED_IN_SALT',   '_loy5^=thESr0CE<PshHOzt-Jr/Gc&;lx2uA>v~ynRMQGO,7(nOJ9_Nn.XY4.Tng' );
define( 'NONCE_SALT',       'Zf2h^0L WBGU(^8h3Ee:`XXO>EHuQluD~NxOHpGIy#O}izZ=a S7m*_j:,BlnB>q' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_restauranteverona';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

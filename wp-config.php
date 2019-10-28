<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'utg' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3f6o9mWI>sQ~2_@mr6_#5aMEq/G~?vJ6 k)cwb?Xi~JCS1-r8d9l)U/Ie4F*y&c?' );
define( 'SECURE_AUTH_KEY',  ')o*@U{^TOb~g}ERO^ n5.31i%9-*d8s8?//g?Qa<yt)gVBBEMK$^G3hD5lBz8K;6' );
define( 'LOGGED_IN_KEY',    ')ks3KIhMF}<J[)9a^8 IX6vhCdQiUs!4((&]^v>0w:ub3EW; Rl,>eXn_joY=]Hh' );
define( 'NONCE_KEY',        'Xu9A`<g3Pn+?IWQqYc2_T3NN~Mqix!!tT|a/Q&jZsS4giLiuS1NTumE|C(qb>@Mf' );
define( 'AUTH_SALT',        'FidVy~KlBc9q*XzV#fQKWqmq&T?;A1`e0=e+:X^d??~1|+UzA1_H3uC>vNj~o&`;' );
define( 'SECURE_AUTH_SALT', '6Tz3ZzL_xUV3Y]/#KPgl:~En#D:JDV(VsNLTAIWI`zm9q0Gv`eSO8lrqs2xUAhC`' );
define( 'LOGGED_IN_SALT',   '((wVR z*GM^x!.o9I$z#_U68j%</|$05KX|4@xGgKdWGX(;>g]*Ch> (n_dwJ2@[' );
define( 'NONCE_SALT',       'UY}HC[eXUSz{%3&>Vyy&0zX2rJPy42qtC~;y:(^8:Cl#ySs>] u8syX;%c78gKa7' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

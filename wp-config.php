<?php
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
define('DB_NAME', 'rayon2');

/** Имя пользователя MySQL */
define('DB_USER', 'rayon2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '6O5z2W5e');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'THt}t>A3MFUPtf)A3Y,V4X)^gt}bI_z|ekJ27l;U~|;E:3bh}^rBe?)[d!],#MS8');
define('SECURE_AUTH_KEY',  'H78TQ%_qB>*`II]|2,|}$Ii4A2.QFR@v`|UaE*m`g^~Vwl#Z&hMpnq6_ebNz1FH,');
define('LOGGED_IN_KEY',    '86_|_B)Iqi.<aL~]wf*M>$u-d_Dq0t_~S@*zO(aOiGjn*_6!{F[5Fn[Q#/6^(`95');
define('NONCE_KEY',        'r_]tSr0x `QG9xhh8H(N7}Km4I%#7EH]uUwX#~HeA?as!p:YJc$T{MH0%Dqxe)^S');
define('AUTH_SALT',        '1:Z4~$*D5![}9k9ncu;BrV__dh^TIu6;0$rKq{e?S2V]*x8!pqCizdvK@|4mk!o`');
define('SECURE_AUTH_SALT', 'Y__lE)A,MR_xdoQ$Anp_A2Ht5WkacRlKCu?QzH0^>(Pm91r*Y7tUr(YU|x=Yr4P0');
define('LOGGED_IN_SALT',   'Y!7^{a43GA4qKz2Kv c)I3UIbD+1Qawy~Ue.[ 7|r4uWRJoEa-u>7zQ~ZnkT2%uX');
define('NONCE_SALT',       'v,oDEK<D2Nf/HttI0tu{SDhR-ZUPAX-r|m|lGS:4>-7aN*wDF;1wQ(&<XsFJ&V,v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpjk_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

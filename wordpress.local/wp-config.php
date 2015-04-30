<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'yhbHYPnVZj2A6)~! p@)iBTycgox?4F7?O>s@,gmx&pCik8-yj|#D ~WdwolP6o>');
define('SECURE_AUTH_KEY',  'UtJ[U!103_YEQSMnz[eW$.-FeocN<G>0Yc9^l)1h ?yauBL8T@0| f3irRp*!i}!');
define('LOGGED_IN_KEY',    '8Huf/c%UuW[0[Es[?3:DdS,gzOnN7;0/r:]I,M:+-@LDMoXRj,=%#~+NU& rl4RD');
define('NONCE_KEY',        'DL]LIiP+Jn&]x74e,btj/Sf+:LEBW[M`#{UbSS{e|OEFwP-,5UZ3HlD?+S/j|3js');
define('AUTH_SALT',        'k!|2U-.9P2Rl:?/>42Voqc7%GXlZTD.S-OW}AmzB6@cVunH+Vlm3x<W%?>}q+|h]');
define('SECURE_AUTH_SALT', '-@lTJ NJA+LBoj.J1FPtgnQcM/in}E uGW-0LZ-$*UEaWGkQ|Jbl|{d*uX*?r{ c');
define('LOGGED_IN_SALT',   'v9vb3hN/+20{bZQ$pTBVq6XB$d#X_:?ZVP{s-12z|<:W8}}Q4AwnVSuUzYrX]Y71');
define('NONCE_SALT',       '*zRP|z[9 ?6%B-jrkf)mh`?O4N*::O6|Ko2Gi5KKf<~o.N+TKO,u|8?D_+IY5Wdh');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

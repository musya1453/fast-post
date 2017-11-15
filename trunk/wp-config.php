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
define('DB_NAME', 'fast');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`i>J6uB V[s0mB^1%H!nBKXv^#.W7q}Os.=dAb>g;_:#hZbIp^6,42u|;6*cjk}x');
define('SECURE_AUTH_KEY',  '@>,U53ot)QNpl4Kw4Z@YGjt f2J.L_v+=s>@]j*tXuoKl1HWESuwAVG;$4s+HjBr');
define('LOGGED_IN_KEY',    'K0{f{#X/g$Xp8PHP_$-^0_s,xtD67)eOw)vCg2G),KY5 wA?rBuQ~-q>1Y6Kb-c4');
define('NONCE_KEY',        'q$6Jay40yD$ s/4)wU4Q7W1!i8GQEi.u[RKM3PxPZU^a&TM^f:#.3HT6.},ALHz`');
define('AUTH_SALT',        '9W@bn<Kcr?Wg9t=}[cIN(6A;Xqw{l0<7_I2{pgdF@/n.E($}88n[+4ql@P#u|%9%');
define('SECURE_AUTH_SALT', '5+~7E_^PJnU<eS^iH[3TEp%lj4VG]$gz_<j_pLE^UX>a7$56GvX>[{X^3.#.w/PM');
define('LOGGED_IN_SALT',   '^~q1R{9e1Vd0j,@7M[tpm@TcICzAM`.n$,Z5f uWoC[NI]MQfpS1!{aMjK%K&r-`');
define('NONCE_SALT',       '^2WCp/7nG=o]z|HXh]{8p1AROI4{6;F 4X(U+|$a0TaU0ldKQlOdhCF1H&W}xR.$');

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
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('WP_MEMORY_LIMIT', '128M');
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */

require_once(ABSPATH . 'wp-settings.php');


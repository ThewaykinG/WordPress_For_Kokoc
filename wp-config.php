<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'thevaykin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'thevaykin' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[u=-w<8S* (gLy-ZX]6[-#F`#_2k3*B(z%CC6^_AKq/%0;z<>yi^pvc0*(k?6-f#' );
define( 'SECURE_AUTH_KEY',  '~u3i};k/O)jX)Kzbu%=//N})!O>Fm[e%?mpq5h@Fde?IgZgbkaY#.>?kXrC;msR5' );
define( 'LOGGED_IN_KEY',    'Qc8JLw4AJhrxq>v[w--%Fj1oc1d$nYXI#u(}~{sjF(_gB[-<_0!ei{p-RE6{^lTH' );
define( 'NONCE_KEY',        'VzZ2&WV@v_,ZH? +CClCFoE/pw!+>#=2I;saO<=|B,zq469-DDceF)#)8HJi|AB~' );
define( 'AUTH_SALT',        'd%TbQ{N&9}5hk@x`)Y);/S eBb+nTeecieYx)S2O@Dik7tQJ=e@>Co_,)B+X#<@N' );
define( 'SECURE_AUTH_SALT', 'y[*9L^_EK$JW8+.N*QWb5CdR:%[sF/5,%Orm2&@SW]fhgJ*N[4Z Z]j8}|gikz71' );
define( 'LOGGED_IN_SALT',   'hCR(-V*j0~OR# 92VX% w0QlOfv|GZ`hOT#4?+xe?`Gh)R~}3p1x?]z=:MMoJ=WP' );
define( 'NONCE_SALT',       'MD<I0p$t>hs*m9Q[6{]GktS&xD.am.[D1v.;4kJL!wUaags66uq6gf~AaEhP^RPS' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

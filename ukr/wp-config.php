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
define('DB_NAME', 'spektr-bd71980');

/** Имя пользователя MySQL */
define('DB_USER', 'spektr-bd71980');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'spektr-bd71980');

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
define('AUTH_KEY',         '|IQ+<d~`eMN]HduD9Zf,/!7z-+g#_Aypi}f~`o1|dW<&5*P!Cokcy^%k#<y#i,Yo');
define('SECURE_AUTH_KEY',  'upi9iC2{hz7x|!&}bsTm,R!Z$0#3u0K*/jFw!+i}I9cbC2NF&o&ry4F`FW$UgN[0');
define('LOGGED_IN_KEY',    'D({zDNe7,^h CY^q+w(,l<69Tw2j:^ -9u+!%C<m#sE$=NjDJ<N{3yR+k{+&/7_%');
define('NONCE_KEY',        'D@}bqob=5oqv@&m>E?/Q6IpJSKu(j?ciw-g,]2:+H+}M{p*m2[f^@|dLN6eCCtZ`');
define('AUTH_SALT',        'YG9p6p+F%^|+C^i^L*gb#D09p<{}1lR]:a&1{}[PW]/Ap8p%tT2:H].hd|275Kp.');
define('SECURE_AUTH_SALT', '9E3(-^Mz3yl,eZ~+Ic=v/&=q++:)ZW.wcV?++FjNJ%2MzZ9m,KvP+^/N}!I: #xU');
define('LOGGED_IN_SALT',   'B4h&U9hV`^wOSFBaU9r<(1V`gEb2H;NHTA5D}%Y1!-!AiC.gaBDt2$]#PMIH(LN$');
define('NONCE_SALT',       ' k&>| d@?_ |zCz-<]:QMiXfHJ#1-*--ZoR)P1{h$&!Gu7zHKEA(}2m4r%9uPPP>');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpukr_';

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


<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Компоненти';
$lang['admin_content'] = 'Съдържание';
$lang['admin_database_backup'] = 'Резервни копия на базата';
$lang['admin_extensions'] = 'Разширения';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Помощ';
$lang['admin_languages'] = 'Езици';
$lang['admin_logs'] = 'Системни логове';
$lang['admin_media'] = 'Медийна библиотека';
$lang['admin_modules'] = 'Модули';
$lang['admin_plugins'] = 'Плъгини';
$lang['admin_reports'] = 'Дневник на дейността';
$lang['admin_settings'] = 'Системни настройки';
$lang['admin_sysinfo'] = 'Системна информация';
$lang['admin_system'] = 'Система';
$lang['admin_system_firewall'] = 'Системна защитна стена';
$lang['admin_themes'] = 'Теми';
$lang['admin_updates'] = 'Системни актуализации';
$lang['admin_users'] = 'Потребители';
$lang['admin_view_site'] = 'Виж сайта';
$lang['per_page'] = 'На страница';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Благодарим ви, че използвате <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Няма активни елементи.} other{<b>#</b> от <b>%s</b> елемента са активни.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Инсталиране';
$lang['admin_install_error'] = 'Неуспешно инсталиране на пакета.';
$lang['admin_install_error_com'] = 'Инсталирането е неуспешно: %s';
$lang['admin_install_location_app'] = 'Само за това приложение';
$lang['admin_install_location_core'] = 'Всички приложения';
$lang['admin_install_location_select'] = '&#151; Изберете местоположение &#151;';
$lang['admin_install_success'] = 'Пакетът е инсталиран успешно.';
$lang['admin_install_upload'] = 'Качване';
$lang['admin_install_upload_error'] = 'Неуспешно качване на пакета.';
$lang['admin_install_upload_success'] = 'Пакетът е качен успешно.';
$lang['admin_install_upload_tip'] = 'Инсталирайте пакет, като качите неговия <b>.zip</b> файл тук.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Неуспешно почистване на стари резервни копия.';
$lang['admin_database_backup_clean_success'] = 'Изтрити са %d резервни файла. Освободени са %d дисково пространство.';
$lang['admin_database_backup_create'] = 'Създай резервно копие';
$lang['admin_database_backup_create_confirm'] = 'Сигурни ли сте, че искате да създадете резервно копие сега?';
$lang['admin_database_backup_create_error'] = 'Неуспешно създаване на резервно копие. Уверете се, че папката <b>%s</b> е достъпна за запис.';
$lang['admin_database_backup_create_success'] = 'Резервното копие <b>%s</b> е успешно създадено.';
$lang['admin_database_backup_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете избраните резервни копия?';
$lang['admin_database_backup_delete_error'] = 'Неуспешно изтриване на избраните резервни копия.';
$lang['admin_database_backup_delete_success'] = 'Резервните копия бяха успешно изтрити.';
$lang['admin_database_backup_download_error'] = 'Неуспешно изтегляне на избрания архивен файл.';
$lang['admin_database_backup_download_success'] = 'Архивният файл беше изтеглен успешно.';
$lang['admin_database_backup_lock_confirm'] = 'Сигурни ли сте, че искате да заключите тези резервни копия?';
$lang['admin_database_backup_lock_error'] = 'Неуспешно заключване на избраните резервни копия.';
$lang['admin_database_backup_lock_success'] = 'Резервните копия бяха успешно заключени.';
$lang['admin_database_backup_locked_error'] = 'Не може да изтриете заключени резервни копия.';
$lang['admin_database_backup_missing_error'] = 'Резервното копие не може да бъде намерено.';
$lang['admin_database_backup_unlock_confirm'] = 'Сигурни ли сте, че искате да отключите тези резервни копия?';
$lang['admin_database_backup_unlock_error'] = 'Неуспешно отключване на избраните резервни копия.';
$lang['admin_database_backup_unlock_success'] = 'Резервните копия бяха успешно отключени.';
$lang['admin_database_prune'] = 'Поддръжка';
$lang['admin_database_prune_confirm'] = 'Сигурни ли сте, че искате да извършите поддръжка на базата? Ще бъде създадено резервно копие преди изпълнение.';
$lang['admin_database_prune_error'] = 'Неуспешна поддръжка на базата.';
$lang['admin_database_prune_next'] = 'Следваща поддръжка: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Базата данни е успешно поддържана.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Изтрий логове';
$lang['admin_logs_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете избраните логове?';
$lang['admin_logs_delete_error'] = 'Неуспешно изтриване на логове.';
$lang['admin_logs_delete_success'] = 'Логовете бяха успешно изтрити.';
$lang['admin_logs_error_disabled'] = 'Веднага журналирането не е активирано.';
$lang['admin_logs_error_empty'] = 'Няма намерени логове.';
$lang['admin_logs_error_missing'] = 'Файлът с логове не може да бъде намерен или е празен.';
$lang['admin_logs_tip'] = 'Логовете могат бързо да създадат много големи файлове. За активни сайтове, помислете за изтриване на стари логове.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете избраните имейли?';
$lang['admin_emails_delete_error'] = 'Неуспешно изтриване на избраните имейли.';
$lang['admin_emails_delete_success'] = 'Избраните имейли бяха успешно изтрити.';
$lang['admin_emails_email_from'] = 'Изпратено от';
$lang['admin_emails_mail_queue'] = 'Опашка на имейли';
$lang['admin_emails_mailer'] = 'Масов имейл';
$lang['admin_emails_search'] = 'Търсене на имейли по тема или съдържание...';
$lang['admin_emails_send_error'] = 'Неуспешно добавяне на имейла в опашката. Опитайте отново.';
$lang['admin_emails_send_none'] = 'Няма потребители, отговарящи на избраните критерии.';
$lang['admin_emails_send_success'] = 'Имейлът е добавен в опашката и ще бъде изпратен скоро.';
$lang['admin_emails_send_to_banned'] = 'Изпрати до блокирани потребители.';
$lang['admin_emails_send_to_deleted'] = 'Изпрати до изтрити потребители.';
$lang['admin_emails_send_to_disabled'] = 'Изпрати до неактивни потребители.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Добави потребител';
$lang['admin_users_all_users'] = 'Всички потребители';
$lang['admin_users_ban_confirm'] = 'Сигурни ли сте, че искате да блокирате избраните потребители?';
$lang['admin_users_ban_error'] = 'Не може да се блокират избраните потребители.';
$lang['admin_users_ban_success'] = 'Избраните потребители са успешно блокирани.';
$lang['admin_users_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете избраните потребители?';
$lang['admin_users_delete_error'] = 'Не може да се изтрият избраните потребители.';
$lang['admin_users_delete_success'] = 'Избраните потребители са успешно изтрити.';
$lang['admin_users_disable_confirm'] = 'Сигурни ли сте, че искате да деактивирате избраните потребители?';
$lang['admin_users_disable_error'] = 'Не може да се деактивират избраните потребители.';
$lang['admin_users_disable_success'] = 'Избраните потребители са успешно деактивирани.';
$lang['admin_users_edit'] = 'Редактирай потребител';
$lang['admin_users_edit_error'] = 'Неуспешно обновяване на потребител.';
$lang['admin_users_edit_success'] = 'Потребителят е успешно обновен.';
$lang['admin_users_enable_confirm'] = 'Сигурни ли сте, че искате да активирате избраните потребители?';
$lang['admin_users_enable_error'] = 'Не може да се активират избраните потребители.';
$lang['admin_users_enable_success'] = 'Избраните потребители са успешно активирани.';
$lang['admin_users_groups'] = 'Групи';
$lang['admin_users_lock_confirm'] = 'Сигурни ли сте, че искате да заключите избраните потребители?';
$lang['admin_users_lock_error'] = 'Неуспех при заключване на избраните потребители.';
$lang['admin_users_lock_success'] = 'Избраните потребители бяха успешно заключени.';
$lang['admin_users_logged'] = 'Влезли потребители';
$lang['admin_users_manage'] = 'Управление на потребители';
$lang['admin_users_remove_confirm'] = 'Сигурни ли сте, че искате да изтриете окончателно избраните потребители и всичките им данни?';
$lang['admin_users_remove_error'] = 'Не може да се изтрият окончателно избраните потребители и всичките им данни.';
$lang['admin_users_remove_success'] = 'Избраните потребители и всичките им данни са успешно изтрити.';
$lang['admin_users_restore_confirm'] = 'Сигурни ли сте, че искате да възстановите избраните потребители?';
$lang['admin_users_restore_error'] = 'Не може да се възстановят избраните потребители.';
$lang['admin_users_restore_success'] = 'Избраните потребители са успешно възстановени.';
$lang['admin_users_search'] = 'Търси по име или имейл...';
$lang['admin_users_unban_confirm'] = 'Сигурни ли сте, че искате да отблокирате избраните потребители?';
$lang['admin_users_unban_error'] = 'Не може да се отблокират избраните потребители.';
$lang['admin_users_unban_success'] = 'Избраните потребители са успешно отблокирани.';
$lang['admin_users_unlock_confirm'] = 'Сигурни ли сте, че искате да отключите избраните потребители?';
$lang['admin_users_unlock_error'] = 'Неуспешно отключване на избраните потребители.';
$lang['admin_users_unlock_success'] = 'Избраните потребители бяха успешно отключени.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Изчисти логове';
$lang['admin_reports_clear_confirm'] = 'Сигурни ли сте, че искате да изчистите лога на действията?';
$lang['admin_reports_clear_error'] = 'Неуспешно изчистване на лога на действията.';
$lang['admin_reports_clear_success'] = 'Логът на действията е успешно изчистен.';
$lang['admin_reports_latest_actions'] = 'Последни действия';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете избраните файлове?';
$lang['admin_media_delete_error'] = 'Неуспешно изтриване на файлове.';
$lang['admin_media_delete_success'] = 'Файловете са успешно изтрити.';
$lang['admin_media_file_delete_error'] = 'Неуспешно изтриване на файл.';
$lang['admin_media_file_delete_success'] = 'Файлът е успешно изтрит.';
$lang['admin_media_file_update_error'] = 'Неуспешно обновяване на файл.';
$lang['admin_media_file_update_success'] = 'Файлът е успешно обновен.';
$lang['admin_media_search'] = 'Търсене по име, описание или име на файл...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Няма активни модули.} other{<b>#</b> от <b>%s</b> модула са активни.}';
$lang['admin_modules_add'] = 'Добави модул';
$lang['admin_modules_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете модула: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Неуспешно изтриване на модула.';
$lang['admin_modules_delete_success'] = 'Модулът е успешно изтрит.';
$lang['admin_modules_disable_all_confirm'] = 'Сигурни ли сте, че искате да деактивирате всички модули?';
$lang['admin_modules_disable_all_error'] = 'Не може да се деактивират всички модули.';
$lang['admin_modules_disable_all_success'] = 'Всички модули бяха успешно деактивирани.';
$lang['admin_modules_disable_confirm'] = 'Сигурни ли сте, че искате да изключите модула: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Неуспешно изключване на модула.';
$lang['admin_modules_disable_success'] = 'Модулът е успешно изключен.';
$lang['admin_modules_enable_all_confirm'] = 'Сигурни ли сте, че искате да активирате всички модули?';
$lang['admin_modules_enable_all_error'] = 'Не може да се активират всички модули.';
$lang['admin_modules_enable_all_success'] = 'Всички модули бяха успешно активирани.';
$lang['admin_modules_enable_confirm'] = 'Сигурни ли сте, че искате да включите модула: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Неуспешно включване на модула.';
$lang['admin_modules_enable_success'] = 'Модулът е успешно включен.';
$lang['admin_modules_install_tip'] = 'Модулите добавят нови функции и функционалности към сайта ви. Разгледайте наличните модули в <a href="%s" target="_blank" rel="noopener">директорията с модули</a> или качете <b>.zip</b> файл.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Няма активни плъгини.} other{<b>#</b> от <b>%s</b> плъгина са активни.}';
$lang['admin_plugins_add'] = 'Добави плъгин';
$lang['admin_plugins_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете плъгинта: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Неуспешно изтриване на плъгинта.';
$lang['admin_plugins_delete_success'] = 'Плъгин е изтрита успешно.';
$lang['admin_plugins_disable_all_confirm'] = 'Сигурни ли сте, че искате да деактивирате всички плъгини?';
$lang['admin_plugins_disable_all_error'] = 'Не може да се деактивират всички плъгини.';
$lang['admin_plugins_disable_all_success'] = 'Всички плъгини бяха успешно деактивирани.';
$lang['admin_plugins_disable_confirm'] = 'Сигурни ли сте, че искате да деактивирате плъгинта: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Неуспешна деактивация на плъгинта.';
$lang['admin_plugins_disable_success'] = 'Плъгин е деактивирана успешно.';
$lang['admin_plugins_enable_all_confirm'] = 'Сигурни ли сте, че искате да активирате всички плъгини?';
$lang['admin_plugins_enable_all_error'] = 'Не може да се активират всички плъгини.';
$lang['admin_plugins_enable_all_success'] = 'Всички плъгини бяха успешно активирани.';
$lang['admin_plugins_enable_confirm'] = 'Сигурни ли сте, че искате да активирате плъгинта: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Неуспешна активация на плъгинта.';
$lang['admin_plugins_enable_success'] = 'Плъгин е активирана успешно.';
$lang['admin_plugins_install_tip'] = 'Плъгините разширяват съществуващите функции с допълнителни опции или интеграции. Инсталирайте от <a href="%s" target="_blank" rel="noopener">директорията с плъгини</a> или качете <b>.zip</b> файл.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Добави тема';
$lang['admin_themes_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете темата: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Неуспешно изтриване на тема.';
$lang['admin_themes_delete_error_active'] = 'Не можете да изтриете текущо активната тема.';
$lang['admin_themes_delete_success'] = 'Темата е успешно изтрита.';
$lang['admin_themes_disable_confirm'] = 'Сигурни ли сте, че искате да деактивирате темата: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Темата не може да бъде деактивирана.';
$lang['admin_themes_disable_success'] = 'Темата е деактивирана успешно.';
$lang['admin_themes_enable_confirm'] = 'Сигурни ли сте, че искате да активирате темата: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Неуспешна активация на тема.';
$lang['admin_themes_enable_success'] = 'Темата е успешно активирана.';
$lang['admin_themes_install_tip'] = 'Теми променят външния вид и оформлението на сайта ви. Изберете от <a href="%s" target="_blank" rel="noopener">библиотеката с теми</a> или качете <b>.zip</b> файл, за да инсталирате своя.';
$lang['admin_themes_none_tip'] = 'Това приложение работи без тема. Инсталирайте такава, за да персонализирате публичния интерфейс.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Менюта';
$lang['admin_menus_assign_error'] = 'Неуспешно обновяване на позициите на менютата.';
$lang['admin_menus_assign_success'] = 'Позициите на менютата са успешно обновени.';
$lang['admin_menus_header'] = 'Налични са <b>%s</b> позиции за менюта.';
$lang['admin_menus_location'] = 'Позиция';
$lang['admin_menus_locations'] = 'Позиции на менютата';
$lang['admin_menus_manage'] = 'Управление на менюта';
$lang['admin_menus_menu'] = 'Назначено меню';
$lang['admin_menus_none'] = '&#151; Няма &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Добавяне на език';
$lang['admin_languages_default_confirm'] = 'Сигурни ли сте, че искате да направите този език основен за сайта?';
$lang['admin_languages_default_error'] = 'Неуспешна промяна на основния език.';
$lang['admin_languages_default_error_nochange'] = 'Този език вече е основан.';
$lang['admin_languages_default_success'] = 'Основният език е успешно променен.';
$lang['admin_languages_disable_all_confirm'] = 'Сигурни ли сте, че искате да изключите всички езици?';
$lang['admin_languages_disable_all_error'] = 'Неуспешно изключване на всички езици.';
$lang['admin_languages_disable_all_success'] = 'Всички езици са успешно изключени.';
$lang['admin_languages_disable_confirm'] = 'Сигурни ли сте, че искате да изключите езика: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Неуспешно изключване на език.';
$lang['admin_languages_disable_error_default'] = 'Основният език не може да бъде деактивиран.';
$lang['admin_languages_disable_error_nochange'] = 'Този език вече е изключен.';
$lang['admin_languages_disable_success'] = 'Езикът е успешно изключен.';
$lang['admin_languages_enable_all_confirm'] = 'Сигурни ли сте, че искате да включите всички езици?';
$lang['admin_languages_enable_all_error'] = 'Неуспешно включване на всички езици.';
$lang['admin_languages_enable_all_success'] = 'Всички езици са успешно включени.';
$lang['admin_languages_enable_confirm'] = 'Сигурни ли сте, че искате да включите езика: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Неуспешно включване на език.';
$lang['admin_languages_enable_error_nochange'] = 'Този език вече е включен.';
$lang['admin_languages_enable_success'] = 'Езикът е успешно включен.';
$lang['admin_languages_install_tip'] = 'Езиците добавят преводи за интерфейса и съдържанието на вашия сайт. Прегледайте наличните езици в <a href="%s" target="_blank" rel="noopener">директорията с езици</a> или качете <b>.zip</b> пакет, за да инсталирате собствен.';
$lang['admin_languages_tip'] = 'Включвайте, изключвайте и задавайте основния език на сайта. Включените езици са достъпни за посетителите.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Налични са нови актуализации!';
$lang['update_backup_error'] = 'Не може да се създаде резервно копие на съществуващия пакет. Актуализацията беше прекратена.';
$lang['update_check_disabled'] = 'Автоматичните проверки за актуализации са деактивирани. Активирайтеги, за да преглеждате актуализации.';
$lang['update_check_error'] = 'Не може да се извърши проверка за актуализации в момента.';
$lang['update_check_success'] = 'Проверката за актуализации завърши успешно.';
$lang['update_install_error'] = 'Пакетът не можа да бъде инсталиран. Предишната версия беше запазена.';
$lang['update_install_success'] = 'Пакетът беше успешно актуализиран до най-новата версия.';
$lang['update_interval_3days'] = 'На всеки 3 дни';
$lang['update_interval_biweekly'] = 'На всеки 2 седмици';
$lang['update_interval_daily'] = 'Всеки ден';
$lang['update_interval_monthly'] = 'Веднъж месечно';
$lang['update_interval_weekly'] = 'Веднъж седмично';
$lang['update_not_available'] = 'Вашият уебсайт е актуален.';
$lang['update_rollback_error'] = 'Не може да се възстанови предишната версия. Може да е необходима ръчна намеса.';
$lang['update_rollback_success'] = 'Предишната версия беше успешно възстановена.';
$lang['updates_available'] = 'Налични актуализации';
$lang['updates_check_now'] = 'Провери сега';
$lang['updates_check_now_confirm'] = 'Сигурни ли сте, че искате да проверите за актуализации сега?';
$lang['updates_current_version'] = 'Текуща версия';
$lang['updates_enable'] = 'Активиране на актуализации';
$lang['updates_last_check'] = 'Последна проверка: %s';
$lang['updates_latest_version'] = 'Най-нова версия';
$lang['updates_next_check'] = 'Следваща планирана проверка: %s';
$lang['updates_previous_version'] = 'Предишна версия';
$lang['updates_recent'] = 'Скорошно актуализирани';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Неуспешно блокиране на посочения IP адрес.';
$lang['admin_firewall_ban_success'] = 'IP адресът е успешно блокиран.';
$lang['admin_firewall_block_ip'] = 'Блокиране на IP адрес';
$lang['admin_firewall_delete_confirm'] = 'Сигурни ли сте, че искате да отблокирате избраните IP адреси?';
$lang['admin_firewall_delete_error'] = 'Неуспешно отблокиране на избраните IP адреси.';
$lang['admin_firewall_delete_success'] = 'Избраните IP адреси бяха успешно отблокирани.';
$lang['admin_firewall_duration'] = 'Продължителност на блокирането';
$lang['admin_firewall_permanent'] = 'Постоянно';
$lang['admin_firewall_reason'] = 'Причина за блокиране';
$lang['admin_firewall_tip'] = 'Преглед и управление на IP адреси, блокирани от защитната стена поради повтарящи се нарушения или подозрителна активност.';

// Settings
$lang['404_ban_duration'] = 'Продължителност на блокирането 404';
$lang['404_threshold'] = 'Лимит на грешки 404';
$lang['uri_ban_duration'] = 'Продължителност на блокирането URI';
$lang['uri_strike_threshold'] = 'Лимит на URI грешки';


## Инструкция по развертыванию проекта

1. Настроить переменные окружения в файле **[.env](https://laravel.com/docs/9.x/installation#environment-based-configuration)**
2. Установить зависимости `composer install`
3. Запустить приложение выполнив: `php artisan sail:install` и `./vendor/bin/sail up`
4. **[Запустить терминал в контейнере](https://docs.docker.com/engine/reference/commandline/run/) и выполнить миграции `php artisan migrate`
5. В браузере перейти на страницу проекта (по-умолчанию `http://localhost`)

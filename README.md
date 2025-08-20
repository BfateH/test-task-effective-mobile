## Тестовое задание для Effective Mobile

**Для запуска проекта достаточно**
 - composer install
 - Настроить .env
 - php artisan migrate --seed (Сиды просто добавляют 10 тестовых задач)
 - php artisan serve

**Endpoints**
 - GET /api/tasks
 - POST /api/tasks
 - PUT /api/tasks/{task}
 - DELETE /api/tasks/{task}

{task} - id задачи

**Дополнительно**
 - При тестировании через Postman или другую программу добавить заголовок Accept application/json
 - Используется база дынных Sqlite

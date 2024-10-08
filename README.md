# Проект на PHP

## Канал проекта
[https://t.me/ByteBreak](https://t.me/ByteBreak/40)

### Требования:
1. **Docker** — должен быть установлен и настроен на вашем компьютере.

### Как запустить проект:

#### 1. Запустить Docker
Убедитесь, что Docker запущен на вашем компьютере.

#### 1.1 Создать файл .env
Содержимое файла .env.example нужно поменстить в файл .env

#### 2. Запустить проект
Для того чтобы поднять проект, выполните команду:

```bash
docker-compose up -d
```
Это запустит проект в фоновом режиме и создаст необходимые контейнеры.

#### 3. Войти в консоль контейнера PHP
После того как Docker развернёт контейнеры, зайдите в контейнер PHP:

```bash
docker-compose exec php bash
```
Эта команда откроет консоль внутри контейнера PHP, где вы сможете выполнять команды.

#### 4. Установить зависимости
В контейнере выполните команду:

```bash
composer install
```
Это скачает все необходимые зависимости для проекта, указанные в файле composer.json.

### Структура проекта
/app — основная директория, где будет находиться весь ваш PHP-код.

/vendor — директория, созданная Composer, содержащая установленные зависимости.

/index.php — главный файл, через который будет запускаться проект.

/composer.json — файл для управления зависимостями и автозагрузкой классов.


## Основные команды

### Запуск Docker-контейнеров:

```bash
docker-compose up -d
```
Эта команда запускает все контейнеры, определённые в docker-compose.yml.

### Остановка контейнеров:

```bash
docker-compose down
```
Останавливает все запущенные контейнеры.

### Вход в контейнер PHP:

```bash
docker-compose exec php bash
```
Эта команда позволяет войти внутрь контейнера PHP для выполнения команд.

### Установка зависимостей:

```bash
composer install
```
Устанавливает все зависимости проекта, указанные в composer.json.

### Как добавить новый класс
В директории app/ создайте новый файл с вашим классом, например HelloWorldService.php.
Чтобы использовать этот класс, подключите его в любом файле с помощью use.
Пример работы с классом
В файле app/HelloWorldService.php:

```php
<?php

namespace App;

class HelloWorldService
{
    public function sayHello()
    {
        return "Hello, World!";
    }
}
```
Для вызова этого класса в index.php:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use App\HelloWorldService;

$service = new HelloWorldService();
echo $service->sayHello();
```

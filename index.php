<?php
// Подключаем автозагрузку
require __DIR__ . '/vendor/autoload.php';

// Пример использования класса из папки app
use App\HelloWorldService;
use App\TestService;



$helloWorldService = new HelloWorldService();

echo $helloWorldService->sayHello();
echo PHP_EOL;
echo $helloWorldService->getCurrentDateTime();
echo PHP_EOL;
echo $helloWorldService->checkAge(13);
echo PHP_EOL;


$testService = new TestService();
echo $testService->test();
echo PHP_EOL;

// Так же код можно писать вот тут:
echo 'я справился';
echo PHP_EOL;
echo 12+4;
echo PHP_EOL;
$name = 'World';
echo "Hello $name";
echo PHP_EOL;
echo '- Hello ' . $name;
echo PHP_EOL;
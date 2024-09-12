<?php

declare(strict_types=1);


namespace App;


class HelloWorldService
{

    // Метод для вывода приветствия
    public function sayHello(): string
    {
        return "Hello, World!";
    }

    // Метод для сложения двух чисел
    public function addNumbers(float|int $a, float|int $b): int|float
    {
        return $a + $b;
    }

    // Метод для проверки четности числа
    public function isEven(float|int $number): bool
    {
        return $number % 2 === 0;
    }

    // Метод для вывода всех элементов массива
    public function printArrayElements(array $arr): void
    {
        foreach ($arr as $element) {
            echo $element . "\n";
        }
    }

    // Метод для подсчета количества элементов в массиве
    public function countArrayElements(array $arr): int
    {
        return count($arr);
    }

    // Метод для конкатенации строк
    public function concatenateStrings(string $str1, string $str2): string
    {
        return $str1 . ' ' . $str2;
    }

    // Метод для проверки строки на наличие подстроки
    public function containsSubstring(string $string, string $substring): bool
    {
        return strpos($string, $substring) !== false;
    }

    // Метод для получения текущей даты и времени
    public function getCurrentDateTime(): string
    {
        return date('Y-m-d H:i:s');
    }

    // Метод для работы с условием (пример с возрастом)
    public function checkAge(int $age): string
    {
        if ($age >= 18) {
            return "You are an adult.";
        } else {
            return "You are a minor.";
        }
    }

    // Метод для работы с циклом (вывод чисел от 1 до 10)
    public function printNumbers(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            echo $i . "\n";
        }
    }
}
# Сборник паттернов проектирования на PHP
Отработка реализации паттернов проектирования c использованием TDD.

   ```sh
   $ git clone https://github.com/evgeniizab/php.designpatterns.git
   $ cd php.tasks
   $ composer install
   $ vendor/bin/phpunit
   ```
## Оглавление
* [1. Порождающие шаблоны проектирования (Creational)](#Creational)
    * [Абстрактная фабрика (Abstract Factory)](#AbstractFactory)
    * [Одиночка (Singleton)](#Singleton)
* [Структурные шаблоны проектирования (Structural)](#Structural)
* [Поведенческие шаблоны проектирования (Behavioral)](#Behavioral)


## 1. Порождающие шаблоны проектирования (Creational) <a name="Creational" />
```
TEST$ ./vendor/bin/phpunit --filter Creational
```
### Абстрактная фабрика (Abstract Factory) <a name="AbstractFactory" />
Абстрактная фабрика — это порождающий паттерн проектирования, который решает проблему создания целых семейств связанных продуктов, без указания конкретных классов продуктов.

Абстрактная фабрика задаёт интерфейс создания всех доступных типов продуктов, а каждая конкретная реализация фабрики порождает продукты одной из вариаций. Клиентский код вызывает методы фабрики для получения продуктов, вместо самостоятельного создания с помощью оператора new. При этом фабрика сама следит за тем, чтобы создать продукт нужной вариации.

**Применимость:** Паттерн можно часто встретить в PHP-коде, особенно там, где требуется создание семейств продуктов (например, во всевозможных фреймворках).

**Признаки применения паттерна:** Паттерн можно определить по методам, возвращающим фабрику, которая, в свою очередь, используется для создания конкретных продуктов, возвращая их через абстрактные типы или интерфейсы.

Создавать серии связанных или зависимых объектов без указания их конкретных классов. Обычно все созданные классы реализуют один и тот же интерфейс. Клиент абстрактной фабрики не заботится о том, как создаются эти объекты, он просто знает, как они работают вместе.

[Пример 1:](/app/Creational/AbstractFactory/ex1)
```
TEST$ ./vendor/bin/phpunit --filter test_can_create_CsvWriterOnUnix ./tests/Creational/AbstractFactory/AbstractFactoryTest1.php
```
[Пример 2:](/app/Creational/AbstractFactory/ex2)
```
TEST$ ./vendor/bin/phpunit --filter test_can_create_products ./tests/Creational/AbstractFactory/AbstractFactoryTest2.php
```
Материалы:
```
https://designpatternsphp.readthedocs.io/ru/latest/Creational/AbstractFactory/README.html
https://refactoring.guru/ru/design-patterns/abstract-factory/php/example
```

### Одиночка (Singleton) <a name="Singleton" />

Это считается анти-паттерном! Для лучшей тестируемости и сопровождения кода используйте Инъекцию Зависимости (Dependency Injection)!
Назначение

Позволяет содержать только один экземпляр объекта в приложении, которое будет обрабатывать все обращения, запрещая создавать новый экземпляр.
Одиночка — это порождающий паттерн проектирования, который гарантирует, что у класса есть только один экземпляр, и предоставляет к нему глобальную точку доступа.

[Пример 1](/app/Creational/Singleton)
```
TEST$ ./vendor/bin/phpunit --filter test_uniqueness  ./tests/Creational/Singleton/SingletonTest.php 
```
Материалы:
```
https://designpatternsphp.readthedocs.io/ru/latest/Creational/Singleton/README.html
https://refactoring.guru/ru/design-patterns/singleton
```
## Структурные шаблоны проектирования (Structural) <a name="Structural" />

## Поведенческие шаблоны проектирования (Behavioral) <a name="Behavioral" />
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
    * [Строитель (Builder)](#Builder)
* [Структурные шаблоны проектирования (Structural)](#Structural)
    * [Адаптер (Adapter / Wrapper)](#Adapter)
* [Поведенческие шаблоны проектирования (Behavioral)](#Behavioral)
    * [Наблюдатель (Observer)](#Observer)


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
Одиночка — это порождающий паттерн проектирования, который гарантирует, что у класса есть только один экземпляр, и предоставляет к нему глобальную точку доступа.

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

## Строитель (Builder) <a name="Builder" />
Строитель — это порождающий паттерн проектирования, который позволяет создавать сложные объекты пошагово. Строитель даёт возможность использовать один и тот же код строительства для получения разных представлений объектов.

Строитель — это интерфейс для производства частей сложного объекта.

Иногда, если Строитель лучше знает о том, что он строит, этот интерфейс может быть абстрактным классом с методами по-умолчанию (адаптер).

Если у вас есть сложное дерево наследования для объектов, логично иметь сложное дерево наследования и для их строителей.

Примечание: Строители могут иметь текучий интерфейс, например, строитель макетов в PHPUnit.

```
TEST$ ./vendor/bin/phpunit --filter test_can_build_truck  ./tests/Creational/Builder/BuilderTest.php 
TEST$ ./vendor/bin/phpunit --filter test_can_build_car  ./tests/Creational/Builder/BuilderTest.php 

```
Материалы:
```
https://refactoring.guru/ru/design-patterns/builder
https://designpatternsphp.readthedocs.io/ru/latest/Creational/Builder/README.html
```

## 2. Структурные шаблоны проектирования (Structural) <a name="Structural" />
```
TEST$ ./vendor/bin/phpunit --filter Structural
```
### Адаптер (Adapter / Wrapper) <a name="Adapter" />
Адаптер — это структурный паттерн проектирования, который позволяет объектам с несовместимыми интерфейсами работать вместе.

Привести нестандартный или неудобный интерфейс какого-то класса в интерфейс, совместимый с вашим кодом. Адаптер позволяет классам работать вместе стандартным образом, что обычно не получается из-за несовместимых интерфейсов, предоставляя для этого прослойку с интерфейсом, удобным для клиентов, самостоятельно используя оригинальный интерфейс.

[Пример 1:](/app/Structural/Adapter)

```
TEST$ ./vendor/bin/phpunit --filter test_can_turn_page_on_book ./tests/Structural/Adapter/AdapterTest.php 
TEST$ ./vendor/bin/phpunit --filter test_can_turn_page_on_Kindle ./tests/Structural/Adapter/AdapterTest.php 
```
Материалы:
```
https://designpatternsphp.readthedocs.io/ru/latest/Structural/Adapter/README.html
https://refactoring.guru/ru/design-patterns/adapter
```
## Поведенческие шаблоны проектирования (Behavioral) <a name="Behavioral" />
```
TEST$ ./vendor/bin/phpunit --filter Behavioral
```
Поведенческие шаблоны проектирования определяют общие закономерности связей между объектами, реализующими данные паттерны. Следование этим шаблонам уменьшает связность системы и облегчает коммуникацию между объектами, что улучшает гибкость программного продукта.
### Наблюдатель (Observer) <a name="Observer" />
Наблюдатель — это поведенческий паттерн проектирования, который создаёт механизм подписки, позволяющий одним объектам следить и реагировать на события, происходящие в других объектах.

Для реализации публикации/подписки на поведение объекта, всякий раз, когда объект «Subject» меняет свое состояние, прикрепленные объекты «Observers» будут уведомлены. Паттерн используется, чтобы сократить количество связанных напрямую объектов и вместо этого использует слабую связь (loose coupling).

[Пример 1:](/app/Behavioral/Observer/ex1)

```
TEST$ ./vendor/bin/phpunit --filter test_change_in_user_leads_to_user_observer_being_notified ./tests/Behavioral/Observer/ObserverTest.php 
```
Материалы:
```
https://designpatternsphp.readthedocs.io/ru/latest/Behavioral/Observer/README.html
https://refactoring.guru/ru/design-patterns/observer
```

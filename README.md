# PHP 8

Дмитрий Котеров, Игорь Симдянов. PHP 8. В подлиннике

## Помощь и отзывы

Раздел [Issues](https://github.com/igorsimdyanov/php8/issues)

## Содержание

### Предисловие

- Для кого написана эта книга?
- Исходные коды
- Четвертое издание
- Общая структура книги
- Листинги
- Предметный указатель
- Благодарности от Дмитрия Котерова
- Благодарности от Игоря Симдянова

## Часть I. Основы веб-разработки

### Глава 1. Принципы работы Интернета

- Протоколы передачи данных
- Семейство TCP/IP
- Протокол IP
- Версии протокола IP
- Доменное имя
- Порт
- Резюме

### Глава 2. Протокол HTTP

- Зачем нужен протокол HTTP?
- Ресурсы
- Параметры URL
- Методы
- HTTP-сообщения
- HTTP-заголовки
- HTTP-коды ответов
- Утилита curl
- Резюме

### [Глава 3. Установка PHP](install)

- Установка PHP в Windows
- Переменная окружения PATH
- Установка PHP в macos
- Установка PHP в Linux (Ubuntu)
- Проверочный скрипт
- Ошибки в скриптах
- Запуск встроенного сервера
- Файл hosts
- Вещание вовне
- Конфигурирование PHP
- Интерактивный PHP
- Документация
- Проверка стиля кода
- Docker
- Резюме

## Часть II. Основы языка PHP

### [Глава 4. Характеристика языка PHP](phpbasics)

- Что умеет PHP?
- Веб-программирование до PHP
- История PHP
- Что нового в PHP 8?
- Пример PHP-программы
- Начальные и конечные теги
- Использование точки с запятой
- Фигурные скобки
- Комментарии
- Включение PHP-файла
- Элементы языка
- Резюме

### [Глава 5. Переменные и типы данных](variables)

- Переменные
- Типы переменных
- Целые числа: integer
- Вещественные числа: double
- Логический тип: boolean
- Строки: string
- Массивы: array
- Объект: object
- Ресурс: resource
- Специальный тип null
- Действия с переменными
- Определение типа переменной
- Некоторые условные обозначения
- Неявное приведение типа
- Явное приведение типа
- Ссылочные переменные
- Отладочные функции
- Резюме

### [Глава 6. Классы и объекты](classes)

- Объектно-ориентированное программирование
- Зачем нужны классы?
- Использование готовых классов
- Создание классов
- Разделение классов и остального кода
- Создание объекта
- Область видимости переменных класса
- Типы переменных класса
- Спецификаторы доступа
- Свойства «только для чтения»
- Дамп объекта
- Статические переменные класса
- Ссылки на переменные
- Клонирование объектов
- Резюме

### [Глава 7. Константы](constants)

- Предопределенные константы
- Создание константы
- Проверка существования константы
- Константы с динамическими именами
- Абсолютный и относительный пути к файлу
- Константы класса
- Резюме

### [Глава 8. Операторы PHP](expr)

- Оператор «точка с запятой»
- Оператор «точка»
- Оператор «запятая»
- Арифметические операторы
- Битовые операторы
- Операторы сравнения
- Приоритет операторов
- Резюме

### [Глава 9. Условия](conditions)

- Зачем в программе нужно ветвление?
- Конструкция if
- Логические операторы
- Условный оператор x ? y : z
- Оператор ??
- Конструкция switch
- Конструкция match
- Конструкция goto
- Резюме

### [Глава 10. Циклы](loops)

- Зачем нужны циклы?
- Способы организации циклов в PHP
- Цикл while
- Вложенные циклы
- Досрочное прекращение циклов
- Цикл do ... while
- Цикл for
- Резюме

### [Глава 11. Ассоциативные массивы](arrays)

- Создание массива
- Ассоциативные и индексные массивы
- Многомерные массивы
- Интерполяция элементов массива в строки
- Конструкция list()
- Обход массива
- Цикл foreach
- Сечения массива
- Слияние массивов
- Сравнение массивов
- Проверка существования элементов массива
- Строки как массивы
- Количество элементов в массиве
- Сумма элементов массива
- Случайный элемент массива
- Сортировка массива
- Добавление/удаление элементов
- Работа с ключами массива
- Резюме

### [Глава 12. Функции и области видимости](functions)

- Зачем нужны функции?
- Создание функции
- Параметры и аргументы
- Типы аргументов и возвращаемого значения
- Передача параметров по ссылке
- Локальные переменные
- Глобальные переменные
- Статические переменные
- Резюме

### [Глава 13. Сложные функции](complicated_functions)

- Рекурсивные функции
- Вложенные функции
- Переменные функции
- Функции обратного вызова
- Анонимные функции
- Замыкания
- Стрелочные функции
- Резюме

### [Глава 14. Методы класса](methods)

- Создание метода
- Обращение к методам объекта
- Проверка существования метода
- Специальные методы
- Конструктор __construct()
- Параметры конструктора
- Деструктор __destruct()
- Методы-аксессоры
- Статические методы
- Класс — self, объект — $this
- Динамические методы
- Интерполяция объекта
- Тип callable
- Оператор ?->
- Резюме

...

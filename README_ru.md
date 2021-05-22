# Сборщик моделей.

Для сборки моделей имеется несколько "путей":
```PHP
interface Ways
{
    public const CONSTRUCTOR = 1;
    public const PUBLIC_FIELDS = 2;
    public const SETTERS = 4;
    public const REFLECTION = 8;
    public const ANY = 15;
}
```

Путь `CONSTRUCTOR` создает модель с помощью конструктора, остальные по аналогии.
Исключение путь "ANY", этот путь использует анализ модели и подбирает необходимый путь
для каждого поля.

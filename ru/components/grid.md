# Grid

Для расположения элементов на странице можно использовать компонент `Grid`.

```php
make(iterable $components = [])
```

Чтобы расположить элементы внутри Grid, используется компонент `Column`.

```php
make(
    iterable $components = [],
    int $colSpan = 12,
    int $adaptiveColSpan = 12,
)
```

 - $components - набор компонентов,
 - $colSpan - количество колонок, которые занимает блок для размеров экрана 1280px и более,
 - $adaptiveColSpan - количество колонок, которые занимает блок для размеров экрана до 1280px.

> [!NOTE]
> Сетка состоит из 12 колонок.

~~~tabs
tab: Class
```php
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Text;

Grid::make([
    Column::make([
            Text::make(fake()->text())
        ],
        colSpan: 6,
        adaptiveColSpan: 6
    ),
    Column::make([
        Text::make(fake()->text())
    ],
        colSpan: 6,
        adaptiveColSpan: 6
    ),
])
```
tab: Blade
```blade
<x-moonshine::grid>
    <x-moonshine::column adaptiveColSpan="6" colSpan="6">
        {{ fake()->text() }}
    </x-moonshine::column>
    <x-moonshine::column adaptiveColSpan="6" colSpan="6">
        {{ fake()->text() }}
    </x-moonshine::column>
</x-moonshine::grid>
```
~~~
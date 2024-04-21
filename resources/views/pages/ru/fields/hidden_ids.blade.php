<x-page
    title="HiddenIds"
    :sectionMenu="[
        'Разделы' => [
            ['url' => '#make', 'label' => 'Make'],
            ['url' => '#use', 'label' => 'Применение'],
        ]
    ]"
>

<x-p>
    Поле <em>HiddenIds</em> используется передачи primary key выбранных элементов.
</x-p>

<x-sub-title id="make">Make</x-sub-title>

<x-p>
    В качестве параметра метод <code>make()</code> принимает название компонента.
</x-p>

<x-code language="php">
HiddenIds::make('index-table')
</x-code>

<x-sub-title id="use">Применение</x-sub-title>

<x-code language="php">
use MoonShine\Components\FlexibleRender;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Fields\HiddenIds; // [tl! focus]

//...

public function buttons(): array
{
    return [
        ActionButton::make('Active', route('moonshine.posts.mass-active', $this->uriKey()))
            ->inModal(fn () => 'Active', fn (): string => (string) form(
                route('moonshine.posts.mass-active', $this->uriKey()),
                fields: [
                    HiddenIds::make($this->listComponentName()), // [tl! focus]
                    FlexibleRender::make(__('moonshine::ui.confirm_message')),
                ]
            )
                ->async()
                ->submit('Active', ['class' => 'btn-secondary']))
            ->bulk(),
    ];
}

//...
</x-code>

</x-page>

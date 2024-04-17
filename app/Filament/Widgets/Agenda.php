<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class Agenda extends Widget
{

    protected int | string | array $columnSpan = 1;
    protected static string $view = 'filament.widgets.agenda';
}

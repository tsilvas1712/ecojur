<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Agenda extends Page
{
    protected static ?string $navigationGroup = 'Gestão';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationLabel = 'Agenda';
    protected static ?int $navigationSort = 3;

    protected static string $view = 'filament.pages.agenda';
}

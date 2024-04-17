<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Financeiro extends Page
{
    protected static ?string $navigationGroup = 'Gestão';
    protected static ?string $navigationIcon = 'heroicon-s-currency-dollar';
    protected static ?string $navigationLabel = 'Financeiro';
    protected static ?int $navigationSort = 5;

    protected static string $view = 'filament.pages.financeiro';
}

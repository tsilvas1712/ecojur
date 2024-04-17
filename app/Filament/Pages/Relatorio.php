<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Relatorio extends Page
{
    protected static ?string $navigationGroup = 'Ferramentas';
    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationLabel = 'Relatórios';
    protected static ?int $navigationSort = 6;

    protected static string $view = 'filament.pages.relatorio';
}

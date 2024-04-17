<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Configuracao extends Page
{
    protected static ?string $navigationGroup = 'Ferramentas';
    protected static ?string $navigationIcon = 'heroicon-s-cog';
    protected static ?string $navigationLabel = 'Configurações';
    protected static ?int $navigationSort = 7;

    protected static string $view = 'filament.pages.configuracao';
}

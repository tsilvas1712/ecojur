<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Clintes extends Page
{
    protected static ?string $navigationGroup = 'Gestão';
    protected static ?string $navigationLabel = 'Cadastro de Clientes';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 1;

    protected static string $view = 'filament.pages.clintes';
}

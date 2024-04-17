<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Documentos extends Page
{
    protected static ?string $navigationGroup = 'Gestão';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Controle de Documentos';
    protected static ?int $navigationSort = 4;

    protected static string $view = 'filament.pages.documentos';
}

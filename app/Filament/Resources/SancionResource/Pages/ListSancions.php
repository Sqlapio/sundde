<?php

namespace App\Filament\Resources\SancionResource\Pages;

use App\Filament\Resources\SancionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSancions extends ListRecords
{
    protected static string $resource = SancionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

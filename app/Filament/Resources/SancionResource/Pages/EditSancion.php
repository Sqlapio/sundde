<?php

namespace App\Filament\Resources\SancionResource\Pages;

use App\Filament\Resources\SancionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSancion extends EditRecord
{
    protected static string $resource = SancionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

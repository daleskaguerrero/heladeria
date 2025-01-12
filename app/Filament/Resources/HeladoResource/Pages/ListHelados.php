<?php

namespace App\Filament\Resources\HeladoResource\Pages;

use App\Filament\Resources\HeladoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHelados extends ListRecords
{
    protected static string $resource = HeladoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

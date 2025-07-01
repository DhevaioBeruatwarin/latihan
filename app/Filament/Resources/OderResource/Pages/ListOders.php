<?php

namespace App\Filament\Resources\OderResource\Pages;

use App\Filament\Resources\OderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOders extends ListRecords
{
    protected static string $resource = OderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

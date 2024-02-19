<?php

namespace App\Filament\Resources\TelegramGroupResource\Pages;

use App\Filament\Resources\TelegramGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTelegramGroups extends ListRecords
{
    protected static string $resource = TelegramGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TelegramGroupResource\Pages;

use App\Filament\Resources\TelegramGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTelegramGroup extends EditRecord
{
    protected static string $resource = TelegramGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

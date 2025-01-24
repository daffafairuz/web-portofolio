<?php

namespace App\Filament\Resources\MainContentResource\Pages;

use App\Filament\Resources\MainContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainContent extends EditRecord
{
    protected static string $resource = MainContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}

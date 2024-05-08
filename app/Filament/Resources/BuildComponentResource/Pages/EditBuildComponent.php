<?php

namespace App\Filament\Resources\BuildComponentResource\Pages;

use App\Filament\Resources\BuildComponentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuildComponent extends EditRecord
{
    protected static string $resource = BuildComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

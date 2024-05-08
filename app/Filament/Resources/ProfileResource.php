<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\BelongsToSelect::make('user_id')
                ->label('Пользователь')
                ->relationship('user', 'email'),
            Forms\Components\Textarea::make('info')
                ->label('Информация')
                ->nullable(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('user.name')
                ->label('Пользователь')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('info')
                ->label('Информация')
                ->limit(50)
                ->searchable(),
            // Timestamps можно отобразить в таблице, если нужно
            Tables\Columns\TextColumn::make('created_at')
                ->label('Создан')
                ->dateTime('d-m-Y H:i')
                ->sortable(),
            Tables\Columns\TextColumn::make('updated_at')
                ->label('Обновлен')
                ->dateTime('d-m-Y H:i')
                ->sortable(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}

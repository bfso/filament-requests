<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LockedWeekdaysResource\Pages;
use App\Filament\Resources\LockedWeekdaysResource\RelationManagers;
use App\Models\LockedWeekdays;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class LockedWeekdaysResource extends Resource
{
    protected static ?string $model = LockedWeekdays::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('weekday')->options(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListLockedWeekdays::route('/'),
            'create' => Pages\CreateLockedWeekdays::route('/create'),
            'edit' => Pages\EditLockedWeekdays::route('/{record}/edit'),
        ];
    }
}

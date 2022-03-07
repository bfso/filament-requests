<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserTaskResource\Pages;
use App\Filament\Resources\UserTaskResource\RelationManagers;
use App\Models\UserTask;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class UserTaskResource extends Resource
{
    protected static ?string $model = UserTask::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('task.description'),
                Tables\Columns\TextColumn::make('user.email'),
                Tables\Columns\BooleanColumn::make('done')
                    ->action('toggleDone'),
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
            'index' => Pages\ListUserTasks::route('/'),
            'create' => Pages\CreateUserTask::route('/create'),
            'edit' => Pages\EditUserTask::route('/{record}/edit'),
        ];
    }
}

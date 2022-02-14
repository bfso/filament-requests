<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveyPensumResource\Pages;
use App\Filament\Resources\SurveyPensumResource\RelationManagers;
use App\Models\SurveyPensum;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class SurveyPensumResource extends Resource
{
    protected static ?string $model = SurveyPensum::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\BelongsToSelect::make('person')->relationship('person', 'name')->required(),
                Forms\Components\TextInput::make('classHouresOld')->postfix('hours')->default(6)->required(),
                Forms\Components\TextInput::make('classHouresNew')->postfix('hours')->default(6)->required(),
                Forms\Components\HasManyRepeater::make('weekday')->relationship('pensumBlockedWeekdays', 'weekday')
                            ->schema([
                                Forms\Components\Select::make('weekday')->options(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'])->required(),
                                Forms\Components\TextInput::make('cause')->required()
                            ]),
                Forms\Components\Textarea::make('cause')->required(),
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
            RelationManagers\PensumLockedWeekdaysRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSurveyPensums::route('/'),
            'create' => Pages\CreateSurveyPensum::route('/create'),
            'edit' => Pages\EditSurveyPensum::route('/{record}/edit'),
        ];
    }
}

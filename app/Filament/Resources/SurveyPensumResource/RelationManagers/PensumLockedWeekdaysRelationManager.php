<?php

namespace App\Filament\Resources\SurveyPensumResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class PensumLockedWeekdaysRelationManager extends BelongsToManyRelationManager
{
    protected static string $relationship = 'locked_weekdays';

    protected static ?string $recordTitleAttribute = 'weekday';

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
                
            ])
            ->filters([
                //
            ]);
    }
}

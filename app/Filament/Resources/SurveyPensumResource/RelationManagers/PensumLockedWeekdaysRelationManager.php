<?php

namespace App\Filament\Resources\SurveyPensumResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class PensumLockedWeekdaysRelationManager extends BelongsToManyRelationManager
{
    protected static string $relationship = 'pensumBlockedWeekdays';

    protected static ?string $recordTitleAttribute = 'weekday';

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
                
            ])
            ->filters([
                //
            ]);
    }
}

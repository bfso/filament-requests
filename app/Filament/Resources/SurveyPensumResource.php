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
use App\Models\User;

class SurveyPensumResource extends Resource
{
    protected static ?string $model = SurveyPensum::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $month = date('m'); 
        $surveyYear = "";
        if($month >= 8) {
            $surveyYear = date('Y', strtotime('+1 years'))."/".date('Y', strtotime('+2 years'));
        }
        else {
            $surveyYear = date('Y')."/".date('Y', strtotime('+1 years'));
        }

        return $form
            ->schema([
<<<<<<< HEAD
                Forms\Components\BelongsToSelect::make('person_id')->relationship('person', 'name')->label('Teacher')->required(),
                Forms\Components\TextInput::make('classhoures_old')->postfix('hours')->default(6)->required(),
                Forms\Components\TextInput::make('classhoures_new')->postfix('hours')->default(6)->required(),
=======
                Forms\Components\BelongsToSelect::make('person')->relationship('person', 'name')->required(),
                Forms\Components\TextInput::make('classHouresOld')->postfix('hours')->default(6)->required(),
                Forms\Components\TextInput::make('classHouresNew')->postfix('hours')->default(6)->required(),
>>>>>>> 484af85d2bef6f4a1691f353b4ef04e88217e887
                Forms\Components\HasManyRepeater::make('weekday')->relationship('pensumBlockedWeekdays', 'weekday')
                            ->schema([
                                Forms\Components\Select::make('weekday')->options(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'])->required(),
                                Forms\Components\TextInput::make('cause')->required()
                            ]),
<<<<<<< HEAD
                Forms\Components\Checkbox::make('headteacher_visit')->default(false),
                Forms\Components\Checkbox::make('headteacher_talk')->default(false),
                Forms\Components\Hidden::make('year')->default($surveyYear),
                Forms\Components\Textarea::make('note')->required()
                
=======
                Forms\Components\Textarea::make('cause')->required(),
>>>>>>> 484af85d2bef6f4a1691f353b4ef04e88217e887
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('person.name')->label('Teacher'),
                Tables\Columns\TextColumn::make('note')->label('Note'),
                Tables\Columns\TextColumn::make('year')->label('Year'),
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

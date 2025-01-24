<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CurriculumVitaeResource\Pages;
use App\Filament\Resources\CurriculumVitaeResource\RelationManagers;
use App\Models\CurriculumVitae;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField;

class CurriculumVitaeResource extends Resource
{
    protected static ?string $model = CurriculumVitae::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('title')
                    ->required(),
                FileUpload::make('cv_pdf')
                    ->label('cv(pdf)')
                    ->required()
                    ->directory('cv'),
                PdfViewerField::make('cv_pdf')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
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
            'index' => Pages\ListCurriculumVitaes::route('/'),
            'create' => Pages\CreateCurriculumVitae::route('/create'),
            'edit' => Pages\EditCurriculumVitae::route('/{record}/edit'),
        ];
    }
}

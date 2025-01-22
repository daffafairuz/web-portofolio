<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainContentResource\Pages;
use App\Filament\Resources\MainContentResource\RelationManagers;
use App\Models\MainContent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use FilamentTiptapEditor\TiptapEditor;

class MainContentResource extends Resource
{
    protected static ?string $model = MainContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label('Name')
                ->maxLength(255),

            TextInput::make('occupation')
                ->required()
                ->label('Occupation')
                ->maxLength(255),

            TextInput::make('email')
                ->required()
                ->label('Email')
                ->email()
                ->maxLength(255),

            TextInput::make('telephone_number')
                ->required()
                ->label('Telephone Number')
                ->maxLength(255),

            FileUpload::make('logo')
                ->label('Logo')
                ->image()
                ->required()
                ->maxSize(1024)
                ->disk('public'),

            FileUpload::make('profile_photo')
                ->label('Profile Photo')
                ->image()
                ->required()
                ->maxSize(1024)
                ->disk('public'),

            TiptapEditor::make('description')
                ->label('Description')
                ->required()
                ->columnSpan('full'), // Menyediakan kolom penuh untuk edito
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo')
                ->circular(),
                TextColumn::make('name'),
                TextColumn::make('occupation'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListMainContents::route('/'),
            'create' => Pages\CreateMainContent::route('/create'),
            'edit' => Pages\EditMainContent::route('/{record}/edit'),
        ];
    }
}

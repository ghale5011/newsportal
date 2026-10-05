<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Article Details")
                    ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->required(),
            ]),

                Section::make("Article Content")
                    ->schema([
                TextInput::make('author_id')
                    ->numeric()
                    ->default(null),
                RichEditor::make('content')
                    ->required(),
            ]),

                Section::make("SEO")
                    ->schema([
                TextInput::make('meta_title')
                    ->required(),
                TextInput::make('meta_description')
                    ->required(),
                    ]),

            ]);
    }
}

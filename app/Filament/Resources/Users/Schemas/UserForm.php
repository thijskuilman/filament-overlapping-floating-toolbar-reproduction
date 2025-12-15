<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Filament\Plugins\CustomHeadingPlugin;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('bio')
                    ->columnSpanFull()
                    ->json()
                    ->plugins([
                        CustomHeadingPlugin::make(),
                    ])
            ]);
    }
}

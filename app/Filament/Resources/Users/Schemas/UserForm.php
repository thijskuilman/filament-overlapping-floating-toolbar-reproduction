<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               //
            ]);
    }
}

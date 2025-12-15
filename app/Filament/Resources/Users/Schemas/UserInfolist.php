<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Filament\Plugins\CustomHeadingPlugin;
use Filament\Forms\Components\RichEditor\RichContentRenderer;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')->columnSpanFull(),

                TextEntry::make('bio')
                    ->html()
                    ->extraAttributes(['class' => 'fi-prose'])
                    ->getStateUsing(fn($record) => RichContentRenderer::make($record->bio)
                        ->plugins([
                            // TODO: This has no effect, since Heading is already registered in RichContentRender.php
                            CustomHeadingPlugin::make(),
                        ])
                        ->toUnsafeHtml()
                    )
                    ->columnSpanFull(),
            ]);
    }
}

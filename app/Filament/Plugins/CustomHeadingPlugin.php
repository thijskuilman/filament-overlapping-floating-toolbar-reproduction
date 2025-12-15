<?php

namespace App\Filament\Plugins;

use App\Filament\RichContentPhpExtensions\CustomHeading;
use Filament\Forms\Components\RichEditor\Plugins\Contracts\RichContentPlugin;

class CustomHeadingPlugin  implements RichContentPlugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getTipTapPhpExtensions(): array
    {
        return [
            app(CustomHeading::class),
        ];
    }

    public function getTipTapJsExtensions(): array
    {
        return [];
    }

    public function getEditorTools(): array
    {
        return [];
    }

    public function getEditorActions(): array
    {
        return [];
    }
}

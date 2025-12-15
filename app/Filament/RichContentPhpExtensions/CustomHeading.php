<?php

namespace App\Filament\RichContentPhpExtensions;
use Tiptap\Nodes\Heading;

class CustomHeading extends Heading
{
    #[\Override]
    public function addOptions()
    {
        return [
            'levels' => [1, 2, 3, 4, 5, 6],
            'HTMLAttributes' => [
                // TODO: Let's add a red background for demo purposes...
                'style' => 'background: red!important'
            ],
        ];
    }
}

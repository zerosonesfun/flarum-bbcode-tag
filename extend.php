<?php

/*
 * This file is part of an extension for Flarum.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
        (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[t]{TEXT100}[/t]',
                '<a href="/all?q={TEXT100}" class="tagPhrase" title="Search for {TEXT100}">{TEXT100}</a>'
            );

            $config->BBCodes->addCustom(
                '[ht={TEXT101}]',
                '<a href="/all?q={TEXT101}" class="tagPhrase" title="Search for {TEXT101}">#{TEXT101}</a>'
            );
        })
];

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
                '<a href="/all?q={TEXT101}" class="tagPhrase-Hashtag" title="Search for {TEXT101}">#{TEXT101}</a>'
            );
            $config->BBCodes->addCustom(
                '[ct={TEXT102}]',
                '<a href="https://www.google.com/search?q={TEXT102}+stock" class="tagPhrase-Stock" title="Check on stock {TEXT102}" rel="ugc noopener nofollow" target="_blank">${TEXT102}</a>'
            );
            $config->BBCodes->addCustom(
                '[g={TEXT103}]',
                '<a href="https://www.google.com/search?q={TEXT103}" class="tagPhrase-Google" title="Google {TEXT103}" rel="ugc noopener nofollow" target="_blank">{TEXT103}</a>'
            );
            $config->BBCodes->addCustom(
                '[ts={TEXT104}]',
                '<a href="https://twitter.com/search/?q={TEXT104}" class="tagPhrase-Twitter" title="Twitter search for {TEXT104}" rel="ugc noopener nofollow" target="_blank">{TEXT104}</a>'
            );

        })
];

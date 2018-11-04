<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Page Content')
    ->where('post_type', '=', 'page')
    ->add_fields([
        Field::make('complex', 'page_content', 'Inhalte')
            /*----------------------------.
            |                             |
            |   J u m b o t r o n         |
            |                             |
            '----------------------------*/
            ->add_fields('jumbotron', [
                Field::make('complex', 'jumbotron_items', 'Stichpunkte')
                    ->add_fields('stichpunkte', [
                        Field::make('text', 'jumbotron_item_text', 'Text'),
                    ])
            ])
    ]);


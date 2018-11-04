<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$basic_options_container = Container::make('theme_options', __('Theme Options'))
    ->add_fields([
        Field::make('association', 'guidelines', 'Richtlinien')
            ->set_types([
                [
                    'type' => 'post',
                    'post_type' => 'page',
                ]]),

        Field::make('text', 'external_profiles_facebook', 'Facebook'),
    ]);



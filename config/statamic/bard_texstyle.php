<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | List of toggleable styles.
    |
    */

    'styles' => [

        'hero' => [
            'type' => 'heading',
            'level' => 1,
            'name' => 'Hero Heading',
            'ident' => 'H',
            'class' => 'hero-heading',
            'cp_css' => 'font-family: serif',
            'cp_badge' => false,
        ],

        'intro' => [
            'type' => 'paragraph',
            'name' => 'Introduction',
            'ident' => 'I',
            'class' => 'introduction',
            'cp_css' => 'font-size: 1.25em; margin-top: -0.5em',
            'cp_badge' => false,
        ],

        'brand' => [
            'type' => 'span',
            'name' => 'Brand Text',
            'ident' => 'B',
            'class' => 'brand-text',
            'cp_css' => 'color: dodgerblue; font-weight: 700',
            'cp_badge' => false,
        ],

        'action' => [
            'type' => 'link',
            'name' => 'Action',
            'ident' => 'A',
            'class' => 'action',
            'cp_css' => 'border: 1px solid dodgerblue; padding: 0.25em 0.5em; border-radius: 4px',
            'cp_badge' => false,
        ],

        'square_list' => [
            'type' => 'bulletList',
            'name' => 'Square List',
            'ident' => '■',
            'class' => 'square-list',
            'cp_css' => 'list-style-type: square',
            'cp_badge' => false,
        ],

        'roman_list' => [
            'type' => 'orderedList',
            'name' => 'Roman List',
            'ident' => 'IV',
            'class' => 'roman-list',
            'cp_css' => [
                '&' => 'list-style-type: upper-roman',
                '& ol' => 'list-style-type: lower-roman',
            ],
            'cp_badge' => false,
        ],

        'two_columns' => [
            'type' => 'div',
            'name' => 'Two Columns',
            'ident' => '❙ ❙',
            'class' => 'two-columns',
            'cp_badge' => true,
            'cp_css' => 'column-count: 2; column-gap: 1em',
            'cp_badge' => false,
        ],

        'three_columns' => [
            'type' => 'div',
            'name' => 'Three Columns',
            'ident' => '❙❙❙',
            'class' => 'three-columns',
            'cp_badge' => true,
            'cp_css' => 'column-count: 3; column-gap: 1em',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | Default classes that will be applied to elements with no style set. The
    | standard set will be used if no set is selected in the field config.
    |
    */

    'default_classes' => [
        'standard' => [
            // 'heading' => [
            //     1 => 'heading-1',
            //     2 => 'heading-2',
            //     3 => 'heading-3',
            //     4 => 'heading-4',
            //     5 => 'heading-5',
            //     6 => 'heading-6',
            // ],
            // 'paragraph' => 'paragraph',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    |
    | By default the class names are saved to your content. If you would prefer
    | to save the style keys instead you can change this option to "key".
    |
    */

    'store' => 'class',

];

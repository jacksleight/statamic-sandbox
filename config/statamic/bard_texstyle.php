<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | List of styles.
    |
    */

    'styles' => [

        'title' => [
            'type' => 'heading',
            'level' => 1,
            'name' => 'Title',
            'ident' => 'T',
            'icon' => null,
            'class' => 'title',
            'cp_css' => 'text-decoration: underline; text-underline-offset: 0.1em; text-decoration-color: #c5ccd4',
            'cp_badge' => false,
        ],

        'intro' => [
            'type' => 'paragraph',
            'name' => 'Bigger',
            'ident' => 'I',
            'icon' => null,
            'class' => 'text-2xl',
            'cp_css' => 'font-size: 1.1em',
            'cp_badge' => false,
        ],

        'bigger_text' => [
            'type' => 'paragraph',
            'name' => 'Bigger',
            'ident' => 'T',
            'icon' => null,
            'class' => 'text-xl',
            'cp_css' => 'font-weight: bold; font-size: 1.1em;',
            'cp_badge' => false,
        ],

        'brand' => [
            'type' => 'span',
            'name' => 'Brand Text',
            'ident' => 'B',
            'icon' => 'alert-alarm-bell',
            'class' => 'brand-text',
            'cp_css' => 'color: #ff269e; font-weight: 700',
            'cp_badge' => false,
        ],

        'comic' => [
            'type' => 'span',
            'name' => 'Comic Text',
            'ident' => 'C',
            'icon' => null,
            'class' => 'comic-text',
            'cp_css' => 'font-family: "Comic Sans MS", cursive',
            'cp_badge' => false,
        ],

        'branded' => [
            'type' => 'link',
            'name' => 'Branded Link',
            'ident' => 'B',
            'icon' => null,
            'class' => 'brand-text',
            'cp_css' => 'color: #ff269e; font-weight: 700',
            'cp_badge' => false,
        ],

        'action' => [
            'type' => 'link',
            'name' => 'Action',
            'ident' => 'A',
            'icon' => null,
            'class' => 'action',
            'cp_css' => 'background: #737f8d; color: white; padding: 0.2em 0.5em; border-radius: 4px',
            'cp_badge' => false,
        ],

        'square_list' => [
            'type' => 'bulletList',
            'name' => 'Square List',
            'ident' => '■',
            'icon' => null,
            'class' => 'square-list',
            'cp_css' => 'list-style-type: square',
            'cp_badge' => false,
        ],

        'roman_list' => [
            'type' => 'orderedList',
            'name' => 'Roman List',
            'ident' => 'IV',
            'icon' => null,
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
            'icon' => null,
            'class' => 'two-columns',
            'cp_css' => 'column-count: 2; column-gap: 16px',
            'cp_badge' => true,
        ],

        'three_columns' => [
            'type' => 'div',
            'name' => 'Three Columns',
            'ident' => '❙❙❙',
            'icon' => null,
            'class' => 'three-columns',
            'cp_css' => 'column-count: 3; column-gap: 16px',
            'cp_badge' => true,
        ],

        'hint' => [
            'type' => 'div',
            'name' => 'Important Hint',
            'ident' => '✱',
            'icon' => 'square-solid',
            'class' => 'hint',
            'cp_css' => [
                '&' => 'background: #e4ebf1; padding: 0.85em; border-radius: 2px',
                '& h3' => 'font-size: 1em !important; margin-bottom: 0 !important',
                '& h3::before' => 'content: "✱ "; color: #ff269e',
                '& p' => 'margin-bottom: 0 !important; font-size: 0.8em !important',
            ],
            'cp_badge' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Pins (pro only)
    |--------------------------------------------------------------------------
    |
    |
    |
    */

    'pins' => [

        'icon' => [
            'display' => 'Icon',
            'icon' => 'plump/fire-flame-burn-hot',
            'ident' => '3',
            'instructions' => 'An icon graphic.',
            'view' => 'icon-pin',
            'fields' => [
                'src' => [
                    'display' => 'Icon',
                    'type' => 'assets',
                    'max_files' => 1,
                    'mode' => 'list',
                    'preview' => true,
                ],
            ],
        ],

        'date' => [
            'display' => 'Date',
            'icon' => 'plump/calendar-date',
            'instructions' => 'Some date text.',
            'fields' => [
                'when' => [
                    'display' => 'When',
                    'type' => 'text',
                    'default' => 'today',
                    'validate' => ['required'],
                    'preview' => true,
                ],
                'format' => [
                    'display' => 'Format',
                    'type' => 'text',
                ],
            ],
        ],

        'footnote' => [
            'display' => 'Footnote',
            'icon' => 'plump/mail-chat-bubble-text',
            'instructions' => 'Some footnote text.',
            'fields' => [
                'note' => [
                    'display' => 'Note',
                    'type' => 'textarea',
                ],
            ],
        ],

        // 'user' => [
        //     'display' => 'User',
        //     'instructions' => 'Some user text.',
        //     'fields' => [
        //         'toggle' => [
        //             'display' => 'Toggle',
        //             'type' => 'toggle',
        //         ],
        //         'user' => [
        //             'display' => 'User',
        //             'mode' => 'select',
        //             'type' => 'users',
        //             'max_items' => 1,
        //             'if' => [
        //                 'toggle' => true,
        //             ],
        //         ],
        //     ],
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Attributes (pro only)
    |--------------------------------------------------------------------------
    |
    | The attributes that can be edited through the attributes panel.
    |
    */

    'attributes' => [

        'heading_1' => [
            'hero' => [
                'type' => 'toggle',
                'display' => 'Hero',
                'default' => null,
                'rendered' => 'class',
                'values' => [
                    'true' => 'hero',
                ],
            ],
            'start' => [
                'type' => 'text',
                'display' => 'Start',
                'default' => null,
                'rendered' => true,
            ],
        ],

        'bold' => [
            'title' => [
                'type' => 'text',
                'display' => 'Title',
                'default' => null,
                'rendered' => true,
            ],
        ],

        'table' => [
            'border' => [
                'type' => 'text',
                'display' => 'Border',
                'rendered' => 'class',
            ],
        ],

        'orderedList' => [
            'list_style_type' => [
                'type' => 'text',
                'display' => 'Type',
                'default' => null,
                'rendered' => 'style',
            ],
            'start' => [
                'type' => 'text',
                'display' => 'Start',
                'default' => null,
                'rendered' => true,
            ],
            'reversed' => [
                'type' => 'toggle',
                'display' => 'Reversed',
                'default' => null,
                'rendered' => true,
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Defaults
    |--------------------------------------------------------------------------
    |
    | Default styles that will be applied to elements with no style set. It's
    | also possible configure multiple sets of defaults to use with different
    | Bard fields, refer to the docs for more info.
    |
    */

    'defaults' => [

        // 'heading_1' => [
        //     'class' => 'heading-1',
        //     'cp_css' => null,
        //     'cp_badge' => false,
        // ],
        // 'heading_2' => [
        //     'class' => 'heading-2',
        //     'cp_css' => null,
        //     'cp_badge' => false,
        // ],
        // 'paragraph' => [
        //     'class' => 'paragraph',
        //     'cp_css' => null,
        //     'cp_badge' => false,
        // ],

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

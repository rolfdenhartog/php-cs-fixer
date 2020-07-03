<?php

return [
    '@PSR2'                                         => true,
    'array_syntax'                                  => ['syntax' => 'short'],
    'binary_operator_spaces'                        => [
        'default'   => 'align_single_space',
        'operators' => [
            '=>' => 'align_single_space_minimal',
        ],
    ],
    'blank_line_after_opening_tag'                  => true,
    'blank_line_before_statement'                   => [
        'statements' => [
            'break',
            'continue',
            'declare',
            'for',
            'foreach',
            'if',
            'return',
            'switch',
            'throw',
            'try',
            'while',
        ],
    ],
    'cast_spaces'                                   => ['space' => 'single'],
    'concat_space'                                  => ['spacing' => 'one'],
    'mb_str_functions'                              => true,
    'native_function_invocation'                    => ['include' => ['@internal']],
    'new_with_braces'                               => true,
    'no_blank_lines_after_class_opening'            => true,
    'no_extra_blank_lines'                          => [
        'tokens' => [
            'extra',
            'use',
            'use_trait',
        ],
    ],
    'no_null_property_initialization'               => true,
    'no_superfluous_phpdoc_tags'                    => [
        'allow_mixed'         => false,
        'allow_unused_params' => false,
        'remove_inheritdoc'   => true,
    ],
    'no_unused_imports'                             => true,
    'no_useless_else'                               => true,
    'no_useless_return'                             => true,
    'no_whitespace_in_blank_line'                   => true,
    'not_operator_with_space'                       => false,
    'not_operator_with_successor_space'             => true,
    'ordered_imports'                               => true,
    'phpdoc_align'                                  => true,
    'phpdoc_add_missing_param_annotation'           => true,
    'phpdoc_no_empty_return'                        => true,
    'phpdoc_order'                                  => true,
    'phpdoc_separation'                             => true,
    'phpdoc_trim'                                   => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'protected_to_private'                          => true,
    'return_assignment'                             => true,
    'return_type_declaration'                       => ['space_before' => 'none'],
    'short_scalar_cast'                             => true,
    'single_quote'                                  => true,
    'single_trait_insert_per_statement'             => true,
    'ternary_to_null_coalescing'                    => true,
    'trailing_comma_in_multiline_array'             => true,
];

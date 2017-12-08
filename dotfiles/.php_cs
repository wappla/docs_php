<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'combine_consecutive_unsets' => true,
        'general_phpdoc_annotation_remove' => ['expectedException', 'expectedExceptionMessage', 'expectedExceptionMessageRegExp'],
        'no_extra_consecutive_blank_lines' => ['break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block'],
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => ['sortAlgorithm' => 'length'],
        'php_unit_strict' => true,
        'php_unit_test_class_requires_covers' => true,
        'phpdoc_order' => true,
        'semicolon_after_instruction' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude([
                'tests',
                'storage',
                'node_modules',
                'vendor',
            ])
            ->in(__DIR__)
    )
;

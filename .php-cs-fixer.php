<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src',
    ])
    ->append(
        (new PhpCsFixer\Finder())
            ->in(__DIR__ . '/tests')
            ->exclude('files'),
    )
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@PHP81Migration' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'no_unused_imports' => true,
        'declare_strict_types' => true,
        'strict_param' => true,
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_align' => true,
        'phpdoc_order' => true,
        'binary_operator_spaces' => true,
        'single_quote' => true,
        'trailing_comma_in_multiline' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;

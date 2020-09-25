<?php

return [

    /*
     * The default namespace to use when scaffolding.
     *
     * Example: Domain\Shared\Actions\SomeAction
     */
    'default_namespace' => 'Shared',
    'app_path' => '/src/',

    /*
     * Overwrite the default stubs for each domain class type.
     * It should be a valid path to your custom stub file.
     * When set to `null`, the default stub is used.
     */
    'stubs' => [
        'action' => null,
        'dto' => null,
        'enum' => null,
        'event' => null,
        'subscriber' => null,
        'model' => null,
        'observer' => null,
        'policy' => null,
        'rule' => null,
    ],

];

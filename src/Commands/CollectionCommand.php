<?php

namespace Sterxa\Console\Commands;

class CollectionCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:collection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an collection for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Collection';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('ddd-helper.stubs.collection');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/collection.stub';
    }
}

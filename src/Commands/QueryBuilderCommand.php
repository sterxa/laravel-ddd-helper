<?php

namespace Sterxa\Console\Commands;

class QueryBuilderCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:query-builder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create query builder for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'QueryBuilder';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('ddd-helper.stubs.query-builder');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/query-builder.stub';
    }

    protected function getNameInput()
    {
        return trim($this->argument('name') . $this->type);
    }
}

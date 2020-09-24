<?php

namespace Sterxa\Console\Commands;

class ActionCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:action';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an action for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('ddd-helper.stubs.action');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/action.stub';
    }
}

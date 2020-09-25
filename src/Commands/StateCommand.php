<?php

namespace Sterxa\Console\Commands;

class StateCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:state';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an state for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'State';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('ddd-helper.stubs.state');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/state.stub';
    }

    protected function getNameInput()
    {
        return trim($this->argument('name') . $this->type);
    }
}

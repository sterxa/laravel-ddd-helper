<?php

namespace Sterxa\Console\Commands;

class SubscriberCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:subscriber';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create event subscriber for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Subscriber';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('ddd-helper.stubs.subscriber');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/subscriber.stub';
    }

    protected function getNameInput()
    {
        return trim($this->argument('name') . $this->type);
    }
}

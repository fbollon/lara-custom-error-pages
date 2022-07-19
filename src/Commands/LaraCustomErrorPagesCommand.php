<?php

namespace Fbollon\LaraCustomErrorPages\Commands;

use Illuminate\Console\Command;

class LaraCustomErrorPagesCommand extends Command
{
    public $signature = 'lara-custom-error-pages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

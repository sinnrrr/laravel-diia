<?php

namespace Sinnrrr\Diia\Commands;

use Illuminate\Console\Command;

class DiiaCommand extends Command
{
    public $signature = 'laravel-diia';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}

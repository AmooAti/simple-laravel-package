<?php

namespace Amooati\ECommerce\Console\Commands;

use Illuminate\Console\Command;

class EcommerceCommand extends Command
{
    protected $signature = 'ecommerce:command';

    public function handle(): void
    {
        $this->output->success('Your command is ok!');
    }
}

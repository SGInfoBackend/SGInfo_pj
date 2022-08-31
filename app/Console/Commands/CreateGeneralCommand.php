<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateGeneralCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'general:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new general';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}

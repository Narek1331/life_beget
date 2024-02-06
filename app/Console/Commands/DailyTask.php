<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;

class DailyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perform daily task';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $a = new ProductService();
        $a->cron();
    }
}

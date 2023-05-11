<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\DashboardController;

class SendSMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-s-m-s';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = app(\App\Http\Controllers\DashboardController::class);    
        $result = $controller->sendsms();
        $this->info($result);
    }
}

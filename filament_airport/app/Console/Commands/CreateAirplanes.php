<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Plane;

class CreateAirplanes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-airplanes';

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
        for ($i = 0; $i < 10; $i++) {
            
        }
    }
}

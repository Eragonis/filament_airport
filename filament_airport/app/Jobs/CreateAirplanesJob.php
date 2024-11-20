<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Plane;

class CreateAirplanesJob implements ShouldQueue
{
    use Queueable;
    protected $title = "";

    /**
     * Create a new job instance.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Plane::create([
            'title'=> $this->title,
        ]);
        sleep(5);
}
}
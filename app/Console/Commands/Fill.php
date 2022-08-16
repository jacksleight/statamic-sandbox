<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Fill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        mkdir(public_path("assets/fill"));
        for ($i=0; $i < 10000; $i++) { 
            file_put_contents(public_path("assets/fill/{$i}.txt"), 1);
        }

        return 0;
    }
}

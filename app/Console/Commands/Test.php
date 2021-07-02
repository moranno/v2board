<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach (glob(app_path('Http//Controllers//Client//Protocols') . '/*.php') as $file) {
            $file = 'App\\Http\\Controllers\\Client\\Protocols' . basename($file, '.php');
            new $file();
            var_dump($file);
        }
    }
}
